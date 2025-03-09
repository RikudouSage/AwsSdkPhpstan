<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MediaPackageVodClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MediaPackageVod\MediaPackageVodClient>
     */
    public function getClass(): string
    {
        return \Aws\MediaPackageVod\MediaPackageVodClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'configureLogs',
            'createAsset',
            'createPackagingConfiguration',
            'createPackagingGroup',
            'deleteAsset',
            'deletePackagingConfiguration',
            'deletePackagingGroup',
            'describeAsset',
            'describePackagingConfiguration',
            'describePackagingGroup',
            'listAssets',
            'listPackagingConfigurations',
            'listPackagingGroups',
            'listTagsForResource',
            'tagResource',
            'untagResource',
            'updatePackagingGroup',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'configureLogs' => $this->configureLogs(),
            'createAsset' => $this->createAsset(),
            'createPackagingConfiguration' => $this->createPackagingConfiguration(),
            'createPackagingGroup' => $this->createPackagingGroup(),
            'deleteAsset' => $this->deleteAsset(),
            'deletePackagingConfiguration' => $this->deletePackagingConfiguration(),
            'deletePackagingGroup' => $this->deletePackagingGroup(),
            'describeAsset' => $this->describeAsset(),
            'describePackagingConfiguration' => $this->describePackagingConfiguration(),
            'describePackagingGroup' => $this->describePackagingGroup(),
            'listAssets' => $this->listAssets(),
            'listPackagingConfigurations' => $this->listPackagingConfigurations(),
            'listPackagingGroups' => $this->listPackagingGroups(),
            'listTagsForResource' => $this->listTagsForResource(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updatePackagingGroup' => $this->updatePackagingGroup(),
        };
    }
    private function configureLogs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Authorization'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('EgressAccessLogs'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
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
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createAsset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('EgressEndpoints'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('PackagingGroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PackagingConfigurationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createPackagingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CmafPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DashPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('HlsPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('MssPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('PackagingGroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('HlsManifests'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeEncoderConfigurationInSegments'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
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
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AdMarkers'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('RepeatExtXKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCTE35_ENHANCED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PASSTHROUGH'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
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
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DashManifests'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeEncoderConfigurationInSegments'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                    new \PHPStan\Type\Constant\ConstantStringType('PeriodTriggers'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentTemplateFormat'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestLayout'),
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinBufferTimeSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Profile'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScteMarkersSource'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPACT'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('HBBTV_1_5'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SEGMENTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('MANIFEST'),
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
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
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
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ADS'),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NUMBER_WITH_TIMELINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIME_WITH_TIMELINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NUMBER_WITH_DURATION'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('HlsManifests'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeDvbSubtitles'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('UseAudioRenditionGroup'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionMethod'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAMPLE_AES'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
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
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AdMarkers'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('RepeatExtXKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCTE35_ENHANCED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PASSTHROUGH'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
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
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('MssManifests'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
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
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                        ], [
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
                    ])),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createPackagingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Authorization'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('EgressAccessLogs'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
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
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function deleteAsset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePackagingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePackagingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeAsset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('EgressEndpoints'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('PackagingGroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PackagingConfigurationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describePackagingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CmafPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DashPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('HlsPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('MssPackage'),
                new \PHPStan\Type\Constant\ConstantStringType('PackagingGroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('HlsManifests'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeEncoderConfigurationInSegments'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
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
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AdMarkers'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('RepeatExtXKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCTE35_ENHANCED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PASSTHROUGH'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
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
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DashManifests'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeEncoderConfigurationInSegments'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                    new \PHPStan\Type\Constant\ConstantStringType('PeriodTriggers'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentTemplateFormat'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestLayout'),
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinBufferTimeSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Profile'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScteMarkersSource'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPACT'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('HBBTV_1_5'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SEGMENTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('MANIFEST'),
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
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
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
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ADS'),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NUMBER_WITH_TIMELINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIME_WITH_TIMELINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NUMBER_WITH_DURATION'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('HlsManifests'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeDvbSubtitles'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('UseAudioRenditionGroup'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionMethod'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAMPLE_AES'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
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
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AdMarkers'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('RepeatExtXKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCTE35_ENHANCED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PASSTHROUGH'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
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
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('MssManifests'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
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
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                        ], [
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
                    ])),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describePackagingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateAssetCount'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Authorization'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('EgressAccessLogs'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CdnIdentifierSecret'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretsRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listAssets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Assets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('PackagingGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
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
    private function listPackagingConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('PackagingConfigurations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CmafPackage'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('DashPackage'),
                        new \PHPStan\Type\Constant\ConstantStringType('HlsPackage'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('MssPackage'),
                        new \PHPStan\Type\Constant\ConstantStringType('PackagingGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                            new \PHPStan\Type\Constant\ConstantStringType('HlsManifests'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeEncoderConfigurationInSegments'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                                new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Url'),
                                ], [
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
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AdMarkers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RepeatExtXKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SCTE35_ENHANCED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PASSTHROUGH'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
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
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DashManifests'),
                            new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeEncoderConfigurationInSegments'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                            new \PHPStan\Type\Constant\ConstantStringType('PeriodTriggers'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentTemplateFormat'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ManifestLayout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MinBufferTimeSeconds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Profile'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ScteMarkersSource'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('COMPACT'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HBBTV_1_5'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SEGMENTS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MANIFEST'),
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
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Url'),
                                ], [
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
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ADS'),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NUMBER_WITH_TIMELINE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_WITH_TIMELINE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NUMBER_WITH_DURATION'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                            new \PHPStan\Type\Constant\ConstantStringType('HlsManifests'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeDvbSubtitles'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('UseAudioRenditionGroup'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionMethod'),
                                new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAMPLE_AES'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Url'),
                                ], [
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
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AdMarkers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IncludeIframeOnlyStream'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProgramDateTimeIntervalSeconds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RepeatExtXKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SCTE35_ENHANCED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PASSTHROUGH'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
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
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                            new \PHPStan\Type\Constant\ConstantStringType('MssManifests'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentDurationSeconds'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SpekeKeyProvider'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionContractConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SystemIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Url'),
                                ], [
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
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ManifestName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StreamSelection'),
                                ], [
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
                            ])),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listPackagingGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('PackagingGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApproximateAssetCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Authorization'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EgressAccessLogs'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CdnIdentifierSecret'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretsRoleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
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
    private function updatePackagingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateAssetCount'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Authorization'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('EgressAccessLogs'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CdnIdentifierSecret'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretsRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
}