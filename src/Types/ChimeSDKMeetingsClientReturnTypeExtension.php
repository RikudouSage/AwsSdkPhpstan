<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ChimeSDKMeetingsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ChimeSDKMeetings\ChimeSDKMeetingsClient>
     */
    public function getClass(): string
    {
        return \Aws\ChimeSDKMeetings\ChimeSDKMeetingsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchCreateAttendee',
            'batchUpdateAttendeeCapabilitiesExcept',
            'createAttendee',
            'createMeeting',
            'createMeetingWithAttendees',
            'deleteAttendee',
            'deleteMeeting',
            'getAttendee',
            'getMeeting',
            'listAttendees',
            'listTagsForResource',
            'startMeetingTranscription',
            'stopMeetingTranscription',
            'tagResource',
            'untagResource',
            'updateAttendeeCapabilities',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchCreateAttendee' => $this->batchCreateAttendee(),
            'batchUpdateAttendeeCapabilitiesExcept' => $this->batchUpdateAttendeeCapabilitiesExcept(),
            'createAttendee' => $this->createAttendee(),
            'createMeeting' => $this->createMeeting(),
            'createMeetingWithAttendees' => $this->createMeetingWithAttendees(),
            'deleteAttendee' => $this->deleteAttendee(),
            'deleteMeeting' => $this->deleteMeeting(),
            'getAttendee' => $this->getAttendee(),
            'getMeeting' => $this->getMeeting(),
            'listAttendees' => $this->listAttendees(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startMeetingTranscription' => $this->startMeetingTranscription(),
            'stopMeetingTranscription' => $this->stopMeetingTranscription(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAttendeeCapabilities' => $this->updateAttendeeCapabilities(),
        };
    }
    private function batchCreateAttendee(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attendees'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExternalUserId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttendeeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('JoinToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Audio'),
                            new \PHPStan\Type\Constant\ConstantStringType('Video'),
                            new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SendReceive'),
                                new \PHPStan\Type\Constant\ConstantStringType('Send'),
                                new \PHPStan\Type\Constant\ConstantStringType('Receive'),
                                new \PHPStan\Type\Constant\ConstantStringType('None'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SendReceive'),
                                new \PHPStan\Type\Constant\ConstantStringType('Send'),
                                new \PHPStan\Type\Constant\ConstantStringType('Receive'),
                                new \PHPStan\Type\Constant\ConstantStringType('None'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SendReceive'),
                                new \PHPStan\Type\Constant\ConstantStringType('Send'),
                                new \PHPStan\Type\Constant\ConstantStringType('Receive'),
                                new \PHPStan\Type\Constant\ConstantStringType('None'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExternalUserId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchUpdateAttendeeCapabilitiesExcept(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createAttendee(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attendee'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExternalUserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttendeeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JoinToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Audio'),
                        new \PHPStan\Type\Constant\ConstantStringType('Video'),
                        new \PHPStan\Type\Constant\ConstantStringType('Content'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SendReceive'),
                            new \PHPStan\Type\Constant\ConstantStringType('Send'),
                            new \PHPStan\Type\Constant\ConstantStringType('Receive'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SendReceive'),
                            new \PHPStan\Type\Constant\ConstantStringType('Send'),
                            new \PHPStan\Type\Constant\ConstantStringType('Receive'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SendReceive'),
                            new \PHPStan\Type\Constant\ConstantStringType('Send'),
                            new \PHPStan\Type\Constant\ConstantStringType('Receive'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createMeeting(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Meeting'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MeetingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MeetingHostId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExternalMeetingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaPlacement'),
                    new \PHPStan\Type\Constant\ConstantStringType('MeetingFeatures'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrimaryMeetingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TenantIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('MeetingArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AudioHostUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('AudioFallbackUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignalingUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('TurnControlUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScreenDataUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScreenViewingUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScreenSharingUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventIngestionUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Audio'),
                        new \PHPStan\Type\Constant\ConstantStringType('Video'),
                        new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attendee'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EchoReduction'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNAVAILABLE'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxResolution'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('None'),
                                new \PHPStan\Type\Constant\ConstantStringType('HD'),
                                new \PHPStan\Type\Constant\ConstantStringType('FHD'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxResolution'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('None'),
                                new \PHPStan\Type\Constant\ConstantStringType('FHD'),
                                new \PHPStan\Type\Constant\ConstantStringType('UHD'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createMeetingWithAttendees(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Meeting'),
                new \PHPStan\Type\Constant\ConstantStringType('Attendees'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MeetingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MeetingHostId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExternalMeetingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaPlacement'),
                    new \PHPStan\Type\Constant\ConstantStringType('MeetingFeatures'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrimaryMeetingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TenantIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('MeetingArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AudioHostUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('AudioFallbackUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignalingUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('TurnControlUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScreenDataUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScreenViewingUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScreenSharingUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventIngestionUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Audio'),
                        new \PHPStan\Type\Constant\ConstantStringType('Video'),
                        new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attendee'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EchoReduction'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNAVAILABLE'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxResolution'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('None'),
                                new \PHPStan\Type\Constant\ConstantStringType('HD'),
                                new \PHPStan\Type\Constant\ConstantStringType('FHD'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxResolution'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('None'),
                                new \PHPStan\Type\Constant\ConstantStringType('FHD'),
                                new \PHPStan\Type\Constant\ConstantStringType('UHD'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExternalUserId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttendeeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('JoinToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Audio'),
                            new \PHPStan\Type\Constant\ConstantStringType('Video'),
                            new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SendReceive'),
                                new \PHPStan\Type\Constant\ConstantStringType('Send'),
                                new \PHPStan\Type\Constant\ConstantStringType('Receive'),
                                new \PHPStan\Type\Constant\ConstantStringType('None'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SendReceive'),
                                new \PHPStan\Type\Constant\ConstantStringType('Send'),
                                new \PHPStan\Type\Constant\ConstantStringType('Receive'),
                                new \PHPStan\Type\Constant\ConstantStringType('None'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SendReceive'),
                                new \PHPStan\Type\Constant\ConstantStringType('Send'),
                                new \PHPStan\Type\Constant\ConstantStringType('Receive'),
                                new \PHPStan\Type\Constant\ConstantStringType('None'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExternalUserId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function deleteAttendee(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteMeeting(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getAttendee(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attendee'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExternalUserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttendeeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JoinToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Audio'),
                        new \PHPStan\Type\Constant\ConstantStringType('Video'),
                        new \PHPStan\Type\Constant\ConstantStringType('Content'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SendReceive'),
                            new \PHPStan\Type\Constant\ConstantStringType('Send'),
                            new \PHPStan\Type\Constant\ConstantStringType('Receive'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SendReceive'),
                            new \PHPStan\Type\Constant\ConstantStringType('Send'),
                            new \PHPStan\Type\Constant\ConstantStringType('Receive'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SendReceive'),
                            new \PHPStan\Type\Constant\ConstantStringType('Send'),
                            new \PHPStan\Type\Constant\ConstantStringType('Receive'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getMeeting(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Meeting'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MeetingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MeetingHostId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExternalMeetingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaPlacement'),
                    new \PHPStan\Type\Constant\ConstantStringType('MeetingFeatures'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrimaryMeetingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TenantIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('MeetingArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AudioHostUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('AudioFallbackUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignalingUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('TurnControlUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScreenDataUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScreenViewingUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScreenSharingUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventIngestionUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Audio'),
                        new \PHPStan\Type\Constant\ConstantStringType('Video'),
                        new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attendee'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EchoReduction'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNAVAILABLE'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxResolution'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('None'),
                                new \PHPStan\Type\Constant\ConstantStringType('HD'),
                                new \PHPStan\Type\Constant\ConstantStringType('FHD'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxResolution'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('None'),
                                new \PHPStan\Type\Constant\ConstantStringType('FHD'),
                                new \PHPStan\Type\Constant\ConstantStringType('UHD'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listAttendees(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attendees'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExternalUserId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttendeeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('JoinToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Audio'),
                            new \PHPStan\Type\Constant\ConstantStringType('Video'),
                            new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SendReceive'),
                                new \PHPStan\Type\Constant\ConstantStringType('Send'),
                                new \PHPStan\Type\Constant\ConstantStringType('Receive'),
                                new \PHPStan\Type\Constant\ConstantStringType('None'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SendReceive'),
                                new \PHPStan\Type\Constant\ConstantStringType('Send'),
                                new \PHPStan\Type\Constant\ConstantStringType('Receive'),
                                new \PHPStan\Type\Constant\ConstantStringType('None'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SendReceive'),
                                new \PHPStan\Type\Constant\ConstantStringType('Send'),
                                new \PHPStan\Type\Constant\ConstantStringType('Receive'),
                                new \PHPStan\Type\Constant\ConstantStringType('None'),
                            ]),
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
    private function startMeetingTranscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function stopMeetingTranscription(): ?\PHPStan\Type\Type
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
    private function updateAttendeeCapabilities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attendee'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExternalUserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttendeeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JoinToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Audio'),
                        new \PHPStan\Type\Constant\ConstantStringType('Video'),
                        new \PHPStan\Type\Constant\ConstantStringType('Content'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SendReceive'),
                            new \PHPStan\Type\Constant\ConstantStringType('Send'),
                            new \PHPStan\Type\Constant\ConstantStringType('Receive'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SendReceive'),
                            new \PHPStan\Type\Constant\ConstantStringType('Send'),
                            new \PHPStan\Type\Constant\ConstantStringType('Receive'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SendReceive'),
                            new \PHPStan\Type\Constant\ConstantStringType('Send'),
                            new \PHPStan\Type\Constant\ConstantStringType('Receive'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
}