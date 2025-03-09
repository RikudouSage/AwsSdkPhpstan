<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MediaPackageV2ClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MediaPackageV2\MediaPackageV2Client>
     */
    public function getClass(): string
    {
        return \Aws\MediaPackageV2\MediaPackageV2Client::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelHarvestJob',
            'createChannel',
            'createChannelGroup',
            'createHarvestJob',
            'createOriginEndpoint',
            'deleteChannel',
            'deleteChannelGroup',
            'deleteChannelPolicy',
            'deleteOriginEndpoint',
            'deleteOriginEndpointPolicy',
            'getChannel',
            'getChannelGroup',
            'getChannelPolicy',
            'getHarvestJob',
            'getOriginEndpoint',
            'getOriginEndpointPolicy',
            'listChannelGroups',
            'listChannels',
            'listHarvestJobs',
            'listOriginEndpoints',
            'listTagsForResource',
            'putChannelPolicy',
            'putOriginEndpointPolicy',
            'tagResource',
            'untagResource',
            'updateChannel',
            'updateChannelGroup',
            'updateOriginEndpoint',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelHarvestJob' => $this->cancelHarvestJob(),
            'createChannel' => $this->createChannel(),
            'createChannelGroup' => $this->createChannelGroup(),
            'createHarvestJob' => $this->createHarvestJob(),
            'createOriginEndpoint' => $this->createOriginEndpoint(),
            'deleteChannel' => $this->deleteChannel(),
            'deleteChannelGroup' => $this->deleteChannelGroup(),
            'deleteChannelPolicy' => $this->deleteChannelPolicy(),
            'deleteOriginEndpoint' => $this->deleteOriginEndpoint(),
            'deleteOriginEndpointPolicy' => $this->deleteOriginEndpointPolicy(),
            'getChannel' => $this->getChannel(),
            'getChannelGroup' => $this->getChannelGroup(),
            'getChannelPolicy' => $this->getChannelPolicy(),
            'getHarvestJob' => $this->getHarvestJob(),
            'getOriginEndpoint' => $this->getOriginEndpoint(),
            'getOriginEndpointPolicy' => $this->getOriginEndpointPolicy(),
            'listChannelGroups' => $this->listChannelGroups(),
            'listChannels' => $this->listChannels(),
            'listHarvestJobs' => $this->listHarvestJobs(),
            'listOriginEndpoints' => $this->listOriginEndpoints(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putChannelPolicy' => $this->putChannelPolicy(),
            'putOriginEndpointPolicy' => $this->putOriginEndpointPolicy(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateChannel' => $this->updateChannel(),
            'updateChannelGroup' => $this->updateChannelGroup(),
            'updateOriginEndpoint' => $this->updateOriginEndpoint(),
        };
    }
    private function cancelHarvestJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ModifiedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('IngestEndpoints'),
                new \PHPStan\Type\Constant\ConstantStringType('InputType'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('InputSwitchConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('OutputHeaderConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HLS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CMAF'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MQCSInputSwitching'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PublishMQCS'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function createChannelGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChannelGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('EgressDomain'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ModifiedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createHarvestJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChannelGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginEndpointName'),
                new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                new \PHPStan\Type\Constant\ConstantStringType('HarvestJobName'),
                new \PHPStan\Type\Constant\ConstantStringType('HarvestedManifests'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduleConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ModifiedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Destination'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationPath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HlsManifests'),
                    new \PHPStan\Type\Constant\ConstantStringType('DashManifests'),
                    new \PHPStan\Type\Constant\ConstantStringType('LowLatencyHlsManifests'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createOriginEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginEndpointName'),
                new \PHPStan\Type\Constant\ConstantStringType('ContainerType'),
                new \PHPStan\Type\Constant\ConstantStringType('Segment'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ModifiedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('StartoverWindowSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('HlsManifests'),
                new \PHPStan\Type\Constant\ConstantStringType('LowLatencyHlsManifests'),
                new \PHPStan\Type\Constant\ConstantStringType('DashManifests'),
                new \PHPStan\Type\Constant\ConstantStringType('ForceEndpointErrorConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CMAF'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TsUseAudioRenditionGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStreams'),
                    new \PHPStan\Type\Constant\ConstantStringType('TsIncludeDvbSubtitles'),
                    new \PHPStan\Type\Constant\ConstantStringType('Scte'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScteFilter'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SPLICE_INSERT'),
                                new \PHPStan\Type\Constant\ConstantStringType('BREAK'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_ADVERTISEMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_ADVERTISEMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_PLACEMENT_OPPORTUNITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_PLACEMENT_OPPORTUNITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROGRAM'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionMethod'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyRotationIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TsEncryptionMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('CmafEncryptionMethod'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                                new \PHPStan\Type\Constant\ConstantStringType('SAMPLE_AES'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CENC'),
                                new \PHPStan\Type\Constant\ConstantStringType('CBCS'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('DrmSystems'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Audio'),
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Video'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_AUDIO_1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_AUDIO_2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_AUDIO_3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_5'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_6'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CLEAR_KEY_AES_128'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAIRPLAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PLAYREADY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WIDEVINE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IRDETO'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChildManifestName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScteHls'),
                        new \PHPStan\Type\Constant\ConstantStringType('FilterConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTag'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AdMarkerHls'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('DATERANGE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestFilter'),
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimeDelaySeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClipStartTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TimeOffset'),
                            new \PHPStan\Type\Constant\ConstantStringType('Precise'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChildManifestName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScteHls'),
                        new \PHPStan\Type\Constant\ConstantStringType('FilterConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTag'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AdMarkerHls'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('DATERANGE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestFilter'),
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimeDelaySeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClipStartTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TimeOffset'),
                            new \PHPStan\Type\Constant\ConstantStringType('Precise'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('FilterConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinUpdatePeriodSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinBufferTimeSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SuggestedPresentationDelaySeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentTemplateFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('PeriodTriggers'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScteDash'),
                        new \PHPStan\Type\Constant\ConstantStringType('DrmSignaling'),
                        new \PHPStan\Type\Constant\ConstantStringType('UtcTiming'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestFilter'),
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimeDelaySeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClipStartTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('NUMBER_WITH_TIMELINE'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DRM_KEY_ROTATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('SOURCE_CHANGES'),
                                new \PHPStan\Type\Constant\ConstantStringType('SOURCE_DISRUPTIONS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AdMarkerDash'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BINARY'),
                                new \PHPStan\Type\Constant\ConstantStringType('XML'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INDIVIDUAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('REFERENCED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TimingMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimingSource'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_HEAD'),
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_ISO'),
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_XSDATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('UTC_DIRECT'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointErrorConditions'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STALE_MANIFEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('INCOMPLETE_MANIFEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('MISSING_DRM_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SLATE_INPUT'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function deleteChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteChannelGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteChannelPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteOriginEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteOriginEndpointPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ModifiedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('IngestEndpoints'),
                new \PHPStan\Type\Constant\ConstantStringType('InputType'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('InputSwitchConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('OutputHeaderConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HLS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CMAF'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MQCSInputSwitching'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PublishMQCS'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getChannelGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChannelGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('EgressDomain'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ModifiedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getChannelPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChannelGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getHarvestJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChannelGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginEndpointName'),
                new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                new \PHPStan\Type\Constant\ConstantStringType('HarvestJobName'),
                new \PHPStan\Type\Constant\ConstantStringType('HarvestedManifests'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduleConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ModifiedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Destination'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationPath'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HlsManifests'),
                    new \PHPStan\Type\Constant\ConstantStringType('DashManifests'),
                    new \PHPStan\Type\Constant\ConstantStringType('LowLatencyHlsManifests'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getOriginEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginEndpointName'),
                new \PHPStan\Type\Constant\ConstantStringType('ContainerType'),
                new \PHPStan\Type\Constant\ConstantStringType('Segment'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ModifiedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('StartoverWindowSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('HlsManifests'),
                new \PHPStan\Type\Constant\ConstantStringType('LowLatencyHlsManifests'),
                new \PHPStan\Type\Constant\ConstantStringType('DashManifests'),
                new \PHPStan\Type\Constant\ConstantStringType('ForceEndpointErrorConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CMAF'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TsUseAudioRenditionGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStreams'),
                    new \PHPStan\Type\Constant\ConstantStringType('TsIncludeDvbSubtitles'),
                    new \PHPStan\Type\Constant\ConstantStringType('Scte'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScteFilter'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SPLICE_INSERT'),
                                new \PHPStan\Type\Constant\ConstantStringType('BREAK'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_ADVERTISEMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_ADVERTISEMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_PLACEMENT_OPPORTUNITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_PLACEMENT_OPPORTUNITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROGRAM'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionMethod'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyRotationIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TsEncryptionMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('CmafEncryptionMethod'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                                new \PHPStan\Type\Constant\ConstantStringType('SAMPLE_AES'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CENC'),
                                new \PHPStan\Type\Constant\ConstantStringType('CBCS'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('DrmSystems'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Audio'),
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Video'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_AUDIO_1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_AUDIO_2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_AUDIO_3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_5'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_6'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CLEAR_KEY_AES_128'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAIRPLAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PLAYREADY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WIDEVINE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IRDETO'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChildManifestName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScteHls'),
                        new \PHPStan\Type\Constant\ConstantStringType('FilterConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTag'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AdMarkerHls'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('DATERANGE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestFilter'),
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimeDelaySeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClipStartTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TimeOffset'),
                            new \PHPStan\Type\Constant\ConstantStringType('Precise'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChildManifestName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScteHls'),
                        new \PHPStan\Type\Constant\ConstantStringType('FilterConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTag'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AdMarkerHls'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('DATERANGE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestFilter'),
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimeDelaySeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClipStartTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TimeOffset'),
                            new \PHPStan\Type\Constant\ConstantStringType('Precise'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('FilterConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinUpdatePeriodSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinBufferTimeSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SuggestedPresentationDelaySeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentTemplateFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('PeriodTriggers'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScteDash'),
                        new \PHPStan\Type\Constant\ConstantStringType('DrmSignaling'),
                        new \PHPStan\Type\Constant\ConstantStringType('UtcTiming'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestFilter'),
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimeDelaySeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClipStartTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('NUMBER_WITH_TIMELINE'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DRM_KEY_ROTATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('SOURCE_CHANGES'),
                                new \PHPStan\Type\Constant\ConstantStringType('SOURCE_DISRUPTIONS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AdMarkerDash'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BINARY'),
                                new \PHPStan\Type\Constant\ConstantStringType('XML'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INDIVIDUAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('REFERENCED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TimingMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimingSource'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_HEAD'),
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_ISO'),
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_XSDATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('UTC_DIRECT'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointErrorConditions'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STALE_MANIFEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('INCOMPLETE_MANIFEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('MISSING_DRM_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SLATE_INPUT'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getOriginEndpointPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChannelGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginEndpointName'),
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listChannelGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChannelGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModifiedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listChannels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChannelGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModifiedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HLS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CMAF'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listHarvestJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChannelGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginEndpointName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('HarvestJobName'),
                        new \PHPStan\Type\Constant\ConstantStringType('HarvestedManifests'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModifiedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Destination'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DestinationPath'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HlsManifests'),
                            new \PHPStan\Type\Constant\ConstantStringType('DashManifests'),
                            new \PHPStan\Type\Constant\ConstantStringType('LowLatencyHlsManifests'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
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
    private function listOriginEndpoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChannelGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginEndpointName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContainerType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModifiedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('HlsManifests'),
                        new \PHPStan\Type\Constant\ConstantStringType('LowLatencyHlsManifests'),
                        new \PHPStan\Type\Constant\ConstantStringType('DashManifests'),
                        new \PHPStan\Type\Constant\ConstantStringType('ForceEndpointErrorConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CMAF'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ChildManifestName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ChildManifestName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointErrorConditions'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STALE_MANIFEST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INCOMPLETE_MANIFEST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MISSING_DRM_KEY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SLATE_INPUT'),
                                ]),
                            ])),
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
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function putChannelPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putOriginEndpointPolicy(): ?\PHPStan\Type\Type
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
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ModifiedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('IngestEndpoints'),
                new \PHPStan\Type\Constant\ConstantStringType('InputType'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('InputSwitchConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('OutputHeaderConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HLS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CMAF'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MQCSInputSwitching'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PublishMQCS'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function updateChannelGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChannelGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('EgressDomain'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ModifiedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateOriginEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginEndpointName'),
                new \PHPStan\Type\Constant\ConstantStringType('ContainerType'),
                new \PHPStan\Type\Constant\ConstantStringType('Segment'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ModifiedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('StartoverWindowSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('HlsManifests'),
                new \PHPStan\Type\Constant\ConstantStringType('LowLatencyHlsManifests'),
                new \PHPStan\Type\Constant\ConstantStringType('ForceEndpointErrorConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('DashManifests'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CMAF'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TsUseAudioRenditionGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStreams'),
                    new \PHPStan\Type\Constant\ConstantStringType('TsIncludeDvbSubtitles'),
                    new \PHPStan\Type\Constant\ConstantStringType('Scte'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScteFilter'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SPLICE_INSERT'),
                                new \PHPStan\Type\Constant\ConstantStringType('BREAK'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_ADVERTISEMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_ADVERTISEMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_PLACEMENT_OPPORTUNITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_PLACEMENT_OPPORTUNITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROGRAM'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionMethod'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyRotationIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TsEncryptionMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('CmafEncryptionMethod'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                                new \PHPStan\Type\Constant\ConstantStringType('SAMPLE_AES'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CENC'),
                                new \PHPStan\Type\Constant\ConstantStringType('CBCS'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('DrmSystems'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Audio'),
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Video'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_AUDIO_1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_AUDIO_2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_AUDIO_3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_5'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_6'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET_VIDEO_8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CLEAR_KEY_AES_128'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAIRPLAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PLAYREADY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WIDEVINE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IRDETO'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChildManifestName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScteHls'),
                        new \PHPStan\Type\Constant\ConstantStringType('FilterConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTag'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AdMarkerHls'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('DATERANGE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestFilter'),
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimeDelaySeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClipStartTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TimeOffset'),
                            new \PHPStan\Type\Constant\ConstantStringType('Precise'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChildManifestName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScteHls'),
                        new \PHPStan\Type\Constant\ConstantStringType('FilterConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTag'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AdMarkerHls'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('DATERANGE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestFilter'),
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimeDelaySeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClipStartTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TimeOffset'),
                            new \PHPStan\Type\Constant\ConstantStringType('Precise'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointErrorConditions'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STALE_MANIFEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('INCOMPLETE_MANIFEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('MISSING_DRM_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SLATE_INPUT'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('FilterConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinUpdatePeriodSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinBufferTimeSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SuggestedPresentationDelaySeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentTemplateFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('PeriodTriggers'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScteDash'),
                        new \PHPStan\Type\Constant\ConstantStringType('DrmSignaling'),
                        new \PHPStan\Type\Constant\ConstantStringType('UtcTiming'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestFilter'),
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimeDelaySeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClipStartTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('NUMBER_WITH_TIMELINE'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DRM_KEY_ROTATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('SOURCE_CHANGES'),
                                new \PHPStan\Type\Constant\ConstantStringType('SOURCE_DISRUPTIONS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AdMarkerDash'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BINARY'),
                                new \PHPStan\Type\Constant\ConstantStringType('XML'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INDIVIDUAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('REFERENCED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TimingMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimingSource'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_HEAD'),
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_ISO'),
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_XSDATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('UTC_DIRECT'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
}