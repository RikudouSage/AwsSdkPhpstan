<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ForecastServiceClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ForecastService\ForecastServiceClient>
     */
    public function getClass(): string
    {
        return \Aws\ForecastService\ForecastServiceClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createAutoPredictor',
            'createDataset',
            'createDatasetGroup',
            'createDatasetImportJob',
            'createExplainability',
            'createExplainabilityExport',
            'createForecast',
            'createForecastExportJob',
            'createMonitor',
            'createPredictor',
            'createPredictorBacktestExportJob',
            'createWhatIfAnalysis',
            'createWhatIfForecast',
            'createWhatIfForecastExport',
            'deleteDataset',
            'deleteDatasetGroup',
            'deleteDatasetImportJob',
            'deleteExplainability',
            'deleteExplainabilityExport',
            'deleteForecast',
            'deleteForecastExportJob',
            'deleteMonitor',
            'deletePredictor',
            'deletePredictorBacktestExportJob',
            'deleteResourceTree',
            'deleteWhatIfAnalysis',
            'deleteWhatIfForecast',
            'deleteWhatIfForecastExport',
            'describeAutoPredictor',
            'describeDataset',
            'describeDatasetGroup',
            'describeDatasetImportJob',
            'describeExplainability',
            'describeExplainabilityExport',
            'describeForecast',
            'describeForecastExportJob',
            'describeMonitor',
            'describePredictor',
            'describePredictorBacktestExportJob',
            'describeWhatIfAnalysis',
            'describeWhatIfForecast',
            'describeWhatIfForecastExport',
            'getAccuracyMetrics',
            'listDatasetGroups',
            'listDatasetImportJobs',
            'listDatasets',
            'listExplainabilities',
            'listExplainabilityExports',
            'listForecastExportJobs',
            'listForecasts',
            'listMonitorEvaluations',
            'listMonitors',
            'listPredictorBacktestExportJobs',
            'listPredictors',
            'listTagsForResource',
            'listWhatIfAnalyses',
            'listWhatIfForecastExports',
            'listWhatIfForecasts',
            'resumeResource',
            'stopResource',
            'tagResource',
            'untagResource',
            'updateDatasetGroup',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createAutoPredictor' => $this->createAutoPredictor(),
            'createDataset' => $this->createDataset(),
            'createDatasetGroup' => $this->createDatasetGroup(),
            'createDatasetImportJob' => $this->createDatasetImportJob(),
            'createExplainability' => $this->createExplainability(),
            'createExplainabilityExport' => $this->createExplainabilityExport(),
            'createForecast' => $this->createForecast(),
            'createForecastExportJob' => $this->createForecastExportJob(),
            'createMonitor' => $this->createMonitor(),
            'createPredictor' => $this->createPredictor(),
            'createPredictorBacktestExportJob' => $this->createPredictorBacktestExportJob(),
            'createWhatIfAnalysis' => $this->createWhatIfAnalysis(),
            'createWhatIfForecast' => $this->createWhatIfForecast(),
            'createWhatIfForecastExport' => $this->createWhatIfForecastExport(),
            'deleteDataset' => $this->deleteDataset(),
            'deleteDatasetGroup' => $this->deleteDatasetGroup(),
            'deleteDatasetImportJob' => $this->deleteDatasetImportJob(),
            'deleteExplainability' => $this->deleteExplainability(),
            'deleteExplainabilityExport' => $this->deleteExplainabilityExport(),
            'deleteForecast' => $this->deleteForecast(),
            'deleteForecastExportJob' => $this->deleteForecastExportJob(),
            'deleteMonitor' => $this->deleteMonitor(),
            'deletePredictor' => $this->deletePredictor(),
            'deletePredictorBacktestExportJob' => $this->deletePredictorBacktestExportJob(),
            'deleteResourceTree' => $this->deleteResourceTree(),
            'deleteWhatIfAnalysis' => $this->deleteWhatIfAnalysis(),
            'deleteWhatIfForecast' => $this->deleteWhatIfForecast(),
            'deleteWhatIfForecastExport' => $this->deleteWhatIfForecastExport(),
            'describeAutoPredictor' => $this->describeAutoPredictor(),
            'describeDataset' => $this->describeDataset(),
            'describeDatasetGroup' => $this->describeDatasetGroup(),
            'describeDatasetImportJob' => $this->describeDatasetImportJob(),
            'describeExplainability' => $this->describeExplainability(),
            'describeExplainabilityExport' => $this->describeExplainabilityExport(),
            'describeForecast' => $this->describeForecast(),
            'describeForecastExportJob' => $this->describeForecastExportJob(),
            'describeMonitor' => $this->describeMonitor(),
            'describePredictor' => $this->describePredictor(),
            'describePredictorBacktestExportJob' => $this->describePredictorBacktestExportJob(),
            'describeWhatIfAnalysis' => $this->describeWhatIfAnalysis(),
            'describeWhatIfForecast' => $this->describeWhatIfForecast(),
            'describeWhatIfForecastExport' => $this->describeWhatIfForecastExport(),
            'getAccuracyMetrics' => $this->getAccuracyMetrics(),
            'listDatasetGroups' => $this->listDatasetGroups(),
            'listDatasetImportJobs' => $this->listDatasetImportJobs(),
            'listDatasets' => $this->listDatasets(),
            'listExplainabilities' => $this->listExplainabilities(),
            'listExplainabilityExports' => $this->listExplainabilityExports(),
            'listForecastExportJobs' => $this->listForecastExportJobs(),
            'listForecasts' => $this->listForecasts(),
            'listMonitorEvaluations' => $this->listMonitorEvaluations(),
            'listMonitors' => $this->listMonitors(),
            'listPredictorBacktestExportJobs' => $this->listPredictorBacktestExportJobs(),
            'listPredictors' => $this->listPredictors(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listWhatIfAnalyses' => $this->listWhatIfAnalyses(),
            'listWhatIfForecastExports' => $this->listWhatIfForecastExports(),
            'listWhatIfForecasts' => $this->listWhatIfForecasts(),
            'resumeResource' => $this->resumeResource(),
            'stopResource' => $this->stopResource(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateDatasetGroup' => $this->updateDatasetGroup(),
        };
    }
    private function createAutoPredictor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PredictorArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDatasetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetGroupArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDatasetImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetImportJobArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createExplainability(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExplainabilityArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createExplainabilityExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExplainabilityExportArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createForecast(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ForecastArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createForecastExportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ForecastExportJobArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createMonitor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MonitorArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPredictor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PredictorArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPredictorBacktestExportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PredictorBacktestExportJobArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWhatIfAnalysis(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WhatIfAnalysisArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWhatIfForecast(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WhatIfForecastArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWhatIfForecastExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WhatIfForecastExportArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDatasetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDatasetImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteExplainability(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteExplainabilityExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteForecast(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteForecastExportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteMonitor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deletePredictor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deletePredictorBacktestExportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteResourceTree(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteWhatIfAnalysis(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteWhatIfForecast(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteWhatIfForecastExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeAutoPredictor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PredictorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PredictorName'),
                new \PHPStan\Type\Constant\ConstantStringType('ForecastHorizon'),
                new \PHPStan\Type\Constant\ConstantStringType('ForecastTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('ForecastFrequency'),
                new \PHPStan\Type\Constant\ConstantStringType('ForecastDimensions'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetImportJobArns'),
                new \PHPStan\Type\Constant\ConstantStringType('DataConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ReferencePredictorSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeRemainingInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('OptimizationMetric'),
                new \PHPStan\Type\Constant\ConstantStringType('ExplainabilityInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('MonitorInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeAlignmentBoundary'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeConfigs'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalDatasets'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Transformations'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ]))),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WAPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('RMSE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AverageWeightedQuantileLoss'),
                    new \PHPStan\Type\Constant\ConstantStringType('MASE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MAPE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExplainabilityArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MonitorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Month'),
                    new \PHPStan\Type\Constant\ConstantStringType('DayOfMonth'),
                    new \PHPStan\Type\Constant\ConstantStringType('DayOfWeek'),
                    new \PHPStan\Type\Constant\ConstantStringType('Hour'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('JANUARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('FEBRUARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('MARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('APRIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('JUNE'),
                        new \PHPStan\Type\Constant\ConstantStringType('JULY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUGUST'),
                        new \PHPStan\Type\Constant\ConstantStringType('SEPTEMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('OCTOBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOVEMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DECEMBER'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MONDAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TUESDAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEDNESDAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('THURSDAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('FRIDAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SATURDAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUNDAY'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function describeDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetType'),
                new \PHPStan\Type\Constant\ConstantStringType('DataFrequency'),
                new \PHPStan\Type\Constant\ConstantStringType('Schema'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RETAIL'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVENTORY_PLANNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2_CAPACITY'),
                    new \PHPStan\Type\Constant\ConstantStringType('WORK_FORCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('WEB_TRAFFIC'),
                    new \PHPStan\Type\Constant\ConstantStringType('METRICS'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TARGET_TIME_SERIES'),
                    new \PHPStan\Type\Constant\ConstantStringType('RELATED_TIME_SERIES'),
                    new \PHPStan\Type\Constant\ConstantStringType('ITEM_METADATA'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('string'),
                                new \PHPStan\Type\Constant\ConstantStringType('integer'),
                                new \PHPStan\Type\Constant\ConstantStringType('float'),
                                new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                                new \PHPStan\Type\Constant\ConstantStringType('geolocation'),
                            ]),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeDatasetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetGroupArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetArns'),
                new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RETAIL'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVENTORY_PLANNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2_CAPACITY'),
                    new \PHPStan\Type\Constant\ConstantStringType('WORK_FORCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('WEB_TRAFFIC'),
                    new \PHPStan\Type\Constant\ConstantStringType('METRICS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeDatasetImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetImportJobName'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetImportJobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TimestampFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeZone'),
                new \PHPStan\Type\Constant\ConstantStringType('UseGeolocationForTimeZone'),
                new \PHPStan\Type\Constant\ConstantStringType('GeolocationFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeRemainingInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('FieldStatistics'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSize'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Format'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportMode'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Config'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Count'),
                    new \PHPStan\Type\Constant\ConstantStringType('CountDistinct'),
                    new \PHPStan\Type\Constant\ConstantStringType('CountNull'),
                    new \PHPStan\Type\Constant\ConstantStringType('CountNan'),
                    new \PHPStan\Type\Constant\ConstantStringType('Min'),
                    new \PHPStan\Type\Constant\ConstantStringType('Max'),
                    new \PHPStan\Type\Constant\ConstantStringType('Avg'),
                    new \PHPStan\Type\Constant\ConstantStringType('Stddev'),
                    new \PHPStan\Type\Constant\ConstantStringType('CountLong'),
                    new \PHPStan\Type\Constant\ConstantStringType('CountDistinctLong'),
                    new \PHPStan\Type\Constant\ConstantStringType('CountNullLong'),
                    new \PHPStan\Type\Constant\ConstantStringType('CountNanLong'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                    new \PHPStan\Type\Constant\ConstantStringType('INCREMENTAL'),
                ]),
            ]),
        ]);
    }
    private function describeExplainability(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExplainabilityArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ExplainabilityName'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ExplainabilityConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('EnableVisualization'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                new \PHPStan\Type\Constant\ConstantStringType('Schema'),
                new \PHPStan\Type\Constant\ConstantStringType('StartDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeRemainingInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TimeSeriesGranularity'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimePointGranularity'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPECIFIC'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPECIFIC'),
                    ]),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Config'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('string'),
                                new \PHPStan\Type\Constant\ConstantStringType('integer'),
                                new \PHPStan\Type\Constant\ConstantStringType('float'),
                                new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                                new \PHPStan\Type\Constant\ConstantStringType('geolocation'),
                            ]),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeExplainabilityExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExplainabilityExportArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ExplainabilityExportName'),
                new \PHPStan\Type\Constant\ConstantStringType('ExplainabilityArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Format'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Config'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeForecast(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ForecastArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ForecastName'),
                new \PHPStan\Type\Constant\ConstantStringType('ForecastTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('PredictorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetGroupArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeRemainingInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeSeriesSelector'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TimeSeriesIdentifiers'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('Schema'),
                        new \PHPStan\Type\Constant\ConstantStringType('Format'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Config'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('string'),
                                        new \PHPStan\Type\Constant\ConstantStringType('integer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('float'),
                                        new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('geolocation'),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeForecastExportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ForecastExportJobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ForecastExportJobName'),
                new \PHPStan\Type\Constant\ConstantStringType('ForecastArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Format'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Config'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeMonitor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MonitorName'),
                new \PHPStan\Type\Constant\ConstantStringType('MonitorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('LastEvaluationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastEvaluationState'),
                new \PHPStan\Type\Constant\ConstantStringType('Baseline'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EstimatedEvaluationTimeRemainingInMinutes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PredictorBaseline'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BaselineMetrics'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function describePredictor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PredictorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PredictorName'),
                new \PHPStan\Type\Constant\ConstantStringType('AlgorithmArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AutoMLAlgorithmArns'),
                new \PHPStan\Type\Constant\ConstantStringType('ForecastHorizon'),
                new \PHPStan\Type\Constant\ConstantStringType('ForecastTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('PerformAutoML'),
                new \PHPStan\Type\Constant\ConstantStringType('AutoMLOverrideStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('PerformHPO'),
                new \PHPStan\Type\Constant\ConstantStringType('TrainingParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('HPOConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('FeaturizationConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('PredictorExecutionDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeRemainingInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('IsAutoPredictor'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetImportJobArns'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('OptimizationMetric'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LatencyOptimized'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccuracyOptimized'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfBacktestWindows'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackTestWindowOffset'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterRanges'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CategoricalParameterRanges'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContinuousParameterRanges'),
                        new \PHPStan\Type\Constant\ConstantStringType('IntegerParameterRanges'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Values'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('ScalingType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Auto'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Linear'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Logarithmic'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReverseLogarithmic'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('ScalingType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Auto'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Linear'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Logarithmic'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReverseLogarithmic'),
                                ]),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupplementaryFeatures'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ForecastFrequency'),
                    new \PHPStan\Type\Constant\ConstantStringType('ForecastDimensions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Featurizations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeaturizationPipeline'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FeaturizationMethodName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FeaturizationMethodParameters'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('filling'),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                            ])),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PredictorExecutions'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AlgorithmArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('TestWindows'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TestWindowStart'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TestWindowEnd'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                ], [
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WAPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('RMSE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AverageWeightedQuantileLoss'),
                    new \PHPStan\Type\Constant\ConstantStringType('MASE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MAPE'),
                ]),
            ]),
        ]);
    }
    private function describePredictorBacktestExportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PredictorBacktestExportJobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PredictorBacktestExportJobName'),
                new \PHPStan\Type\Constant\ConstantStringType('PredictorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Format'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Config'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeWhatIfAnalysis(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WhatIfAnalysisName'),
                new \PHPStan\Type\Constant\ConstantStringType('WhatIfAnalysisArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ForecastArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeRemainingInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeSeriesSelector'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TimeSeriesIdentifiers'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('Schema'),
                        new \PHPStan\Type\Constant\ConstantStringType('Format'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Config'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('string'),
                                        new \PHPStan\Type\Constant\ConstantStringType('integer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('float'),
                                        new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('geolocation'),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeWhatIfForecast(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WhatIfForecastName'),
                new \PHPStan\Type\Constant\ConstantStringType('WhatIfForecastArn'),
                new \PHPStan\Type\Constant\ConstantStringType('WhatIfAnalysisArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeRemainingInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeSeriesTransformations'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeSeriesReplacementsDataSource'),
                new \PHPStan\Type\Constant\ConstantStringType('ForecastTypes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Action'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeSeriesConditions'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ADD'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBTRACT'),
                                new \PHPStan\Type\Constant\ConstantStringType('MULTIPLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIVIDE'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                new \PHPStan\Type\Constant\ConstantStringType('AttributeValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('Condition'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                ]),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Config'),
                    new \PHPStan\Type\Constant\ConstantStringType('Schema'),
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimestampFormat'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                new \PHPStan\Type\Constant\ConstantStringType('AttributeType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('string'),
                                    new \PHPStan\Type\Constant\ConstantStringType('integer'),
                                    new \PHPStan\Type\Constant\ConstantStringType('float'),
                                    new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('geolocation'),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeWhatIfForecastExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WhatIfForecastExportArn'),
                new \PHPStan\Type\Constant\ConstantStringType('WhatIfForecastExportName'),
                new \PHPStan\Type\Constant\ConstantStringType('WhatIfForecastArns'),
                new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EstimatedTimeRemainingInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Format'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Config'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAccuracyMetrics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PredictorEvaluationResults'),
                new \PHPStan\Type\Constant\ConstantStringType('IsAutoPredictor'),
                new \PHPStan\Type\Constant\ConstantStringType('AutoMLOverrideStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('OptimizationMetric'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AlgorithmArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TestWindows'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TestWindowStart'),
                                new \PHPStan\Type\Constant\ConstantStringType('TestWindowEnd'),
                                new \PHPStan\Type\Constant\ConstantStringType('ItemCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('EvaluationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SUMMARY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPUTED'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RMSE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WeightedQuantileLosses'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMetrics'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AverageWeightedQuantileLoss'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Quantile'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LossValue'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ForecastType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WAPE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RMSE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MASE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MAPE'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LatencyOptimized'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccuracyOptimized'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WAPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('RMSE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AverageWeightedQuantileLoss'),
                    new \PHPStan\Type\Constant\ConstantStringType('MASE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MAPE'),
                ]),
            ]),
        ]);
    }
    private function listDatasetGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DatasetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatasetGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDatasetImportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetImportJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DatasetImportJobArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatasetImportJobName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImportMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Config'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('INCREMENTAL'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDatasets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Datasets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DatasetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatasetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TARGET_TIME_SERIES'),
                            new \PHPStan\Type\Constant\ConstantStringType('RELATED_TIME_SERIES'),
                            new \PHPStan\Type\Constant\ConstantStringType('ITEM_METADATA'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RETAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVENTORY_PLANNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC2_CAPACITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WORK_FORCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEB_TRAFFIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('METRICS'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listExplainabilities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Explainabilities'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExplainabilityArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExplainabilityName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExplainabilityConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TimeSeriesGranularity'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimePointGranularity'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('SPECIFIC'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('SPECIFIC'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listExplainabilityExports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExplainabilityExports'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExplainabilityExportArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExplainabilityExportName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Config'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listForecastExportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ForecastExportJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ForecastExportJobArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ForecastExportJobName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Config'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listForecasts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Forecasts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ForecastArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ForecastName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredictorArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedUsingAutoPredictor'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatasetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMonitorEvaluations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('PredictorMonitorEvaluations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('MonitorArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluationState'),
                        new \PHPStan\Type\Constant\ConstantStringType('WindowStartDatetime'),
                        new \PHPStan\Type\Constant\ConstantStringType('WindowEndDatetime'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredictorEvent'),
                        new \PHPStan\Type\Constant\ConstantStringType('MonitorDataSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricResults'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumItemsEvaluated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Detail'),
                            new \PHPStan\Type\Constant\ConstantStringType('Datetime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DatasetImportJobArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ForecastArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('PredictorArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricValue'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listMonitors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Monitors'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MonitorArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('MonitorName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPredictorBacktestExportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PredictorBacktestExportJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PredictorBacktestExportJobArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredictorBacktestExportJobName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Config'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPredictors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Predictors'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PredictorArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredictorName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatasetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsAutoPredictor'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReferencePredictorSummary'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                                new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function listWhatIfAnalyses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WhatIfAnalyses'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WhatIfAnalysisArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('WhatIfAnalysisName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ForecastArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWhatIfForecastExports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WhatIfForecastExports'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WhatIfForecastExportArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('WhatIfForecastArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('WhatIfForecastExportName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Config'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWhatIfForecasts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WhatIfForecasts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WhatIfForecastArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('WhatIfForecastName'),
                        new \PHPStan\Type\Constant\ConstantStringType('WhatIfAnalysisArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function resumeResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function stopResource(): ?\PHPStan\Type\Type
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
    private function updateDatasetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}