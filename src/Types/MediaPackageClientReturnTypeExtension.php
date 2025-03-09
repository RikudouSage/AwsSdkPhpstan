<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MediaPackageClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MediaPackage\MediaPackageClient>
     */
    public function getClass(): string
    {
        return \Aws\MediaPackage\MediaPackageClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'configureLogs',
            'createChannel',
            'createHarvestJob',
            'createOriginEndpoint',
            'deleteChannel',
            'deleteOriginEndpoint',
            'describeChannel',
            'describeHarvestJob',
            'describeOriginEndpoint',
            'listChannels',
            'listHarvestJobs',
            'listOriginEndpoints',
            'listTagsForResource',
            'rotateChannelCredentials',
            'rotateIngestEndpointCredentials',
            'tagResource',
            'untagResource',
            'updateChannel',
            'updateOriginEndpoint',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'configureLogs' => $this->configureLogs(),
            'createChannel' => $this->createChannel(),
            'createHarvestJob' => $this->createHarvestJob(),
            'createOriginEndpoint' => $this->createOriginEndpoint(),
            'deleteChannel' => $this->deleteChannel(),
            'deleteOriginEndpoint' => $this->deleteOriginEndpoint(),
            'describeChannel' => $this->describeChannel(),
            'describeHarvestJob' => $this->describeHarvestJob(),
            'describeOriginEndpoint' => $this->describeOriginEndpoint(),
            'listChannels' => $this->listChannels(),
            'listHarvestJobs' => $this->listHarvestJobs(),
            'listOriginEndpoints' => $this->listOriginEndpoints(),
            'listTagsForResource' => $this->listTagsForResource(),
            'rotateChannelCredentials' => $this->rotateChannelCredentials(),
            'rotateIngestEndpointCredentials' => $this->rotateIngestEndpointCredentials(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateChannel' => $this->updateChannel(),
            'updateOriginEndpoint' => $this->updateOriginEndpoint(),
        };
    }
    private function configureLogs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EgressAccessLogs'),
                new \PHPStan\Type\Constant\ConstantStringType('HlsIngest'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('IngressAccessLogs'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IngestEndpoints'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Password'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        new \PHPStan\Type\Constant\ConstantStringType('Username'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EgressAccessLogs'),
                new \PHPStan\Type\Constant\ConstantStringType('HlsIngest'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('IngressAccessLogs'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IngestEndpoints'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Password'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        new \PHPStan\Type\Constant\ConstantStringType('Username'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createHarvestJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginEndpointId'),
                new \PHPStan\Type\Constant\ConstantStringType('S3Destination'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function createOriginEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Authorization'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelId'),
                new \PHPStan\Type\Constant\ConstantStringType('CmafPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DashPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('HlsPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                new \PHPStan\Type\Constant\ConstantStringType('MssPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('Origination'),
                new \PHPStan\Type\Constant\ConstantStringType('StartoverWindowSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeDelaySeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                new \PHPStan\Type\Constant\ConstantStringType('Whitelist'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CdnIdentifierSecret'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretsRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('HlsManifests'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionMethod'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyRotationIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SAMPLE_AES'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_CTR'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Audio'),
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Video'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-5'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-6'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AdMarkers'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlaylistType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlaylistWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCTE35_ENHANCED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSTHROUGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATERANGE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('VOD'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamOrder'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_ASCENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_DESCENDING'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdTriggers'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdsOnDeliveryRestrictions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestLayout'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinBufferTimeSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinUpdatePeriodSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('PeriodTriggers'),
                    new \PHPStan\Type\Constant\ConstantStringType('Profile'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentTemplateFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                    new \PHPStan\Type\Constant\ConstantStringType('SuggestedPresentationDelaySeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('UtcTiming'),
                    new \PHPStan\Type\Constant\ConstantStringType('UtcTimingUri'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SPLICE_INSERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('BREAK'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_ADVERTISEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_ADVERTISEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_PLACEMENT_OPPORTUNITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_PLACEMENT_OPPORTUNITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTRICTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNRESTRICTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTH'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyRotationIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Audio'),
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Video'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-5'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-6'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPACT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DRM_TOP_LEVEL_COMPACT'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('ADS')),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HBBTV_1_5'),
                        new \PHPStan\Type\Constant\ConstantStringType('HYBRIDCAST'),
                        new \PHPStan\Type\Constant\ConstantStringType('DVB_DASH_2014'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NUMBER_WITH_TIMELINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIME_WITH_TIMELINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NUMBER_WITH_DURATION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamOrder'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_ASCENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_DESCENDING'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP-HEAD'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP-ISO'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP-XSDATE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdMarkers'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdTriggers'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdsOnDeliveryRestrictions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeDvbSubtitles'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaylistType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaylistWindowSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                    new \PHPStan\Type\Constant\ConstantStringType('UseAudioRenditionGroup'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCTE35_ENHANCED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSTHROUGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATERANGE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SPLICE_INSERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('BREAK'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_ADVERTISEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_ADVERTISEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_PLACEMENT_OPPORTUNITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_PLACEMENT_OPPORTUNITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTRICTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNRESTRICTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTH'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionMethod'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyRotationIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('RepeatExtXKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAMPLE_AES'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Audio'),
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Video'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-5'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-6'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOD'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamOrder'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_ASCENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_DESCENDING'),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Audio'),
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Video'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-5'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-6'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamOrder'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_ASCENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_DESCENDING'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function deleteChannel(): ?\PHPStan\Type\Type
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
    private function describeChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EgressAccessLogs'),
                new \PHPStan\Type\Constant\ConstantStringType('HlsIngest'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('IngressAccessLogs'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IngestEndpoints'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Password'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        new \PHPStan\Type\Constant\ConstantStringType('Username'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeHarvestJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginEndpointId'),
                new \PHPStan\Type\Constant\ConstantStringType('S3Destination'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function describeOriginEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Authorization'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelId'),
                new \PHPStan\Type\Constant\ConstantStringType('CmafPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DashPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('HlsPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                new \PHPStan\Type\Constant\ConstantStringType('MssPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('Origination'),
                new \PHPStan\Type\Constant\ConstantStringType('StartoverWindowSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeDelaySeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                new \PHPStan\Type\Constant\ConstantStringType('Whitelist'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CdnIdentifierSecret'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretsRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('HlsManifests'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionMethod'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyRotationIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SAMPLE_AES'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_CTR'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Audio'),
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Video'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-5'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-6'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AdMarkers'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlaylistType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlaylistWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCTE35_ENHANCED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSTHROUGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATERANGE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('VOD'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamOrder'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_ASCENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_DESCENDING'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdTriggers'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdsOnDeliveryRestrictions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestLayout'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinBufferTimeSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinUpdatePeriodSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('PeriodTriggers'),
                    new \PHPStan\Type\Constant\ConstantStringType('Profile'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentTemplateFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                    new \PHPStan\Type\Constant\ConstantStringType('SuggestedPresentationDelaySeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('UtcTiming'),
                    new \PHPStan\Type\Constant\ConstantStringType('UtcTimingUri'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SPLICE_INSERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('BREAK'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_ADVERTISEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_ADVERTISEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_PLACEMENT_OPPORTUNITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_PLACEMENT_OPPORTUNITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTRICTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNRESTRICTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTH'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyRotationIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Audio'),
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Video'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-5'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-6'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPACT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DRM_TOP_LEVEL_COMPACT'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('ADS')),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HBBTV_1_5'),
                        new \PHPStan\Type\Constant\ConstantStringType('HYBRIDCAST'),
                        new \PHPStan\Type\Constant\ConstantStringType('DVB_DASH_2014'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NUMBER_WITH_TIMELINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIME_WITH_TIMELINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NUMBER_WITH_DURATION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamOrder'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_ASCENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_DESCENDING'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP-HEAD'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP-ISO'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP-XSDATE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdMarkers'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdTriggers'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdsOnDeliveryRestrictions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeDvbSubtitles'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaylistType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaylistWindowSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                    new \PHPStan\Type\Constant\ConstantStringType('UseAudioRenditionGroup'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCTE35_ENHANCED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSTHROUGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATERANGE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SPLICE_INSERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('BREAK'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_ADVERTISEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_ADVERTISEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_PLACEMENT_OPPORTUNITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_PLACEMENT_OPPORTUNITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTRICTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNRESTRICTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTH'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionMethod'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyRotationIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('RepeatExtXKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAMPLE_AES'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Audio'),
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Video'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-5'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-6'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOD'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamOrder'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_ASCENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_DESCENDING'),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Audio'),
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Video'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-5'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-6'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamOrder'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_ASCENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_DESCENDING'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listChannels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Channels'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EgressAccessLogs'),
                    new \PHPStan\Type\Constant\ConstantStringType('HlsIngest'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngressAccessLogs'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IngestEndpoints'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Password'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                            new \PHPStan\Type\Constant\ConstantStringType('Username'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listHarvestJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HarvestJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('OriginEndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Destination'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
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
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginEndpoints'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Authorization'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CmafPackage'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DashPackage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('HlsPackage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MssPackage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Origination'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartoverWindowSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeDelaySeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    new \PHPStan\Type\Constant\ConstantStringType('Whitelist'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CdnIdentifierSecret'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretsRoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('HlsManifests'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentPrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyRotationIntervalSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SAMPLE_AES'),
                                new \PHPStan\Type\Constant\ConstantStringType('AES_CTR'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Audio'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Video'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-4'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-5'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-6'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-7'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-8'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AdMarkers'),
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                            new \PHPStan\Type\Constant\ConstantStringType('PlaylistType'),
                            new \PHPStan\Type\Constant\ConstantStringType('PlaylistWindowSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCTE35_ENHANCED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PASSTHROUGH'),
                                new \PHPStan\Type\Constant\ConstantStringType('DATERANGE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('VOD'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxVideoBitsPerSecond'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinVideoBitsPerSecond'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamOrder'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_ASCENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_DESCENDING'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AdTriggers'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdsOnDeliveryRestrictions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestLayout'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinBufferTimeSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinUpdatePeriodSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('PeriodTriggers'),
                        new \PHPStan\Type\Constant\ConstantStringType('Profile'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentTemplateFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                        new \PHPStan\Type\Constant\ConstantStringType('SuggestedPresentationDelaySeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('UtcTiming'),
                        new \PHPStan\Type\Constant\ConstantStringType('UtcTimingUri'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SPLICE_INSERT'),
                            new \PHPStan\Type\Constant\ConstantStringType('BREAK'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_ADVERTISEMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_ADVERTISEMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_PLACEMENT_OPPORTUNITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_PLACEMENT_OPPORTUNITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESTRICTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNRESTRICTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOTH'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyRotationIntervalSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Audio'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Video'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-4'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-5'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-6'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-7'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-8'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPACT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DRM_TOP_LEVEL_COMPACT'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('ADS')),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HBBTV_1_5'),
                            new \PHPStan\Type\Constant\ConstantStringType('HYBRIDCAST'),
                            new \PHPStan\Type\Constant\ConstantStringType('DVB_DASH_2014'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NUMBER_WITH_TIMELINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_WITH_TIMELINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NUMBER_WITH_DURATION'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxVideoBitsPerSecond'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinVideoBitsPerSecond'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamOrder'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_ASCENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_DESCENDING'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP-HEAD'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP-ISO'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP-XSDATE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AdMarkers'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdTriggers'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdsOnDeliveryRestrictions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeDvbSubtitles'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlaylistType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlaylistWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                        new \PHPStan\Type\Constant\ConstantStringType('UseAudioRenditionGroup'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCTE35_ENHANCED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSTHROUGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATERANGE'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SPLICE_INSERT'),
                            new \PHPStan\Type\Constant\ConstantStringType('BREAK'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_ADVERTISEMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_ADVERTISEMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_PLACEMENT_OPPORTUNITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_PLACEMENT_OPPORTUNITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESTRICTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNRESTRICTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOTH'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyRotationIntervalSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('RepeatExtXKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                                new \PHPStan\Type\Constant\ConstantStringType('SAMPLE_AES'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Audio'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Video'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-4'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-5'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-6'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-7'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-8'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('VOD'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxVideoBitsPerSecond'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinVideoBitsPerSecond'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamOrder'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_ASCENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_DESCENDING'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Audio'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Video'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-4'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-5'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-6'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-7'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-8'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxVideoBitsPerSecond'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinVideoBitsPerSecond'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamOrder'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_ASCENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_DESCENDING'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
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
    private function rotateChannelCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EgressAccessLogs'),
                new \PHPStan\Type\Constant\ConstantStringType('HlsIngest'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('IngressAccessLogs'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IngestEndpoints'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Password'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        new \PHPStan\Type\Constant\ConstantStringType('Username'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function rotateIngestEndpointCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EgressAccessLogs'),
                new \PHPStan\Type\Constant\ConstantStringType('HlsIngest'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('IngressAccessLogs'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IngestEndpoints'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Password'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        new \PHPStan\Type\Constant\ConstantStringType('Username'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
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
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EgressAccessLogs'),
                new \PHPStan\Type\Constant\ConstantStringType('HlsIngest'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('IngressAccessLogs'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IngestEndpoints'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Password'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        new \PHPStan\Type\Constant\ConstantStringType('Username'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateOriginEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Authorization'),
                new \PHPStan\Type\Constant\ConstantStringType('ChannelId'),
                new \PHPStan\Type\Constant\ConstantStringType('CmafPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DashPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('HlsPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                new \PHPStan\Type\Constant\ConstantStringType('MssPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('Origination'),
                new \PHPStan\Type\Constant\ConstantStringType('StartoverWindowSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeDelaySeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                new \PHPStan\Type\Constant\ConstantStringType('Whitelist'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CdnIdentifierSecret'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretsRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('HlsManifests'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionMethod'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyRotationIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SAMPLE_AES'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_CTR'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Audio'),
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Video'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-5'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-6'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AdMarkers'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlaylistType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlaylistWindowSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCTE35_ENHANCED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSTHROUGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATERANGE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('VOD'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamOrder'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_ASCENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_DESCENDING'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdTriggers'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdsOnDeliveryRestrictions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestLayout'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinBufferTimeSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinUpdatePeriodSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('PeriodTriggers'),
                    new \PHPStan\Type\Constant\ConstantStringType('Profile'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentTemplateFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                    new \PHPStan\Type\Constant\ConstantStringType('SuggestedPresentationDelaySeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('UtcTiming'),
                    new \PHPStan\Type\Constant\ConstantStringType('UtcTimingUri'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SPLICE_INSERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('BREAK'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_ADVERTISEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_ADVERTISEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_PLACEMENT_OPPORTUNITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_PLACEMENT_OPPORTUNITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTRICTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNRESTRICTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTH'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyRotationIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Audio'),
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Video'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-5'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-6'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPACT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DRM_TOP_LEVEL_COMPACT'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('ADS')),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HBBTV_1_5'),
                        new \PHPStan\Type\Constant\ConstantStringType('HYBRIDCAST'),
                        new \PHPStan\Type\Constant\ConstantStringType('DVB_DASH_2014'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NUMBER_WITH_TIMELINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIME_WITH_TIMELINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NUMBER_WITH_DURATION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamOrder'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_ASCENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_DESCENDING'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP-HEAD'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP-ISO'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP-XSDATE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdMarkers'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdTriggers'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdsOnDeliveryRestrictions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeDvbSubtitles'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaylistType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaylistWindowSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                    new \PHPStan\Type\Constant\ConstantStringType('UseAudioRenditionGroup'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCTE35_ENHANCED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSTHROUGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATERANGE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SPLICE_INSERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('BREAK'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_ADVERTISEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_ADVERTISEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_PLACEMENT_OPPORTUNITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_PLACEMENT_OPPORTUNITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTRICTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNRESTRICTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTH'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionMethod'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyRotationIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('RepeatExtXKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAMPLE_AES'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Audio'),
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Video'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-5'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-6'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOD'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamOrder'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_ASCENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_DESCENDING'),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestWindowSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Audio'),
                                new \PHPStan\Type\Constant\ConstantStringType('PresetSpeke20Video'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-AUDIO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-5'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-6'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-7'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRESET-VIDEO-8'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNENCRYPTED'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinVideoBitsPerSecond'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamOrder'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_ASCENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIDEO_BITRATE_DESCENDING'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
}