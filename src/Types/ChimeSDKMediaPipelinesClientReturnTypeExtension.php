<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ChimeSDKMediaPipelinesClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ChimeSDKMediaPipelines\ChimeSDKMediaPipelinesClient>
     */
    public function getClass(): string
    {
        return \Aws\ChimeSDKMediaPipelines\ChimeSDKMediaPipelinesClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createMediaCapturePipeline',
            'createMediaConcatenationPipeline',
            'createMediaInsightsPipeline',
            'createMediaInsightsPipelineConfiguration',
            'createMediaLiveConnectorPipeline',
            'createMediaPipelineKinesisVideoStreamPool',
            'createMediaStreamPipeline',
            'deleteMediaCapturePipeline',
            'deleteMediaInsightsPipelineConfiguration',
            'deleteMediaPipeline',
            'deleteMediaPipelineKinesisVideoStreamPool',
            'getMediaCapturePipeline',
            'getMediaInsightsPipelineConfiguration',
            'getMediaPipeline',
            'getMediaPipelineKinesisVideoStreamPool',
            'getSpeakerSearchTask',
            'getVoiceToneAnalysisTask',
            'listMediaCapturePipelines',
            'listMediaInsightsPipelineConfigurations',
            'listMediaPipelineKinesisVideoStreamPools',
            'listMediaPipelines',
            'listTagsForResource',
            'startSpeakerSearchTask',
            'startVoiceToneAnalysisTask',
            'stopSpeakerSearchTask',
            'stopVoiceToneAnalysisTask',
            'tagResource',
            'untagResource',
            'updateMediaInsightsPipelineConfiguration',
            'updateMediaInsightsPipelineStatus',
            'updateMediaPipelineKinesisVideoStreamPool',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createMediaCapturePipeline' => $this->createMediaCapturePipeline(),
            'createMediaConcatenationPipeline' => $this->createMediaConcatenationPipeline(),
            'createMediaInsightsPipeline' => $this->createMediaInsightsPipeline(),
            'createMediaInsightsPipelineConfiguration' => $this->createMediaInsightsPipelineConfiguration(),
            'createMediaLiveConnectorPipeline' => $this->createMediaLiveConnectorPipeline(),
            'createMediaPipelineKinesisVideoStreamPool' => $this->createMediaPipelineKinesisVideoStreamPool(),
            'createMediaStreamPipeline' => $this->createMediaStreamPipeline(),
            'deleteMediaCapturePipeline' => $this->deleteMediaCapturePipeline(),
            'deleteMediaInsightsPipelineConfiguration' => $this->deleteMediaInsightsPipelineConfiguration(),
            'deleteMediaPipeline' => $this->deleteMediaPipeline(),
            'deleteMediaPipelineKinesisVideoStreamPool' => $this->deleteMediaPipelineKinesisVideoStreamPool(),
            'getMediaCapturePipeline' => $this->getMediaCapturePipeline(),
            'getMediaInsightsPipelineConfiguration' => $this->getMediaInsightsPipelineConfiguration(),
            'getMediaPipeline' => $this->getMediaPipeline(),
            'getMediaPipelineKinesisVideoStreamPool' => $this->getMediaPipelineKinesisVideoStreamPool(),
            'getSpeakerSearchTask' => $this->getSpeakerSearchTask(),
            'getVoiceToneAnalysisTask' => $this->getVoiceToneAnalysisTask(),
            'listMediaCapturePipelines' => $this->listMediaCapturePipelines(),
            'listMediaInsightsPipelineConfigurations' => $this->listMediaInsightsPipelineConfigurations(),
            'listMediaPipelineKinesisVideoStreamPools' => $this->listMediaPipelineKinesisVideoStreamPools(),
            'listMediaPipelines' => $this->listMediaPipelines(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startSpeakerSearchTask' => $this->startSpeakerSearchTask(),
            'startVoiceToneAnalysisTask' => $this->startVoiceToneAnalysisTask(),
            'stopSpeakerSearchTask' => $this->stopSpeakerSearchTask(),
            'stopVoiceToneAnalysisTask' => $this->stopVoiceToneAnalysisTask(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateMediaInsightsPipelineConfiguration' => $this->updateMediaInsightsPipelineConfiguration(),
            'updateMediaInsightsPipelineStatus' => $this->updateMediaInsightsPipelineStatus(),
            'updateMediaPipelineKinesisVideoStreamPool' => $this->updateMediaPipelineKinesisVideoStreamPool(),
        };
    }
    private function createMediaCapturePipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MediaCapturePipeline'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SinkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SinkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChimeSdkMeetingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SseAwsKeyManagementParams'),
                    new \PHPStan\Type\Constant\ConstantStringType('SinkIamRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('ChimeSdkMeeting'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotStarted'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArtifactsConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SelectedVideoStreams'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AttendeeIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExternalUserIds'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Audio'),
                            new \PHPStan\Type\Constant\ConstantStringType('Video'),
                            new \PHPStan\Type\Constant\ConstantStringType('Content'),
                            new \PHPStan\Type\Constant\ConstantStringType('CompositedVideo'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MuxType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AudioOnly'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AudioWithActiveSpeakerVideo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AudioWithCompositedVideo'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('MuxType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('VideoOnly'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('MuxType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentOnly'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Layout'),
                                new \PHPStan\Type\Constant\ConstantStringType('Resolution'),
                                new \PHPStan\Type\Constant\ConstantStringType('GridViewConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('GridView'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FHD'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ContentShareLayout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PresenterOnlyConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ActiveSpeakerOnlyConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HorizontalLayoutConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VerticalLayoutConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VideoAttribute'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CanvasOrientation'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PresenterOnly'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Horizontal'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Vertical'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ActiveSpeakerOnly'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PresenterPosition'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TopLeft'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TopRight'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BottomLeft'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BottomRight'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ActiveSpeakerPosition'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TopLeft'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TopRight'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BottomLeft'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BottomRight'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('TileOrder'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TilePosition'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TileCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TileAspectRatio'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('JoinSequence'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SpeakerSequence'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Bottom'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('TileOrder'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TilePosition'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TileCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TileAspectRatio'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('JoinSequence'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SpeakerSequence'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CornerRadius'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BorderColor'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HighlightColor'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BorderThickness'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Black'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Red'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Green'),
                                            new \PHPStan\Type\Constant\ConstantStringType('White'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Yellow'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Black'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Red'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Green'),
                                            new \PHPStan\Type\Constant\ConstantStringType('White'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Yellow'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Landscape'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Portrait'),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AwsKmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsKmsEncryptionContext'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createMediaConcatenationPipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MediaConcatenationPipeline'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sources'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sinks'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediaCapturePipelineSourceConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('MediaCapturePipeline'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ChimeSdkMeetingConfiguration'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ArtifactsConfiguration'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Audio'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Video'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Content'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DataChannel'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TranscriptionMessages'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MeetingEvents'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CompositedVideo'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3BucketSinkConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotStarted'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createMediaInsightsPipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipeline'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipelineConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('KinesisVideoStreamSourceRuntimeConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsRuntimeMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('KinesisVideoStreamRecordingSourceRuntimeConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3RecordingSinkRuntimeConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElementStatuses'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotStarted'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Streams'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaEncoding'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaSampleRate'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StreamArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('FragmentNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('StreamChannelDefinition'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfChannels'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ChannelDefinitions'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ChannelId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ParticipantRole'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                                            ]),
                                        ]),
                                    ])),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantStringType('pcm'),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Streams'),
                        new \PHPStan\Type\Constant\ConstantStringType('FragmentSelector'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StreamArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FragmentSelectorType'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimestampRange'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ProducerTimestamp'),
                                new \PHPStan\Type\Constant\ConstantStringType('ServerTimestamp'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartTimestamp'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndTimestamp'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecordingFileFormat'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Wav'),
                            new \PHPStan\Type\Constant\ConstantStringType('Opus'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AmazonTranscribeCallAnalyticsProcessor'),
                                new \PHPStan\Type\Constant\ConstantStringType('VoiceAnalyticsProcessor'),
                                new \PHPStan\Type\Constant\ConstantStringType('AmazonTranscribeProcessor'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisDataStreamSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('SqsQueueSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnsTopicSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3RecordingSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('VoiceEnhancementSink'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NotStarted'),
                                new \PHPStan\Type\Constant\ConstantStringType('NotSupported'),
                                new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                                new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                                new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                                new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createMediaInsightsPipelineConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipelineConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipelineConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipelineConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RealTimeAlertConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Elements'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipelineConfigurationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeywordMatchConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('SentimentConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('IssueDetectionConfiguration'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KeywordMatch'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Sentiment'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IssueDetection'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RuleName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Keywords'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Negate'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RuleName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SentimentType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TimePeriod'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('NEGATIVE'),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RuleName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('AmazonTranscribeCallAnalyticsProcessorConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('AmazonTranscribeProcessorConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisDataStreamSinkConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3RecordingSinkConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceAnalyticsProcessorConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionSinkConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('SqsQueueSinkConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('SnsTopicSinkConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceEnhancementSinkConfiguration'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AmazonTranscribeCallAnalyticsProcessor'),
                                new \PHPStan\Type\Constant\ConstantStringType('VoiceAnalyticsProcessor'),
                                new \PHPStan\Type\Constant\ConstantStringType('AmazonTranscribeProcessor'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisDataStreamSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('SqsQueueSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnsTopicSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3RecordingSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('VoiceEnhancementSink'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyName'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyFilterName'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyFilterMethod'),
                                new \PHPStan\Type\Constant\ConstantStringType('LanguageModelName'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnablePartialResultsStabilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('PartialResultsStability'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentIdentificationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentRedactionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('PiiEntityTypes'),
                                new \PHPStan\Type\Constant\ConstantStringType('FilterPartialResults'),
                                new \PHPStan\Type\Constant\ConstantStringType('PostCallAnalyticsSettings'),
                                new \PHPStan\Type\Constant\ConstantStringType('CallAnalyticsStreamCategories'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                                    new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                                    new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('pt-BR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('remove'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mask'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tag'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('high'),
                                    new \PHPStan\Type\Constant\ConstantStringType('medium'),
                                    new \PHPStan\Type\Constant\ConstantStringType('low'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('PII'),
                                new \PHPStan\Type\Constant\ConstantStringType('PII'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OutputLocation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ContentRedactionOutput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OutputEncryptionKMSKeyId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('redacted'),
                                        new \PHPStan\Type\Constant\ConstantStringType('redacted_and_unredacted'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyName'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyFilterName'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyFilterMethod'),
                                new \PHPStan\Type\Constant\ConstantStringType('ShowSpeakerLabel'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnablePartialResultsStabilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('PartialResultsStability'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentIdentificationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentRedactionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('PiiEntityTypes'),
                                new \PHPStan\Type\Constant\ConstantStringType('LanguageModelName'),
                                new \PHPStan\Type\Constant\ConstantStringType('FilterPartialResults'),
                                new \PHPStan\Type\Constant\ConstantStringType('IdentifyLanguage'),
                                new \PHPStan\Type\Constant\ConstantStringType('IdentifyMultipleLanguages'),
                                new \PHPStan\Type\Constant\ConstantStringType('LanguageOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreferredLanguage'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyNames'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyFilterNames'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                                    new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                                    new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('pt-BR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('remove'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mask'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tag'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('high'),
                                    new \PHPStan\Type\Constant\ConstantStringType('medium'),
                                    new \PHPStan\Type\Constant\ConstantStringType('low'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('PII'),
                                new \PHPStan\Type\Constant\ConstantStringType('PII'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                                    new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                                    new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('pt-BR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InsightsTarget'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                                new \PHPStan\Type\Constant\ConstantStringType('RecordingFileFormat'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Wav'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Opus'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SpeakerSearchStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('VoiceToneAnalysisStatus'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InsightsTarget'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InsightsTarget'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InsightsTarget'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createMediaLiveConnectorPipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MediaLiveConnectorPipeline'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Sources'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sinks'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChimeSdkMeetingLiveConnectorConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('ChimeSdkMeeting'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('MuxType'),
                                new \PHPStan\Type\Constant\ConstantStringType('CompositedVideo'),
                                new \PHPStan\Type\Constant\ConstantStringType('SourceConfiguration'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AudioWithCompositedVideo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AudioWithActiveSpeakerVideo'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Layout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Resolution'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GridViewConfiguration'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('GridView'),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FHD'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ContentShareLayout'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PresenterOnlyConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ActiveSpeakerOnlyConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HorizontalLayoutConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VerticalLayoutConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VideoAttribute'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CanvasOrientation'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('PresenterOnly'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Horizontal'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Vertical'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ActiveSpeakerOnly'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('PresenterPosition'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('TopLeft'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TopRight'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BottomLeft'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BottomRight'),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ActiveSpeakerPosition'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('TopLeft'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TopRight'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BottomLeft'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BottomRight'),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TileOrder'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TilePosition'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TileCount'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TileAspectRatio'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('JoinSequence'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SpeakerSequence'),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Top'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Bottom'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TileOrder'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TilePosition'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TileCount'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TileAspectRatio'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('JoinSequence'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SpeakerSequence'),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CornerRadius'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BorderColor'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HighlightColor'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BorderThickness'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Black'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Red'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Green'),
                                                new \PHPStan\Type\Constant\ConstantStringType('White'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Yellow'),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Black'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Red'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Green'),
                                                new \PHPStan\Type\Constant\ConstantStringType('White'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Yellow'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Landscape'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Portrait'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SelectedVideoStreams'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AttendeeIds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ExternalUserIds'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SinkType'),
                            new \PHPStan\Type\Constant\ConstantStringType('RTMPConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('RTMP'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                                new \PHPStan\Type\Constant\ConstantStringType('AudioChannels'),
                                new \PHPStan\Type\Constant\ConstantStringType('AudioSampleRate'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Stereo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Mono'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotStarted'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createMediaPipelineKinesisVideoStreamPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KinesisVideoStreamPoolConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PoolArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataRetentionInHours'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createMediaStreamPipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MediaStreamPipeline'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sources'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sinks'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotStarted'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('ChimeSdkMeeting'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SinkArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SinkType'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReservedStreamCapacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediaStreamType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisVideoStreamPool'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MixedAudio'),
                                new \PHPStan\Type\Constant\ConstantStringType('IndividualAudio'),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deleteMediaCapturePipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteMediaInsightsPipelineConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteMediaPipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteMediaPipelineKinesisVideoStreamPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getMediaCapturePipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MediaCapturePipeline'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SinkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SinkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChimeSdkMeetingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SseAwsKeyManagementParams'),
                    new \PHPStan\Type\Constant\ConstantStringType('SinkIamRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('ChimeSdkMeeting'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotStarted'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArtifactsConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SelectedVideoStreams'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AttendeeIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExternalUserIds'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Audio'),
                            new \PHPStan\Type\Constant\ConstantStringType('Video'),
                            new \PHPStan\Type\Constant\ConstantStringType('Content'),
                            new \PHPStan\Type\Constant\ConstantStringType('CompositedVideo'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MuxType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AudioOnly'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AudioWithActiveSpeakerVideo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AudioWithCompositedVideo'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('MuxType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('VideoOnly'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('MuxType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentOnly'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Layout'),
                                new \PHPStan\Type\Constant\ConstantStringType('Resolution'),
                                new \PHPStan\Type\Constant\ConstantStringType('GridViewConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('GridView'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FHD'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ContentShareLayout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PresenterOnlyConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ActiveSpeakerOnlyConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HorizontalLayoutConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VerticalLayoutConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VideoAttribute'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CanvasOrientation'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PresenterOnly'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Horizontal'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Vertical'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ActiveSpeakerOnly'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PresenterPosition'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TopLeft'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TopRight'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BottomLeft'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BottomRight'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ActiveSpeakerPosition'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TopLeft'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TopRight'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BottomLeft'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BottomRight'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('TileOrder'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TilePosition'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TileCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TileAspectRatio'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('JoinSequence'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SpeakerSequence'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Bottom'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('TileOrder'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TilePosition'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TileCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TileAspectRatio'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('JoinSequence'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SpeakerSequence'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CornerRadius'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BorderColor'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HighlightColor'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BorderThickness'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Black'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Red'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Green'),
                                            new \PHPStan\Type\Constant\ConstantStringType('White'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Yellow'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Black'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Red'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Green'),
                                            new \PHPStan\Type\Constant\ConstantStringType('White'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Yellow'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Landscape'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Portrait'),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AwsKmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsKmsEncryptionContext'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getMediaInsightsPipelineConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipelineConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipelineConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipelineConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RealTimeAlertConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Elements'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipelineConfigurationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeywordMatchConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('SentimentConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('IssueDetectionConfiguration'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KeywordMatch'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Sentiment'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IssueDetection'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RuleName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Keywords'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Negate'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RuleName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SentimentType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TimePeriod'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('NEGATIVE'),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RuleName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('AmazonTranscribeCallAnalyticsProcessorConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('AmazonTranscribeProcessorConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisDataStreamSinkConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3RecordingSinkConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceAnalyticsProcessorConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionSinkConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('SqsQueueSinkConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('SnsTopicSinkConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceEnhancementSinkConfiguration'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AmazonTranscribeCallAnalyticsProcessor'),
                                new \PHPStan\Type\Constant\ConstantStringType('VoiceAnalyticsProcessor'),
                                new \PHPStan\Type\Constant\ConstantStringType('AmazonTranscribeProcessor'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisDataStreamSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('SqsQueueSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnsTopicSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3RecordingSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('VoiceEnhancementSink'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyName'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyFilterName'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyFilterMethod'),
                                new \PHPStan\Type\Constant\ConstantStringType('LanguageModelName'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnablePartialResultsStabilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('PartialResultsStability'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentIdentificationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentRedactionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('PiiEntityTypes'),
                                new \PHPStan\Type\Constant\ConstantStringType('FilterPartialResults'),
                                new \PHPStan\Type\Constant\ConstantStringType('PostCallAnalyticsSettings'),
                                new \PHPStan\Type\Constant\ConstantStringType('CallAnalyticsStreamCategories'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                                    new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                                    new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('pt-BR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('remove'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mask'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tag'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('high'),
                                    new \PHPStan\Type\Constant\ConstantStringType('medium'),
                                    new \PHPStan\Type\Constant\ConstantStringType('low'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('PII'),
                                new \PHPStan\Type\Constant\ConstantStringType('PII'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OutputLocation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ContentRedactionOutput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OutputEncryptionKMSKeyId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('redacted'),
                                        new \PHPStan\Type\Constant\ConstantStringType('redacted_and_unredacted'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyName'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyFilterName'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyFilterMethod'),
                                new \PHPStan\Type\Constant\ConstantStringType('ShowSpeakerLabel'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnablePartialResultsStabilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('PartialResultsStability'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentIdentificationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentRedactionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('PiiEntityTypes'),
                                new \PHPStan\Type\Constant\ConstantStringType('LanguageModelName'),
                                new \PHPStan\Type\Constant\ConstantStringType('FilterPartialResults'),
                                new \PHPStan\Type\Constant\ConstantStringType('IdentifyLanguage'),
                                new \PHPStan\Type\Constant\ConstantStringType('IdentifyMultipleLanguages'),
                                new \PHPStan\Type\Constant\ConstantStringType('LanguageOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreferredLanguage'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyNames'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyFilterNames'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                                    new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                                    new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('pt-BR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('remove'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mask'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tag'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('high'),
                                    new \PHPStan\Type\Constant\ConstantStringType('medium'),
                                    new \PHPStan\Type\Constant\ConstantStringType('low'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('PII'),
                                new \PHPStan\Type\Constant\ConstantStringType('PII'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                                    new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                                    new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('pt-BR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InsightsTarget'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                                new \PHPStan\Type\Constant\ConstantStringType('RecordingFileFormat'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Wav'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Opus'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SpeakerSearchStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('VoiceToneAnalysisStatus'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InsightsTarget'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InsightsTarget'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InsightsTarget'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getMediaPipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MediaPipeline'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MediaCapturePipeline'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaLiveConnectorPipeline'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaConcatenationPipeline'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipeline'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaStreamPipeline'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('SinkType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SinkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChimeSdkMeetingConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('SseAwsKeyManagementParams'),
                        new \PHPStan\Type\Constant\ConstantStringType('SinkIamRoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('ChimeSdkMeeting'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                            new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotStarted'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourceConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ArtifactsConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SelectedVideoStreams'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttendeeIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ExternalUserIds'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Audio'),
                                new \PHPStan\Type\Constant\ConstantStringType('Video'),
                                new \PHPStan\Type\Constant\ConstantStringType('Content'),
                                new \PHPStan\Type\Constant\ConstantStringType('CompositedVideo'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MuxType'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AudioOnly'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AudioWithActiveSpeakerVideo'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AudioWithCompositedVideo'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MuxType'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('VideoOnly'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MuxType'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('ContentOnly'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Layout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Resolution'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GridViewConfiguration'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('GridView'),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FHD'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ContentShareLayout'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PresenterOnlyConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ActiveSpeakerOnlyConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HorizontalLayoutConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VerticalLayoutConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VideoAttribute'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CanvasOrientation'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('PresenterOnly'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Horizontal'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Vertical'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ActiveSpeakerOnly'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('PresenterPosition'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('TopLeft'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TopRight'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BottomLeft'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BottomRight'),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ActiveSpeakerPosition'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('TopLeft'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TopRight'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BottomLeft'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BottomRight'),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TileOrder'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TilePosition'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TileCount'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TileAspectRatio'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('JoinSequence'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SpeakerSequence'),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Top'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Bottom'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TileOrder'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TilePosition'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TileCount'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TileAspectRatio'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('JoinSequence'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SpeakerSequence'),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CornerRadius'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BorderColor'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HighlightColor'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BorderThickness'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Black'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Red'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Green'),
                                                new \PHPStan\Type\Constant\ConstantStringType('White'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Yellow'),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Black'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Red'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Green'),
                                                new \PHPStan\Type\Constant\ConstantStringType('White'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Yellow'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Landscape'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Portrait'),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AwsKmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsKmsEncryptionContext'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Sources'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sinks'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ChimeSdkMeetingLiveConnectorConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('ChimeSdkMeeting'),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MuxType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CompositedVideo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SourceConfiguration'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AudioWithCompositedVideo'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AudioWithActiveSpeakerVideo'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Layout'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Resolution'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GridViewConfiguration'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantStringType('GridView'),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('HD'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FHD'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ContentShareLayout'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PresenterOnlyConfiguration'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ActiveSpeakerOnlyConfiguration'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HorizontalLayoutConfiguration'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VerticalLayoutConfiguration'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VideoAttribute'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CanvasOrientation'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('PresenterOnly'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Horizontal'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Vertical'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ActiveSpeakerOnly'),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('PresenterPosition'),
                                            ], [
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('TopLeft'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('TopRight'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('BottomLeft'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('BottomRight'),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ActiveSpeakerPosition'),
                                            ], [
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('TopLeft'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('TopRight'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('BottomLeft'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('BottomRight'),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('TileOrder'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TilePosition'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TileCount'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TileAspectRatio'),
                                            ], [
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('JoinSequence'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('SpeakerSequence'),
                                                ]),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Top'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Bottom'),
                                                ]),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('TileOrder'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TilePosition'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TileCount'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TileAspectRatio'),
                                            ], [
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('JoinSequence'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('SpeakerSequence'),
                                                ]),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                                ]),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('CornerRadius'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BorderColor'),
                                                new \PHPStan\Type\Constant\ConstantStringType('HighlightColor'),
                                                new \PHPStan\Type\Constant\ConstantStringType('BorderThickness'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Black'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Red'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Green'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('White'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Yellow'),
                                                ]),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Black'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Red'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Green'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('White'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Yellow'),
                                                ]),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Landscape'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Portrait'),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SelectedVideoStreams'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('AttendeeIds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ExternalUserIds'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SinkType'),
                                new \PHPStan\Type\Constant\ConstantStringType('RTMPConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('RTMP'),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Url'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AudioChannels'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AudioSampleRate'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Stereo'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Mono'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                            new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotStarted'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sources'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sinks'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('MediaCapturePipelineSourceConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('MediaCapturePipeline'),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ChimeSdkMeetingConfiguration'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ArtifactsConfiguration'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Audio'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Video'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Content'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DataChannel'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TranscriptionMessages'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MeetingEvents'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CompositedVideo'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                            ], [
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                            ], [
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                            ], [
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                            ], [
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                            ], [
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                            ], [
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                                ]),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3BucketSinkConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                            new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotStarted'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipelineConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('KinesisVideoStreamSourceRuntimeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsRuntimeMetadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('KinesisVideoStreamRecordingSourceRuntimeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3RecordingSinkRuntimeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElementStatuses'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                            new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotStarted'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Streams'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediaEncoding'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediaSampleRate'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StreamArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FragmentNumber'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StreamChannelDefinition'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfChannels'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ChannelDefinitions'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ChannelId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ParticipantRole'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                                                ]),
                                            ]),
                                        ])),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantStringType('pcm'),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Streams'),
                            new \PHPStan\Type\Constant\ConstantStringType('FragmentSelector'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StreamArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FragmentSelectorType'),
                                new \PHPStan\Type\Constant\ConstantStringType('TimestampRange'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ProducerTimestamp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ServerTimestamp'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StartTimestamp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EndTimestamp'),
                                ], [
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecordingFileFormat'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Wav'),
                                new \PHPStan\Type\Constant\ConstantStringType('Opus'),
                            ]),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AmazonTranscribeCallAnalyticsProcessor'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VoiceAnalyticsProcessor'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AmazonTranscribeProcessor'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KinesisDataStreamSink'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionSink'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SqsQueueSink'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SnsTopicSink'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3RecordingSink'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VoiceEnhancementSink'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NotStarted'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NotSupported'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sources'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sinks'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                            new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotStarted'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('ChimeSdkMeeting'),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SinkArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('SinkType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReservedStreamCapacity'),
                                new \PHPStan\Type\Constant\ConstantStringType('MediaStreamType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisVideoStreamPool'),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MixedAudio'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IndividualAudio'),
                                ]),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getMediaPipelineKinesisVideoStreamPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KinesisVideoStreamPoolConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PoolArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataRetentionInHours'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getSpeakerSearchTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SpeakerSearchTask'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SpeakerSearchTaskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SpeakerSearchTaskStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotStarted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getVoiceToneAnalysisTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceToneAnalysisTask'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceToneAnalysisTaskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceToneAnalysisTaskStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotStarted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function listMediaCapturePipelines(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MediaCapturePipelines'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMediaInsightsPipelineConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipelineConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipelineConfigurationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipelineConfigurationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipelineConfigurationArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMediaPipelineKinesisVideoStreamPools(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KinesisVideoStreamPools'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PoolName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PoolArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMediaPipelines(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MediaPipelines'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaPipelineArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
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
    private function startSpeakerSearchTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SpeakerSearchTask'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SpeakerSearchTaskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SpeakerSearchTaskStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotStarted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function startVoiceToneAnalysisTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VoiceToneAnalysisTask'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceToneAnalysisTaskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VoiceToneAnalysisTaskStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NotStarted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function stopSpeakerSearchTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function stopVoiceToneAnalysisTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
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
    private function updateMediaInsightsPipelineConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipelineConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipelineConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipelineConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RealTimeAlertConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Elements'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaInsightsPipelineConfigurationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeywordMatchConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('SentimentConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('IssueDetectionConfiguration'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KeywordMatch'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Sentiment'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IssueDetection'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RuleName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Keywords'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Negate'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RuleName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SentimentType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TimePeriod'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('NEGATIVE'),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RuleName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('AmazonTranscribeCallAnalyticsProcessorConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('AmazonTranscribeProcessorConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisDataStreamSinkConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3RecordingSinkConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceAnalyticsProcessorConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionSinkConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('SqsQueueSinkConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('SnsTopicSinkConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('VoiceEnhancementSinkConfiguration'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AmazonTranscribeCallAnalyticsProcessor'),
                                new \PHPStan\Type\Constant\ConstantStringType('VoiceAnalyticsProcessor'),
                                new \PHPStan\Type\Constant\ConstantStringType('AmazonTranscribeProcessor'),
                                new \PHPStan\Type\Constant\ConstantStringType('KinesisDataStreamSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('SqsQueueSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnsTopicSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3RecordingSink'),
                                new \PHPStan\Type\Constant\ConstantStringType('VoiceEnhancementSink'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyName'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyFilterName'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyFilterMethod'),
                                new \PHPStan\Type\Constant\ConstantStringType('LanguageModelName'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnablePartialResultsStabilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('PartialResultsStability'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentIdentificationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentRedactionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('PiiEntityTypes'),
                                new \PHPStan\Type\Constant\ConstantStringType('FilterPartialResults'),
                                new \PHPStan\Type\Constant\ConstantStringType('PostCallAnalyticsSettings'),
                                new \PHPStan\Type\Constant\ConstantStringType('CallAnalyticsStreamCategories'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                                    new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                                    new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('pt-BR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('remove'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mask'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tag'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('high'),
                                    new \PHPStan\Type\Constant\ConstantStringType('medium'),
                                    new \PHPStan\Type\Constant\ConstantStringType('low'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('PII'),
                                new \PHPStan\Type\Constant\ConstantStringType('PII'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OutputLocation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ContentRedactionOutput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OutputEncryptionKMSKeyId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('redacted'),
                                        new \PHPStan\Type\Constant\ConstantStringType('redacted_and_unredacted'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyName'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyFilterName'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyFilterMethod'),
                                new \PHPStan\Type\Constant\ConstantStringType('ShowSpeakerLabel'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnablePartialResultsStabilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('PartialResultsStability'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentIdentificationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentRedactionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('PiiEntityTypes'),
                                new \PHPStan\Type\Constant\ConstantStringType('LanguageModelName'),
                                new \PHPStan\Type\Constant\ConstantStringType('FilterPartialResults'),
                                new \PHPStan\Type\Constant\ConstantStringType('IdentifyLanguage'),
                                new \PHPStan\Type\Constant\ConstantStringType('IdentifyMultipleLanguages'),
                                new \PHPStan\Type\Constant\ConstantStringType('LanguageOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('PreferredLanguage'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyNames'),
                                new \PHPStan\Type\Constant\ConstantStringType('VocabularyFilterNames'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                                    new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                                    new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('pt-BR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('remove'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mask'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tag'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('high'),
                                    new \PHPStan\Type\Constant\ConstantStringType('medium'),
                                    new \PHPStan\Type\Constant\ConstantStringType('low'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('PII'),
                                new \PHPStan\Type\Constant\ConstantStringType('PII'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                                    new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                                    new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('pt-BR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InsightsTarget'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                                new \PHPStan\Type\Constant\ConstantStringType('RecordingFileFormat'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Wav'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Opus'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SpeakerSearchStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('VoiceToneAnalysisStatus'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InsightsTarget'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InsightsTarget'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InsightsTarget'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateMediaInsightsPipelineStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateMediaPipelineKinesisVideoStreamPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KinesisVideoStreamPoolConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PoolArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataRetentionInHours'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
}