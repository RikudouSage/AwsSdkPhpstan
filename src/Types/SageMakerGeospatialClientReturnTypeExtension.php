<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SageMakerGeospatialClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\SageMakerGeospatial\SageMakerGeospatialClient>
     */
    public function getClass(): string
    {
        return \Aws\SageMakerGeospatial\SageMakerGeospatialClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'deleteEarthObservationJob',
            'deleteVectorEnrichmentJob',
            'exportEarthObservationJob',
            'exportVectorEnrichmentJob',
            'getEarthObservationJob',
            'getRasterDataCollection',
            'getTile',
            'getVectorEnrichmentJob',
            'listEarthObservationJobs',
            'listRasterDataCollections',
            'listTagsForResource',
            'listVectorEnrichmentJobs',
            'searchRasterDataCollection',
            'startEarthObservationJob',
            'startVectorEnrichmentJob',
            'stopEarthObservationJob',
            'stopVectorEnrichmentJob',
            'tagResource',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'deleteEarthObservationJob' => $this->deleteEarthObservationJob(),
            'deleteVectorEnrichmentJob' => $this->deleteVectorEnrichmentJob(),
            'exportEarthObservationJob' => $this->exportEarthObservationJob(),
            'exportVectorEnrichmentJob' => $this->exportVectorEnrichmentJob(),
            'getEarthObservationJob' => $this->getEarthObservationJob(),
            'getRasterDataCollection' => $this->getRasterDataCollection(),
            'getTile' => $this->getTile(),
            'getVectorEnrichmentJob' => $this->getVectorEnrichmentJob(),
            'listEarthObservationJobs' => $this->listEarthObservationJobs(),
            'listRasterDataCollections' => $this->listRasterDataCollections(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listVectorEnrichmentJobs' => $this->listVectorEnrichmentJobs(),
            'searchRasterDataCollection' => $this->searchRasterDataCollection(),
            'startEarthObservationJob' => $this->startEarthObservationJob(),
            'startVectorEnrichmentJob' => $this->startVectorEnrichmentJob(),
            'stopEarthObservationJob' => $this->stopEarthObservationJob(),
            'stopVectorEnrichmentJob' => $this->stopVectorEnrichmentJob(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function deleteEarthObservationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteVectorEnrichmentJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function exportEarthObservationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ExportSourceImages'),
                new \PHPStan\Type\Constant\ConstantStringType('ExportStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('OutputConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Data'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function exportVectorEnrichmentJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ExportStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('OutputConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Data'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getEarthObservationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ExportErrorDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('ExportStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('InputConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('JobConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('OutputBands'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLIENT_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVER_ERROR'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExportResults'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportSourceImages'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CLIENT_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVER_ERROR'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CLIENT_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVER_ERROR'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PreviousEarthObservationJobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RasterDataCollectionQuery'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AreaOfInterest'),
                        new \PHPStan\Type\Constant\ConstantStringType('PropertyFilters'),
                        new \PHPStan\Type\Constant\ConstantStringType('RasterDataCollectionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RasterDataCollectionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeRangeFilter'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AreaOfInterestGeometry'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MultiPolygonGeometry'),
                                new \PHPStan\Type\Constant\ConstantStringType('PolygonGeometry'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Coordinates'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\FloatType(),
                                                ])),
                                            ])),
                                        ])),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Coordinates'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\FloatType(),
                                            ])),
                                        ])),
                                    ])),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogicalOperator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('AND'),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Property'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EoCloudCover'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LandsatCloudCoverLand'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ViewOffNadir'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ViewSunAzimuth'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ViewSunElevation'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LowerBound'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UpperBound'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LowerBound'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UpperBound'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LowerBound'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UpperBound'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LowerBound'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UpperBound'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LowerBound'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UpperBound'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BandMathConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudMaskingConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudRemovalConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeoMosaicConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LandCoverSegmentationConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResamplingConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemporalStatisticsConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('ZonalStatisticsConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CustomIndices'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredefinedIndices'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Operations'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Equation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OutputType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INT32'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FLOAT32'),
                                        new \PHPStan\Type\Constant\ConstantStringType('INT16'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FLOAT64'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UINT16'),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AlgorithmName'),
                        new \PHPStan\Type\Constant\ConstantStringType('InterpolationValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetBands'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('INTERPOLATION'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AlgorithmName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetBands'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NEAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('BILINEAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUBIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUBICSPLINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LANCZOS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVERAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX'),
                            new \PHPStan\Type\Constant\ConstantStringType('MIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('MED'),
                            new \PHPStan\Type\Constant\ConstantStringType('Q1'),
                            new \PHPStan\Type\Constant\ConstantStringType('Q3'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AlgorithmName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputResolution'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetBands'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NEAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('BILINEAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUBIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUBICSPLINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LANCZOS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVERAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX'),
                            new \PHPStan\Type\Constant\ConstantStringType('MIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('MED'),
                            new \PHPStan\Type\Constant\ConstantStringType('Q1'),
                            new \PHPStan\Type\Constant\ConstantStringType('Q3'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserDefined'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('METERS'),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OutputResolution'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetBands'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Predefined'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserDefined'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HIGHEST'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOWEST'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVERAGE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('METERS'),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GroupBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('Statistics'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetBands'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('YEARLY'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MEAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD_DEVIATION'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Statistics'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetBands'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZoneS3Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZoneS3PathKmsKeyId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MEAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD_DEVIATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAX'),
                                new \PHPStan\Type\Constant\ConstantStringType('MIN'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BandName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputDataType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INT32'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLOAT32'),
                            new \PHPStan\Type\Constant\ConstantStringType('INT16'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLOAT64'),
                            new \PHPStan\Type\Constant\ConstantStringType('UINT16'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getRasterDataCollection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('DescriptionPageUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('ImageSourceBands'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('SupportedFilters'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                        new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                    new \PHPStan\Type\Constant\ConstantStringType('PREMIUM'),
                    new \PHPStan\Type\Constant\ConstantStringType('USER'),
                ]),
            ]),
        ]);
    }
    private function getTile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BinaryFile'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function getVectorEnrichmentJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ExportErrorDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('ExportStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('InputConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('JobConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLIENT_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVER_ERROR'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLIENT_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVER_ERROR'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataSourceConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentType'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Data'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MapMatchingConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReverseGeocodingConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IdAttributeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimestampAttributeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('XAttributeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('YAttributeName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('XAttributeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('YAttributeName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REVERSE_GEOCODING'),
                    new \PHPStan\Type\Constant\ConstantStringType('MAP_MATCHING'),
                ]),
            ]),
        ]);
    }
    private function listEarthObservationJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EarthObservationJobSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('OperationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRasterDataCollections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('RasterDataCollectionSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('DescriptionPageUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportedFilters'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                                new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREMIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('USER'),
                        ]),
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
    private function listVectorEnrichmentJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('VectorEnrichmentJobSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REVERSE_GEOCODING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAP_MATCHING'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function searchRasterDataCollection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateResultCount'),
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Assets'),
                        new \PHPStan\Type\Constant\ConstantStringType('DateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Href'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Coordinates'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\FloatType(),
                                    ])),
                                ])),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EoCloudCover'),
                            new \PHPStan\Type\Constant\ConstantStringType('LandsatCloudCoverLand'),
                            new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                            new \PHPStan\Type\Constant\ConstantStringType('ViewOffNadir'),
                            new \PHPStan\Type\Constant\ConstantStringType('ViewSunAzimuth'),
                            new \PHPStan\Type\Constant\ConstantStringType('ViewSunElevation'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startEarthObservationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('InputConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('JobConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PreviousEarthObservationJobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RasterDataCollectionQuery'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AreaOfInterest'),
                        new \PHPStan\Type\Constant\ConstantStringType('PropertyFilters'),
                        new \PHPStan\Type\Constant\ConstantStringType('RasterDataCollectionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RasterDataCollectionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeRangeFilter'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AreaOfInterestGeometry'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MultiPolygonGeometry'),
                                new \PHPStan\Type\Constant\ConstantStringType('PolygonGeometry'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Coordinates'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\FloatType(),
                                                ])),
                                            ])),
                                        ])),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Coordinates'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\FloatType(),
                                            ])),
                                        ])),
                                    ])),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogicalOperator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('AND'),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Property'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EoCloudCover'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LandsatCloudCoverLand'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ViewOffNadir'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ViewSunAzimuth'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ViewSunElevation'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LowerBound'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UpperBound'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LowerBound'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UpperBound'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LowerBound'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UpperBound'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LowerBound'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UpperBound'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LowerBound'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UpperBound'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BandMathConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudMaskingConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudRemovalConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeoMosaicConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LandCoverSegmentationConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResamplingConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemporalStatisticsConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('ZonalStatisticsConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CustomIndices'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredefinedIndices'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Operations'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Equation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OutputType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('INT32'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FLOAT32'),
                                        new \PHPStan\Type\Constant\ConstantStringType('INT16'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FLOAT64'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UINT16'),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AlgorithmName'),
                        new \PHPStan\Type\Constant\ConstantStringType('InterpolationValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetBands'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('INTERPOLATION'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AlgorithmName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetBands'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NEAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('BILINEAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUBIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUBICSPLINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LANCZOS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVERAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX'),
                            new \PHPStan\Type\Constant\ConstantStringType('MIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('MED'),
                            new \PHPStan\Type\Constant\ConstantStringType('Q1'),
                            new \PHPStan\Type\Constant\ConstantStringType('Q3'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AlgorithmName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputResolution'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetBands'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NEAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('BILINEAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUBIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUBICSPLINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LANCZOS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVERAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAX'),
                            new \PHPStan\Type\Constant\ConstantStringType('MIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('MED'),
                            new \PHPStan\Type\Constant\ConstantStringType('Q1'),
                            new \PHPStan\Type\Constant\ConstantStringType('Q3'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserDefined'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('METERS'),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OutputResolution'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetBands'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Predefined'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserDefined'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HIGHEST'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOWEST'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVERAGE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('METERS'),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GroupBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('Statistics'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetBands'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('YEARLY'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MEAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD_DEVIATION'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Statistics'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetBands'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZoneS3Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZoneS3PathKmsKeyId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MEAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD_DEVIATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAX'),
                                new \PHPStan\Type\Constant\ConstantStringType('MIN'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUM'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function startVectorEnrichmentJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('InputConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('JobConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataSourceConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentType'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Data'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MapMatchingConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReverseGeocodingConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IdAttributeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimestampAttributeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('XAttributeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('YAttributeName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('XAttributeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('YAttributeName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REVERSE_GEOCODING'),
                    new \PHPStan\Type\Constant\ConstantStringType('MAP_MATCHING'),
                ]),
            ]),
        ]);
    }
    private function stopEarthObservationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function stopVectorEnrichmentJob(): ?\PHPStan\Type\Type
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
}