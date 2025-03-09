<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class IVSRealTimeClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\IVSRealTime\IVSRealTimeClient>
     */
    public function getClass(): string
    {
        return \Aws\IVSRealTime\IVSRealTimeClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createEncoderConfiguration',
            'createIngestConfiguration',
            'createParticipantToken',
            'createStage',
            'createStorageConfiguration',
            'deleteEncoderConfiguration',
            'deleteIngestConfiguration',
            'deletePublicKey',
            'deleteStage',
            'deleteStorageConfiguration',
            'disconnectParticipant',
            'getComposition',
            'getEncoderConfiguration',
            'getIngestConfiguration',
            'getParticipant',
            'getPublicKey',
            'getStage',
            'getStageSession',
            'getStorageConfiguration',
            'importPublicKey',
            'listCompositions',
            'listEncoderConfigurations',
            'listIngestConfigurations',
            'listParticipantEvents',
            'listParticipants',
            'listPublicKeys',
            'listStageSessions',
            'listStages',
            'listStorageConfigurations',
            'listTagsForResource',
            'startComposition',
            'stopComposition',
            'tagResource',
            'untagResource',
            'updateIngestConfiguration',
            'updateStage',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createEncoderConfiguration' => $this->createEncoderConfiguration(),
            'createIngestConfiguration' => $this->createIngestConfiguration(),
            'createParticipantToken' => $this->createParticipantToken(),
            'createStage' => $this->createStage(),
            'createStorageConfiguration' => $this->createStorageConfiguration(),
            'deleteEncoderConfiguration' => $this->deleteEncoderConfiguration(),
            'deleteIngestConfiguration' => $this->deleteIngestConfiguration(),
            'deletePublicKey' => $this->deletePublicKey(),
            'deleteStage' => $this->deleteStage(),
            'deleteStorageConfiguration' => $this->deleteStorageConfiguration(),
            'disconnectParticipant' => $this->disconnectParticipant(),
            'getComposition' => $this->getComposition(),
            'getEncoderConfiguration' => $this->getEncoderConfiguration(),
            'getIngestConfiguration' => $this->getIngestConfiguration(),
            'getParticipant' => $this->getParticipant(),
            'getPublicKey' => $this->getPublicKey(),
            'getStage' => $this->getStage(),
            'getStageSession' => $this->getStageSession(),
            'getStorageConfiguration' => $this->getStorageConfiguration(),
            'importPublicKey' => $this->importPublicKey(),
            'listCompositions' => $this->listCompositions(),
            'listEncoderConfigurations' => $this->listEncoderConfigurations(),
            'listIngestConfigurations' => $this->listIngestConfigurations(),
            'listParticipantEvents' => $this->listParticipantEvents(),
            'listParticipants' => $this->listParticipants(),
            'listPublicKeys' => $this->listPublicKeys(),
            'listStageSessions' => $this->listStageSessions(),
            'listStages' => $this->listStages(),
            'listStorageConfigurations' => $this->listStorageConfigurations(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startComposition' => $this->startComposition(),
            'stopComposition' => $this->stopComposition(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateIngestConfiguration' => $this->updateIngestConfiguration(),
            'updateStage' => $this->updateStage(),
        };
    }
    private function createEncoderConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('encoderConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('video'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('width'),
                        new \PHPStan\Type\Constant\ConstantStringType('height'),
                        new \PHPStan\Type\Constant\ConstantStringType('framerate'),
                        new \PHPStan\Type\Constant\ConstantStringType('bitrate'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function createIngestConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ingestConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ingestProtocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('streamKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('stageArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('participantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('userId'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RTMP'),
                        new \PHPStan\Type\Constant\ConstantStringType('RTMPS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function createParticipantToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('participantToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('participantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('token'),
                    new \PHPStan\Type\Constant\ConstantStringType('userId'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('capabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('expirationTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISH'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBSCRIBE'),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createStage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('stage'),
                new \PHPStan\Type\Constant\ConstantStringType('participantTokens'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeSessionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoParticipantRecordingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('storageConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('mediaTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('thumbnailConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('recordingReconnectWindowSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUDIO_VIDEO'),
                                new \PHPStan\Type\Constant\ConstantStringType('AUDIO_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetIntervalSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('storage'),
                            new \PHPStan\Type\Constant\ConstantStringType('recordingMode'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SEQUENTIAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                                ]),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INTERVAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('events'),
                        new \PHPStan\Type\Constant\ConstantStringType('whip'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtmp'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtmps'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('participantId'),
                        new \PHPStan\Type\Constant\ConstantStringType('token'),
                        new \PHPStan\Type\Constant\ConstantStringType('userId'),
                        new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('duration'),
                        new \PHPStan\Type\Constant\ConstantStringType('capabilities'),
                        new \PHPStan\Type\Constant\ConstantStringType('expirationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PUBLISH'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBSCRIBE'),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createStorageConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('storageConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function deleteEncoderConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteIngestConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePublicKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteStage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteStorageConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disconnectParticipant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getComposition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('composition'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('stageArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('layout'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinations'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('grid'),
                        new \PHPStan\Type\Constant\ConstantStringType('pip'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('featuredParticipantAttribute'),
                            new \PHPStan\Type\Constant\ConstantStringType('omitStoppedVideo'),
                            new \PHPStan\Type\Constant\ConstantStringType('videoAspectRatio'),
                            new \PHPStan\Type\Constant\ConstantStringType('videoFillMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('gridGap'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                                new \PHPStan\Type\Constant\ConstantStringType('VIDEO'),
                                new \PHPStan\Type\Constant\ConstantStringType('SQUARE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PORTRAIT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FILL'),
                                new \PHPStan\Type\Constant\ConstantStringType('COVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAIN'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('featuredParticipantAttribute'),
                            new \PHPStan\Type\Constant\ConstantStringType('omitStoppedVideo'),
                            new \PHPStan\Type\Constant\ConstantStringType('videoFillMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('gridGap'),
                            new \PHPStan\Type\Constant\ConstantStringType('pipParticipantAttribute'),
                            new \PHPStan\Type\Constant\ConstantStringType('pipBehavior'),
                            new \PHPStan\Type\Constant\ConstantStringType('pipOffset'),
                            new \PHPStan\Type\Constant\ConstantStringType('pipPosition'),
                            new \PHPStan\Type\Constant\ConstantStringType('pipWidth'),
                            new \PHPStan\Type\Constant\ConstantStringType('pipHeight'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FILL'),
                                new \PHPStan\Type\Constant\ConstantStringType('COVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAIN'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STATIC'),
                                new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TOP_LEFT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TOP_RIGHT'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOTTOM_LEFT'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOTTOM_RIGHT'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
                            new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                            new \PHPStan\Type\Constant\ConstantStringType('detail'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RECONNECTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('channel'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('channelArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('encoderConfigurationArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('storageConfigurationArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('encoderConfigurationArns'),
                                    new \PHPStan\Type\Constant\ConstantStringType('recordingConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('thumbnailConfigurations'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('format'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantStringType('HLS'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('targetIntervalSeconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('storage'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('SEQUENTIAL'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                                                ]),
                                            ])),
                                        ]),
                                    ])),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('recordingPrefix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getEncoderConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('encoderConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('video'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('width'),
                        new \PHPStan\Type\Constant\ConstantStringType('height'),
                        new \PHPStan\Type\Constant\ConstantStringType('framerate'),
                        new \PHPStan\Type\Constant\ConstantStringType('bitrate'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getIngestConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ingestConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ingestProtocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('streamKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('stageArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('participantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('userId'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RTMP'),
                        new \PHPStan\Type\Constant\ConstantStringType('RTMPS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getParticipant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('participant'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('participantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('userId'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstJoinTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('published'),
                    new \PHPStan\Type\Constant\ConstantStringType('ispName'),
                    new \PHPStan\Type\Constant\ConstantStringType('osName'),
                    new \PHPStan\Type\Constant\ConstantStringType('osVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('browserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('browserVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('sdkVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('recordingS3BucketName'),
                    new \PHPStan\Type\Constant\ConstantStringType('recordingS3Prefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('recordingState'),
                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('WHIP'),
                        new \PHPStan\Type\Constant\ConstantStringType('RTMP'),
                        new \PHPStan\Type\Constant\ConstantStringType('RTMPS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getPublicKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('publicKey'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('publicKeyMaterial'),
                    new \PHPStan\Type\Constant\ConstantStringType('fingerprint'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getStage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('stage'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeSessionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoParticipantRecordingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('storageConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('mediaTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('thumbnailConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('recordingReconnectWindowSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUDIO_VIDEO'),
                                new \PHPStan\Type\Constant\ConstantStringType('AUDIO_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetIntervalSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('storage'),
                            new \PHPStan\Type\Constant\ConstantStringType('recordingMode'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SEQUENTIAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                                ]),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INTERVAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('events'),
                        new \PHPStan\Type\Constant\ConstantStringType('whip'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtmp'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtmps'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getStageSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('stageSession'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getStorageConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('storageConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function importPublicKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('publicKey'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('publicKeyMaterial'),
                    new \PHPStan\Type\Constant\ConstantStringType('fingerprint'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function listCompositions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('compositions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('stageArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('destinations'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('state'),
                                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RECONNECTING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEncoderConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('encoderConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIngestConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ingestConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ingestProtocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('stageArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('participantId'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('userId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RTMP'),
                            new \PHPStan\Type\Constant\ConstantStringType('RTMPS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listParticipantEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('events'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('participantId'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteParticipantId'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('JOINED'),
                            new \PHPStan\Type\Constant\ConstantStringType('LEFT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBSCRIBE_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBSCRIBE_STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISH_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBSCRIBE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('JOIN_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_CAPABILITIES'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISHER_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITRATE_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOLUTION_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STREAM_DURATION_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_AUDIO_CODEC'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_VIDEO_CODEC'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_PROTOCOL'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_STREAM_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('REUSE_OF_STREAM_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('B_FRAME_PRESENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_INPUT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_EXCEPTION'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listParticipants(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('participants'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('participantId'),
                        new \PHPStan\Type\Constant\ConstantStringType('userId'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('firstJoinTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('published'),
                        new \PHPStan\Type\Constant\ConstantStringType('recordingState'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPublicKeys(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('publicKeys'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStageSessions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('stageSessions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('stages'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('activeSessionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStorageConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('storageConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
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
    private function startComposition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('composition'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('stageArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('layout'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinations'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('grid'),
                        new \PHPStan\Type\Constant\ConstantStringType('pip'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('featuredParticipantAttribute'),
                            new \PHPStan\Type\Constant\ConstantStringType('omitStoppedVideo'),
                            new \PHPStan\Type\Constant\ConstantStringType('videoAspectRatio'),
                            new \PHPStan\Type\Constant\ConstantStringType('videoFillMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('gridGap'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                                new \PHPStan\Type\Constant\ConstantStringType('VIDEO'),
                                new \PHPStan\Type\Constant\ConstantStringType('SQUARE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PORTRAIT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FILL'),
                                new \PHPStan\Type\Constant\ConstantStringType('COVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAIN'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('featuredParticipantAttribute'),
                            new \PHPStan\Type\Constant\ConstantStringType('omitStoppedVideo'),
                            new \PHPStan\Type\Constant\ConstantStringType('videoFillMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('gridGap'),
                            new \PHPStan\Type\Constant\ConstantStringType('pipParticipantAttribute'),
                            new \PHPStan\Type\Constant\ConstantStringType('pipBehavior'),
                            new \PHPStan\Type\Constant\ConstantStringType('pipOffset'),
                            new \PHPStan\Type\Constant\ConstantStringType('pipPosition'),
                            new \PHPStan\Type\Constant\ConstantStringType('pipWidth'),
                            new \PHPStan\Type\Constant\ConstantStringType('pipHeight'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FILL'),
                                new \PHPStan\Type\Constant\ConstantStringType('COVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAIN'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STATIC'),
                                new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TOP_LEFT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TOP_RIGHT'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOTTOM_LEFT'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOTTOM_RIGHT'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
                            new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                            new \PHPStan\Type\Constant\ConstantStringType('detail'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RECONNECTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('channel'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('channelArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('encoderConfigurationArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('storageConfigurationArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('encoderConfigurationArns'),
                                    new \PHPStan\Type\Constant\ConstantStringType('recordingConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('thumbnailConfigurations'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('format'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantStringType('HLS'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('targetIntervalSeconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('storage'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('SEQUENTIAL'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                                                ]),
                                            ])),
                                        ]),
                                    ])),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('recordingPrefix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function stopComposition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
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
    private function updateIngestConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ingestConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ingestProtocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('streamKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('stageArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('participantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('userId'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RTMP'),
                        new \PHPStan\Type\Constant\ConstantStringType('RTMPS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function updateStage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('stage'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeSessionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoParticipantRecordingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('storageConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('mediaTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('thumbnailConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('recordingReconnectWindowSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUDIO_VIDEO'),
                                new \PHPStan\Type\Constant\ConstantStringType('AUDIO_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetIntervalSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('storage'),
                            new \PHPStan\Type\Constant\ConstantStringType('recordingMode'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SEQUENTIAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                                ]),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INTERVAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('events'),
                        new \PHPStan\Type\Constant\ConstantStringType('whip'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtmp'),
                        new \PHPStan\Type\Constant\ConstantStringType('rtmps'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
}