<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MediaTailorClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MediaTailor\MediaTailorClient>
     */
    public function getClass(): string
    {
        return \Aws\MediaTailor\MediaTailorClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'configureLogsForChannel',
            'configureLogsForPlaybackConfiguration',
            'createChannel',
            'createLiveSource',
            'createPrefetchSchedule',
            'createProgram',
            'createSourceLocation',
            'createVodSource',
            'deleteChannel',
            'deleteChannelPolicy',
            'deleteLiveSource',
            'deletePlaybackConfiguration',
            'deletePrefetchSchedule',
            'deleteProgram',
            'deleteSourceLocation',
            'deleteVodSource',
            'describeChannel',
            'describeLiveSource',
            'describeProgram',
            'describeSourceLocation',
            'describeVodSource',
            'getChannelPolicy',
            'getChannelSchedule',
            'getPlaybackConfiguration',
            'getPrefetchSchedule',
            'listAlerts',
            'listChannels',
            'listLiveSources',
            'listPlaybackConfigurations',
            'listPrefetchSchedules',
            'listSourceLocations',
            'listTagsForResource',
            'listVodSources',
            'putChannelPolicy',
            'putPlaybackConfiguration',
            'startChannel',
            'stopChannel',
            'tagResource',
            'untagResource',
            'updateChannel',
            'updateLiveSource',
            'updateProgram',
            'updateSourceLocation',
            'updateVodSource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'configureLogsForChannel' => $this->configureLogsForChannel(),
            'configureLogsForPlaybackConfiguration' => $this->configureLogsForPlaybackConfiguration(),
            'createChannel' => $this->createChannel(),
            'createLiveSource' => $this->createLiveSource(),
            'createPrefetchSchedule' => $this->createPrefetchSchedule(),
            'createProgram' => $this->createProgram(),
            'createSourceLocation' => $this->createSourceLocation(),
            'createVodSource' => $this->createVodSource(),
            'deleteChannel' => $this->deleteChannel(),
            'deleteChannelPolicy' => $this->deleteChannelPolicy(),
            'deleteLiveSource' => $this->deleteLiveSource(),
            'deletePlaybackConfiguration' => $this->deletePlaybackConfiguration(),
            'deletePrefetchSchedule' => $this->deletePrefetchSchedule(),
            'deleteProgram' => $this->deleteProgram(),
            'deleteSourceLocation' => $this->deleteSourceLocation(),
            'deleteVodSource' => $this->deleteVodSource(),
            'describeChannel' => $this->describeChannel(),
            'describeLiveSource' => $this->describeLiveSource(),
            'describeProgram' => $this->describeProgram(),
            'describeSourceLocation' => $this->describeSourceLocation(),
            'describeVodSource' => $this->describeVodSource(),
            'getChannelPolicy' => $this->getChannelPolicy(),
            'getChannelSchedule' => $this->getChannelSchedule(),
            'getPlaybackConfiguration' => $this->getPlaybackConfiguration(),
            'getPrefetchSchedule' => $this->getPrefetchSchedule(),
            'listAlerts' => $this->listAlerts(),
            'listChannels' => $this->listChannels(),
            'listLiveSources' => $this->listLiveSources(),
            'listPlaybackConfigurations' => $this->listPlaybackConfigurations(),
            'listPrefetchSchedules' => $this->listPrefetchSchedules(),
            'listSourceLocations' => $this->listSourceLocations(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listVodSources' => $this->listVodSources(),
            'putChannelPolicy' => $this->putChannelPolicy(),
            'putPlaybackConfiguration' => $this->putPlaybackConfiguration(),
            'startChannel' => $this->startChannel(),
            'stopChannel' => $this->stopChannel(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateChannel' => $this->updateChannel(),
            'updateLiveSource' => $this->updateLiveSource(),
            'updateProgram' => $this->updateProgram(),
            'updateSourceLocation' => $this->updateSourceLocation(),
            'updateVodSource' => $this->updateVodSource(),
        };
    }
    private function configureLogsForChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                new \PHPStan\Type\Constant\ConstantStringType('LogTypes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('AS_RUN')),
            ]),
        ]);
    }
    private function configureLogsForPlaybackConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PercentEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('PlaybackConfigurationName'),
                new \PHPStan\Type\Constant\ConstantStringType('EnabledLoggingStrategies'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('VENDED_LOGS'),
                    new \PHPStan\Type\Constant\ConstantStringType('LEGACY_CLOUDWATCH'),
                ])),
            ]),
        ]);
    }
    private function createChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelState'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('FillerSlate'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                new \PHPStan\Type\Constant\ConstantStringType('PlaybackMode'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeShiftConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('Audiences'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DashPlaylistSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('HlsPlaylistSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaybackUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceGroup'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinBufferTimeSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinUpdatePeriodSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SuggestedPresentationDelaySeconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdMarkupType'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DATERANGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCTE35_ENHANCED'),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MaxTimeDelaySeconds'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createLiveSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('HttpPackageConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LiveSourceName'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DASH'),
                        new \PHPStan\Type\Constant\ConstantStringType('HLS'),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createPrefetchSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Consumption'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('PlaybackConfigurationName'),
                new \PHPStan\Type\Constant\ConstantStringType('Retrieval'),
                new \PHPStan\Type\Constant\ConstantStringType('StreamId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AvailMatchingCriteria'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DynamicVariable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DynamicVariables'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createProgram(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdBreaks'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LiveSourceName'),
                new \PHPStan\Type\Constant\ConstantStringType('ProgramName'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduledStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
                new \PHPStan\Type\Constant\ConstantStringType('ClipRange'),
                new \PHPStan\Type\Constant\ConstantStringType('DurationMillis'),
                new \PHPStan\Type\Constant\ConstantStringType('AudienceMedia'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MessageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('OffsetMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('Slate'),
                    new \PHPStan\Type\Constant\ConstantStringType('SpliceInsertMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeSignalMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdBreakMetadata'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SPLICE_INSERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIME_SIGNAL'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailNum'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailsExpected'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpliceEventId'),
                        new \PHPStan\Type\Constant\ConstantStringType('UniqueProgramId'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentationDescriptors'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentationEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentationUpidType'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentationUpid'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentationTypeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentNum'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentsExpected'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubSegmentNum'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubSegmentsExpected'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndOffsetMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartOffsetMillis'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Audience'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlternateMedia'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('LiveSourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClipRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduledStartTimeMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdBreaks'),
                        new \PHPStan\Type\Constant\ConstantStringType('DurationMillis'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EndOffsetMillis'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartOffsetMillis'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MessageType'),
                            new \PHPStan\Type\Constant\ConstantStringType('OffsetMillis'),
                            new \PHPStan\Type\Constant\ConstantStringType('Slate'),
                            new \PHPStan\Type\Constant\ConstantStringType('SpliceInsertMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimeSignalMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdBreakMetadata'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SPLICE_INSERT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_SIGNAL'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                                new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AvailNum'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailsExpected'),
                                new \PHPStan\Type\Constant\ConstantStringType('SpliceEventId'),
                                new \PHPStan\Type\Constant\ConstantStringType('UniqueProgramId'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SegmentationDescriptors'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SegmentationEventId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SegmentationUpidType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SegmentationUpid'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SegmentationTypeId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SegmentNum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SegmentsExpected'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SubSegmentNum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SubSegmentsExpected'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function createSourceLocation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultSegmentDeliveryConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('HttpConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('SegmentDeliveryConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerAccessTokenConfiguration'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3_SIGV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER_ACCESS_TOKEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTODETECT_SIGV4'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HeaderName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretStringKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BaseUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BaseUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BaseUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createVodSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('HttpPackageConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DASH'),
                        new \PHPStan\Type\Constant\ConstantStringType('HLS'),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteChannel(): ?\PHPStan\Type\Type
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
    private function deleteLiveSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePlaybackConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePrefetchSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteProgram(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSourceLocation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteVodSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelState'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('FillerSlate'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                new \PHPStan\Type\Constant\ConstantStringType('PlaybackMode'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                new \PHPStan\Type\Constant\ConstantStringType('LogConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeShiftConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('Audiences'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DashPlaylistSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('HlsPlaylistSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaybackUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceGroup'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinBufferTimeSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinUpdatePeriodSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SuggestedPresentationDelaySeconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdMarkupType'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DATERANGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCTE35_ENHANCED'),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogTypes'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('AS_RUN')),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MaxTimeDelaySeconds'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeLiveSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('HttpPackageConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LiveSourceName'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DASH'),
                        new \PHPStan\Type\Constant\ConstantStringType('HLS'),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeProgram(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdBreaks'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LiveSourceName'),
                new \PHPStan\Type\Constant\ConstantStringType('ProgramName'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduledStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
                new \PHPStan\Type\Constant\ConstantStringType('ClipRange'),
                new \PHPStan\Type\Constant\ConstantStringType('DurationMillis'),
                new \PHPStan\Type\Constant\ConstantStringType('AudienceMedia'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MessageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('OffsetMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('Slate'),
                    new \PHPStan\Type\Constant\ConstantStringType('SpliceInsertMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeSignalMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdBreakMetadata'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SPLICE_INSERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIME_SIGNAL'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailNum'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailsExpected'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpliceEventId'),
                        new \PHPStan\Type\Constant\ConstantStringType('UniqueProgramId'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentationDescriptors'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentationEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentationUpidType'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentationUpid'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentationTypeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentNum'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentsExpected'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubSegmentNum'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubSegmentsExpected'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndOffsetMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartOffsetMillis'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Audience'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlternateMedia'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('LiveSourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClipRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduledStartTimeMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdBreaks'),
                        new \PHPStan\Type\Constant\ConstantStringType('DurationMillis'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EndOffsetMillis'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartOffsetMillis'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MessageType'),
                            new \PHPStan\Type\Constant\ConstantStringType('OffsetMillis'),
                            new \PHPStan\Type\Constant\ConstantStringType('Slate'),
                            new \PHPStan\Type\Constant\ConstantStringType('SpliceInsertMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimeSignalMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdBreakMetadata'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SPLICE_INSERT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_SIGNAL'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                                new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AvailNum'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailsExpected'),
                                new \PHPStan\Type\Constant\ConstantStringType('SpliceEventId'),
                                new \PHPStan\Type\Constant\ConstantStringType('UniqueProgramId'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SegmentationDescriptors'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SegmentationEventId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SegmentationUpidType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SegmentationUpid'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SegmentationTypeId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SegmentNum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SegmentsExpected'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SubSegmentNum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SubSegmentsExpected'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function describeSourceLocation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultSegmentDeliveryConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('HttpConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('SegmentDeliveryConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerAccessTokenConfiguration'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3_SIGV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER_ACCESS_TOKEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTODETECT_SIGV4'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HeaderName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretStringKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BaseUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BaseUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BaseUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeVodSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdBreakOpportunities'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('HttpPackageConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OffsetMillis'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DASH'),
                        new \PHPStan\Type\Constant\ConstantStringType('HLS'),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getChannelPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getChannelSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApproximateDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApproximateStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LiveSourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProgramName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleAdBreaks'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleEntryType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Audiences'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApproximateDurationSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApproximateStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROGRAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('FILLER_SLATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALTERNATE_MEDIA'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPlaybackConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdDecisionServerUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('AvailSuppression'),
                new \PHPStan\Type\Constant\ConstantStringType('Bumper'),
                new \PHPStan\Type\Constant\ConstantStringType('CdnConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationAliases'),
                new \PHPStan\Type\Constant\ConstantStringType('DashConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('HlsConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('InsertionMode'),
                new \PHPStan\Type\Constant\ConstantStringType('LivePreRollConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('LogConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('ManifestProcessingRules'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('PersonalizationThresholdSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('PlaybackConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PlaybackEndpointPrefix'),
                new \PHPStan\Type\Constant\ConstantStringType('SessionInitializationEndpointPrefix'),
                new \PHPStan\Type\Constant\ConstantStringType('SlateAdUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('TranscodeProfileName'),
                new \PHPStan\Type\Constant\ConstantStringType('VideoContentSourceUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('AdConditioningConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('FillPolicy'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                        new \PHPStan\Type\Constant\ConstantStringType('BEHIND_LIVE_EDGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AFTER_LIVE_EDGE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL_AVAIL_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_AVAIL'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdSegmentUrlPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContentSegmentUrlPrefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestEndpointPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('MpdLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('OriginManifestType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SINGLE_PERIOD'),
                        new \PHPStan\Type\Constant\ConstantStringType('MULTI_PERIOD'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestEndpointPrefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STITCHED_ONLY'),
                    new \PHPStan\Type\Constant\ConstantStringType('PLAYER_SELECT'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdDecisionServerUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxDurationSeconds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PercentEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledLoggingStrategies'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VENDED_LOGS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LEGACY_CLOUDWATCH'),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdMarkerPassthrough'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StreamingMediaFileConditioning'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSCODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getPrefetchSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Consumption'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('PlaybackConfigurationName'),
                new \PHPStan\Type\Constant\ConstantStringType('Retrieval'),
                new \PHPStan\Type\Constant\ConstantStringType('StreamId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AvailMatchingCriteria'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DynamicVariable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DynamicVariables'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAlerts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AlertCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlertMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('RelatedResourceArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Category'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULING_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('PLAYBACK_WARNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelState'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('FillerSlate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaybackMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Audiences'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DashPlaylistSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('HlsPlaylistSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlaybackUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceGroup'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinBufferTimeSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinUpdatePeriodSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SuggestedPresentationDelaySeconds'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdMarkupType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DATERANGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCTE35_ENHANCED'),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogTypes'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('AS_RUN')),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLiveSources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('HttpPackageConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LiveSourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DASH'),
                            new \PHPStan\Type\Constant\ConstantStringType('HLS'),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPlaybackConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdDecisionServerUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailSuppression'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bumper'),
                    new \PHPStan\Type\Constant\ConstantStringType('CdnConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationAliases'),
                    new \PHPStan\Type\Constant\ConstantStringType('DashConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('HlsConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('InsertionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('LivePreRollConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestProcessingRules'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('PersonalizationThresholdSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaybackConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaybackEndpointPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('SessionInitializationEndpointPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('SlateAdUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('TranscodeProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VideoContentSourceUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdConditioningConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('FillPolicy'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                            new \PHPStan\Type\Constant\ConstantStringType('BEHIND_LIVE_EDGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('AFTER_LIVE_EDGE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FULL_AVAIL_ONLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_AVAIL'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AdSegmentUrlPrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentSegmentUrlPrefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestEndpointPrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('MpdLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginManifestType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SINGLE_PERIOD'),
                            new \PHPStan\Type\Constant\ConstantStringType('MULTI_PERIOD'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestEndpointPrefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STITCHED_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PLAYER_SELECT'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AdDecisionServerUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxDurationSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PercentEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnabledLoggingStrategies'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VENDED_LOGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LEGACY_CLOUDWATCH'),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AdMarkerPassthrough'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StreamingMediaFileConditioning'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSCODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPrefetchSchedules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Consumption'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaybackConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Retrieval'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailMatchingCriteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DynamicVariable'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operator'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DynamicVariables'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSourceLocations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultSegmentDeliveryConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('HttpConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDeliveryConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccessType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerAccessTokenConfiguration'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3_SIGV4'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER_ACCESS_TOKEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTODETECT_SIGV4'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HeaderName'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretStringKey'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BaseUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BaseUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BaseUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
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
    private function listVodSources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('HttpPackageConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DASH'),
                            new \PHPStan\Type\Constant\ConstantStringType('HLS'),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putChannelPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putPlaybackConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdDecisionServerUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('AvailSuppression'),
                new \PHPStan\Type\Constant\ConstantStringType('Bumper'),
                new \PHPStan\Type\Constant\ConstantStringType('CdnConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationAliases'),
                new \PHPStan\Type\Constant\ConstantStringType('DashConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('HlsConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('InsertionMode'),
                new \PHPStan\Type\Constant\ConstantStringType('LivePreRollConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('LogConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('ManifestProcessingRules'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('PersonalizationThresholdSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('PlaybackConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PlaybackEndpointPrefix'),
                new \PHPStan\Type\Constant\ConstantStringType('SessionInitializationEndpointPrefix'),
                new \PHPStan\Type\Constant\ConstantStringType('SlateAdUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('TranscodeProfileName'),
                new \PHPStan\Type\Constant\ConstantStringType('VideoContentSourceUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('AdConditioningConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('FillPolicy'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                        new \PHPStan\Type\Constant\ConstantStringType('BEHIND_LIVE_EDGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AFTER_LIVE_EDGE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL_AVAIL_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_AVAIL'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdSegmentUrlPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContentSegmentUrlPrefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestEndpointPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('MpdLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('OriginManifestType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SINGLE_PERIOD'),
                        new \PHPStan\Type\Constant\ConstantStringType('MULTI_PERIOD'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestEndpointPrefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STITCHED_ONLY'),
                    new \PHPStan\Type\Constant\ConstantStringType('PLAYER_SELECT'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdDecisionServerUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxDurationSeconds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PercentEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledLoggingStrategies'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VENDED_LOGS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LEGACY_CLOUDWATCH'),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdMarkerPassthrough'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StreamingMediaFileConditioning'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSCODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function startChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function stopChannel(): ?\PHPStan\Type\Type
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
                new \PHPStan\Type\Constant\ConstantStringType('ChannelState'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('FillerSlate'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                new \PHPStan\Type\Constant\ConstantStringType('PlaybackMode'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeShiftConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('Audiences'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DashPlaylistSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('HlsPlaylistSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaybackUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceGroup'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinBufferTimeSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinUpdatePeriodSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SuggestedPresentationDelaySeconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdMarkupType'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DATERANGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCTE35_ENHANCED'),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MaxTimeDelaySeconds'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateLiveSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('HttpPackageConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LiveSourceName'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DASH'),
                        new \PHPStan\Type\Constant\ConstantStringType('HLS'),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateProgram(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdBreaks'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelName'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ProgramName'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
                new \PHPStan\Type\Constant\ConstantStringType('LiveSourceName'),
                new \PHPStan\Type\Constant\ConstantStringType('ClipRange'),
                new \PHPStan\Type\Constant\ConstantStringType('DurationMillis'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduledStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('AudienceMedia'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MessageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('OffsetMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('Slate'),
                    new \PHPStan\Type\Constant\ConstantStringType('SpliceInsertMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeSignalMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdBreakMetadata'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SPLICE_INSERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIME_SIGNAL'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AvailNum'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailsExpected'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpliceEventId'),
                        new \PHPStan\Type\Constant\ConstantStringType('UniqueProgramId'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentationDescriptors'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentationEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentationUpidType'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentationUpid'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentationTypeId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentNum'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentsExpected'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubSegmentNum'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubSegmentsExpected'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndOffsetMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartOffsetMillis'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Audience'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlternateMedia'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('LiveSourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClipRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduledStartTimeMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdBreaks'),
                        new \PHPStan\Type\Constant\ConstantStringType('DurationMillis'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EndOffsetMillis'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartOffsetMillis'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MessageType'),
                            new \PHPStan\Type\Constant\ConstantStringType('OffsetMillis'),
                            new \PHPStan\Type\Constant\ConstantStringType('Slate'),
                            new \PHPStan\Type\Constant\ConstantStringType('SpliceInsertMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimeSignalMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdBreakMetadata'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SPLICE_INSERT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_SIGNAL'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                                new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AvailNum'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailsExpected'),
                                new \PHPStan\Type\Constant\ConstantStringType('SpliceEventId'),
                                new \PHPStan\Type\Constant\ConstantStringType('UniqueProgramId'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SegmentationDescriptors'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SegmentationEventId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SegmentationUpidType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SegmentationUpid'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SegmentationTypeId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SegmentNum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SegmentsExpected'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SubSegmentNum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SubSegmentsExpected'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function updateSourceLocation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultSegmentDeliveryConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('HttpConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('SegmentDeliveryConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerAccessTokenConfiguration'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3_SIGV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER_ACCESS_TOKEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTODETECT_SIGV4'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HeaderName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretStringKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BaseUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BaseUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BaseUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateVodSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('HttpPackageConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceLocationName'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('VodSourceName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DASH'),
                        new \PHPStan\Type\Constant\ConstantStringType('HLS'),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}