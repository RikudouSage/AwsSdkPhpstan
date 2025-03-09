<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class KinesisVideoClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\KinesisVideo\KinesisVideoClient>
     */
    public function getClass(): string
    {
        return \Aws\KinesisVideo\KinesisVideoClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createSignalingChannel',
            'createStream',
            'deleteEdgeConfiguration',
            'deleteSignalingChannel',
            'deleteStream',
            'describeEdgeConfiguration',
            'describeImageGenerationConfiguration',
            'describeMappedResourceConfiguration',
            'describeMediaStorageConfiguration',
            'describeNotificationConfiguration',
            'describeSignalingChannel',
            'describeStream',
            'getDataEndpoint',
            'getSignalingChannelEndpoint',
            'listEdgeAgentConfigurations',
            'listSignalingChannels',
            'listStreams',
            'listTagsForResource',
            'listTagsForStream',
            'startEdgeConfigurationUpdate',
            'tagResource',
            'tagStream',
            'untagResource',
            'untagStream',
            'updateDataRetention',
            'updateImageGenerationConfiguration',
            'updateMediaStorageConfiguration',
            'updateNotificationConfiguration',
            'updateSignalingChannel',
            'updateStream',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createSignalingChannel' => $this->createSignalingChannel(),
            'createStream' => $this->createStream(),
            'deleteEdgeConfiguration' => $this->deleteEdgeConfiguration(),
            'deleteSignalingChannel' => $this->deleteSignalingChannel(),
            'deleteStream' => $this->deleteStream(),
            'describeEdgeConfiguration' => $this->describeEdgeConfiguration(),
            'describeImageGenerationConfiguration' => $this->describeImageGenerationConfiguration(),
            'describeMappedResourceConfiguration' => $this->describeMappedResourceConfiguration(),
            'describeMediaStorageConfiguration' => $this->describeMediaStorageConfiguration(),
            'describeNotificationConfiguration' => $this->describeNotificationConfiguration(),
            'describeSignalingChannel' => $this->describeSignalingChannel(),
            'describeStream' => $this->describeStream(),
            'getDataEndpoint' => $this->getDataEndpoint(),
            'getSignalingChannelEndpoint' => $this->getSignalingChannelEndpoint(),
            'listEdgeAgentConfigurations' => $this->listEdgeAgentConfigurations(),
            'listSignalingChannels' => $this->listSignalingChannels(),
            'listStreams' => $this->listStreams(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTagsForStream' => $this->listTagsForStream(),
            'startEdgeConfigurationUpdate' => $this->startEdgeConfigurationUpdate(),
            'tagResource' => $this->tagResource(),
            'tagStream' => $this->tagStream(),
            'untagResource' => $this->untagResource(),
            'untagStream' => $this->untagStream(),
            'updateDataRetention' => $this->updateDataRetention(),
            'updateImageGenerationConfiguration' => $this->updateImageGenerationConfiguration(),
            'updateMediaStorageConfiguration' => $this->updateMediaStorageConfiguration(),
            'updateNotificationConfiguration' => $this->updateNotificationConfiguration(),
            'updateSignalingChannel' => $this->updateSignalingChannel(),
            'updateStream' => $this->updateStream(),
        };
    }
    private function createSignalingChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChannelARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteEdgeConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSignalingChannel(): ?\PHPStan\Type\Type
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
    private function describeEdgeConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamName'),
                new \PHPStan\Type\Constant\ConstantStringType('StreamARN'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('SyncStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('FailedStatusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('EdgeConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('EdgeAgentStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SYNCING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACKNOWLEDGED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING_ACKNOWLEDGED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HubDeviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecorderConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('UploaderConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MediaSourceConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MediaUriSecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediaUriType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RTSP_URI'),
                                new \PHPStan\Type\Constant\ConstantStringType('FILE_URI'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                            new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                            new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeRetentionInHours'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocalSizeConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteAfterUpload'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxLocalMediaSizeInMB'),
                            new \PHPStan\Type\Constant\ConstantStringType('StrategyOnFullSize'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE_OLDEST_MEDIA'),
                                new \PHPStan\Type\Constant\ConstantStringType('DENY_NEW_MEDIA'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LastRecorderStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUploaderStatus'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JobStatusDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastCollectedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecorderStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('USER_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_ERROR'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JobStatusDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastCollectedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('UploaderStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('USER_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_ERROR'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeImageGenerationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImageGenerationConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageSelectorType'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('SamplingInterval'),
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                    new \PHPStan\Type\Constant\ConstantStringType('FormatConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('WidthPixels'),
                    new \PHPStan\Type\Constant\ConstantStringType('HeightPixels'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SERVER_TIMESTAMP'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRODUCER_TIMESTAMP'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('JPEG'),
                        new \PHPStan\Type\Constant\ConstantStringType('PNG'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\Constant\ConstantStringType('JPEGQuality'), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function describeMappedResourceConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MappedResourceConfigurationList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeMediaStorageConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MediaStorageConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StreamARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeNotificationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NotificationConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationConfig'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Uri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeSignalingChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChannelInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SingleMasterConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SINGLE_MASTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('FULL_MESH'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MessageTtlSeconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaType'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataRetentionInHours'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getDataEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataEndpoint'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSignalingChannelEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceEndpointList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceEndpoint'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WSS'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEBRTC'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listEdgeAgentConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EdgeConfigs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StreamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyncStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailedStatusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('EdgeConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYNCING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACKNOWLEDGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYNC_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING_ACKNOWLEDGED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HubDeviceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecorderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('UploaderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeletionConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MediaSourceConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScheduleConfig'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MediaUriSecretArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('MediaUriType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RTSP_URI'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FILE_URI'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                                new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ScheduleConfig'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                                new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EdgeRetentionInHours'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocalSizeConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeleteAfterUpload'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MaxLocalMediaSizeInMB'),
                                new \PHPStan\Type\Constant\ConstantStringType('StrategyOnFullSize'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_OLDEST_MEDIA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DENY_NEW_MEDIA'),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSignalingChannels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChannelInfoList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SingleMasterConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SINGLE_MASTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('FULL_MESH'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MessageTtlSeconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStreams(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamInfoList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaType'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataRetentionInHours'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listTagsForStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function startEdgeConfigurationUpdate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamName'),
                new \PHPStan\Type\Constant\ConstantStringType('StreamARN'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('SyncStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('FailedStatusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('EdgeConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SYNCING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACKNOWLEDGED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                    new \PHPStan\Type\Constant\ConstantStringType('SYNC_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING_ACKNOWLEDGED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HubDeviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecorderConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('UploaderConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MediaSourceConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MediaUriSecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediaUriType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RTSP_URI'),
                                new \PHPStan\Type\Constant\ConstantStringType('FILE_URI'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                            new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                            new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeRetentionInHours'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocalSizeConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteAfterUpload'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxLocalMediaSizeInMB'),
                            new \PHPStan\Type\Constant\ConstantStringType('StrategyOnFullSize'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE_OLDEST_MEDIA'),
                                new \PHPStan\Type\Constant\ConstantStringType('DENY_NEW_MEDIA'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
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
    private function tagStream(): ?\PHPStan\Type\Type
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
    private function untagStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateDataRetention(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateImageGenerationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateMediaStorageConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateNotificationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateSignalingChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}