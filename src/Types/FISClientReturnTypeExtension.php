<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class FISClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\FIS\FISClient>
     */
    public function getClass(): string
    {
        return \Aws\FIS\FISClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createExperimentTemplate',
            'createTargetAccountConfiguration',
            'deleteExperimentTemplate',
            'deleteTargetAccountConfiguration',
            'getAction',
            'getExperiment',
            'getExperimentTargetAccountConfiguration',
            'getExperimentTemplate',
            'getSafetyLever',
            'getTargetAccountConfiguration',
            'getTargetResourceType',
            'listActions',
            'listExperimentResolvedTargets',
            'listExperimentTargetAccountConfigurations',
            'listExperimentTemplates',
            'listExperiments',
            'listTagsForResource',
            'listTargetAccountConfigurations',
            'listTargetResourceTypes',
            'startExperiment',
            'stopExperiment',
            'tagResource',
            'untagResource',
            'updateExperimentTemplate',
            'updateSafetyLeverState',
            'updateTargetAccountConfiguration',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createExperimentTemplate' => $this->createExperimentTemplate(),
            'createTargetAccountConfiguration' => $this->createTargetAccountConfiguration(),
            'deleteExperimentTemplate' => $this->deleteExperimentTemplate(),
            'deleteTargetAccountConfiguration' => $this->deleteTargetAccountConfiguration(),
            'getAction' => $this->getAction(),
            'getExperiment' => $this->getExperiment(),
            'getExperimentTargetAccountConfiguration' => $this->getExperimentTargetAccountConfiguration(),
            'getExperimentTemplate' => $this->getExperimentTemplate(),
            'getSafetyLever' => $this->getSafetyLever(),
            'getTargetAccountConfiguration' => $this->getTargetAccountConfiguration(),
            'getTargetResourceType' => $this->getTargetResourceType(),
            'listActions' => $this->listActions(),
            'listExperimentResolvedTargets' => $this->listExperimentResolvedTargets(),
            'listExperimentTargetAccountConfigurations' => $this->listExperimentTargetAccountConfigurations(),
            'listExperimentTemplates' => $this->listExperimentTemplates(),
            'listExperiments' => $this->listExperiments(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTargetAccountConfigurations' => $this->listTargetAccountConfigurations(),
            'listTargetResourceTypes' => $this->listTargetResourceTypes(),
            'startExperiment' => $this->startExperiment(),
            'stopExperiment' => $this->stopExperiment(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateExperimentTemplate' => $this->updateExperimentTemplate(),
            'updateSafetyLeverState' => $this->updateSafetyLeverState(),
            'updateTargetAccountConfiguration' => $this->updateTargetAccountConfiguration(),
        };
    }
    private function createExperimentTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('experimentTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopConditions'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetAccountConfigurationsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentReportConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                        new \PHPStan\Type\Constant\ConstantStringType('selectionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('values'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('startAfter'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('logSchemaVersion'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('logGroupArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountTargeting'),
                        new \PHPStan\Type\Constant\ConstantStringType('emptyTargetResolutionMode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('single-account'),
                            new \PHPStan\Type\Constant\ConstantStringType('multi-account'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('fail'),
                            new \PHPStan\Type\Constant\ConstantStringType('skip'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                        new \PHPStan\Type\Constant\ConstantStringType('preExperimentDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('postExperimentDuration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchDashboards'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('dashboardIdentifier'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createTargetAccountConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('targetAccountConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteExperimentTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('experimentTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopConditions'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetAccountConfigurationsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentReportConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                        new \PHPStan\Type\Constant\ConstantStringType('selectionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('values'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('startAfter'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('logSchemaVersion'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('logGroupArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountTargeting'),
                        new \PHPStan\Type\Constant\ConstantStringType('emptyTargetResolutionMode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('single-account'),
                            new \PHPStan\Type\Constant\ConstantStringType('multi-account'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('fail'),
                            new \PHPStan\Type\Constant\ConstantStringType('skip'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                        new \PHPStan\Type\Constant\ConstantStringType('preExperimentDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('postExperimentDuration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchDashboards'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('dashboardIdentifier'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteTargetAccountConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('targetAccountConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('action'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getExperiment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('experiment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopConditions'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetAccountConfigurationsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentReportConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentReport'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiating'),
                            new \PHPStan\Type\Constant\ConstantStringType('running'),
                            new \PHPStan\Type\Constant\ConstantStringType('completed'),
                            new \PHPStan\Type\Constant\ConstantStringType('stopping'),
                            new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                            new \PHPStan\Type\Constant\ConstantStringType('failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                        new \PHPStan\Type\Constant\ConstantStringType('selectionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('values'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('startAfter'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('pending'),
                                new \PHPStan\Type\Constant\ConstantStringType('initiating'),
                                new \PHPStan\Type\Constant\ConstantStringType('running'),
                                new \PHPStan\Type\Constant\ConstantStringType('completed'),
                                new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                                new \PHPStan\Type\Constant\ConstantStringType('stopping'),
                                new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                                new \PHPStan\Type\Constant\ConstantStringType('failed'),
                                new \PHPStan\Type\Constant\ConstantStringType('skipped'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('logSchemaVersion'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('logGroupArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountTargeting'),
                        new \PHPStan\Type\Constant\ConstantStringType('emptyTargetResolutionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionsMode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('single-account'),
                            new \PHPStan\Type\Constant\ConstantStringType('multi-account'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('fail'),
                            new \PHPStan\Type\Constant\ConstantStringType('skip'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('skip-all'),
                            new \PHPStan\Type\Constant\ConstantStringType('run-all'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                        new \PHPStan\Type\Constant\ConstantStringType('preExperimentDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('postExperimentDuration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchDashboards'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('dashboardIdentifier'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Reports'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('pending'),
                                new \PHPStan\Type\Constant\ConstantStringType('running'),
                                new \PHPStan\Type\Constant\ConstantStringType('completed'),
                                new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                                new \PHPStan\Type\Constant\ConstantStringType('failed'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('reportType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getExperimentTargetAccountConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('targetAccountConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getExperimentTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('experimentTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopConditions'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetAccountConfigurationsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentReportConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                        new \PHPStan\Type\Constant\ConstantStringType('selectionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('values'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('startAfter'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('logSchemaVersion'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('logGroupArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountTargeting'),
                        new \PHPStan\Type\Constant\ConstantStringType('emptyTargetResolutionMode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('single-account'),
                            new \PHPStan\Type\Constant\ConstantStringType('multi-account'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('fail'),
                            new \PHPStan\Type\Constant\ConstantStringType('skip'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                        new \PHPStan\Type\Constant\ConstantStringType('preExperimentDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('postExperimentDuration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchDashboards'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('dashboardIdentifier'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getSafetyLever(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('safetyLever'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('disengaged'),
                            new \PHPStan\Type\Constant\ConstantStringType('engaged'),
                            new \PHPStan\Type\Constant\ConstantStringType('engaging'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getTargetAccountConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('targetAccountConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getTargetResourceType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('targetResourceType'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listExperimentResolvedTargets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resolvedTargets'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetInformation'),
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
    private function listExperimentTargetAccountConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('targetAccountConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
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
    private function listExperimentTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('experimentTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listExperiments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('experiments'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('experimentTemplateId'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('experimentOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('pending'),
                                new \PHPStan\Type\Constant\ConstantStringType('initiating'),
                                new \PHPStan\Type\Constant\ConstantStringType('running'),
                                new \PHPStan\Type\Constant\ConstantStringType('completed'),
                                new \PHPStan\Type\Constant\ConstantStringType('stopping'),
                                new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                                new \PHPStan\Type\Constant\ConstantStringType('failed'),
                                new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountTargeting'),
                            new \PHPStan\Type\Constant\ConstantStringType('emptyTargetResolutionMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('actionsMode'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('single-account'),
                                new \PHPStan\Type\Constant\ConstantStringType('multi-account'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('fail'),
                                new \PHPStan\Type\Constant\ConstantStringType('skip'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('skip-all'),
                                new \PHPStan\Type\Constant\ConstantStringType('run-all'),
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
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listTargetAccountConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('targetAccountConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
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
    private function listTargetResourceTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('targetResourceTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startExperiment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('experiment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopConditions'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetAccountConfigurationsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentReportConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentReport'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiating'),
                            new \PHPStan\Type\Constant\ConstantStringType('running'),
                            new \PHPStan\Type\Constant\ConstantStringType('completed'),
                            new \PHPStan\Type\Constant\ConstantStringType('stopping'),
                            new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                            new \PHPStan\Type\Constant\ConstantStringType('failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                        new \PHPStan\Type\Constant\ConstantStringType('selectionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('values'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('startAfter'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('pending'),
                                new \PHPStan\Type\Constant\ConstantStringType('initiating'),
                                new \PHPStan\Type\Constant\ConstantStringType('running'),
                                new \PHPStan\Type\Constant\ConstantStringType('completed'),
                                new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                                new \PHPStan\Type\Constant\ConstantStringType('stopping'),
                                new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                                new \PHPStan\Type\Constant\ConstantStringType('failed'),
                                new \PHPStan\Type\Constant\ConstantStringType('skipped'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('logSchemaVersion'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('logGroupArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountTargeting'),
                        new \PHPStan\Type\Constant\ConstantStringType('emptyTargetResolutionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionsMode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('single-account'),
                            new \PHPStan\Type\Constant\ConstantStringType('multi-account'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('fail'),
                            new \PHPStan\Type\Constant\ConstantStringType('skip'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('skip-all'),
                            new \PHPStan\Type\Constant\ConstantStringType('run-all'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                        new \PHPStan\Type\Constant\ConstantStringType('preExperimentDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('postExperimentDuration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchDashboards'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('dashboardIdentifier'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Reports'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('pending'),
                                new \PHPStan\Type\Constant\ConstantStringType('running'),
                                new \PHPStan\Type\Constant\ConstantStringType('completed'),
                                new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                                new \PHPStan\Type\Constant\ConstantStringType('failed'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('reportType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function stopExperiment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('experiment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopConditions'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetAccountConfigurationsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentReportConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentReport'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiating'),
                            new \PHPStan\Type\Constant\ConstantStringType('running'),
                            new \PHPStan\Type\Constant\ConstantStringType('completed'),
                            new \PHPStan\Type\Constant\ConstantStringType('stopping'),
                            new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                            new \PHPStan\Type\Constant\ConstantStringType('failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                        new \PHPStan\Type\Constant\ConstantStringType('selectionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('values'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('startAfter'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('pending'),
                                new \PHPStan\Type\Constant\ConstantStringType('initiating'),
                                new \PHPStan\Type\Constant\ConstantStringType('running'),
                                new \PHPStan\Type\Constant\ConstantStringType('completed'),
                                new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                                new \PHPStan\Type\Constant\ConstantStringType('stopping'),
                                new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                                new \PHPStan\Type\Constant\ConstantStringType('failed'),
                                new \PHPStan\Type\Constant\ConstantStringType('skipped'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('logSchemaVersion'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('logGroupArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountTargeting'),
                        new \PHPStan\Type\Constant\ConstantStringType('emptyTargetResolutionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionsMode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('single-account'),
                            new \PHPStan\Type\Constant\ConstantStringType('multi-account'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('fail'),
                            new \PHPStan\Type\Constant\ConstantStringType('skip'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('skip-all'),
                            new \PHPStan\Type\Constant\ConstantStringType('run-all'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                        new \PHPStan\Type\Constant\ConstantStringType('preExperimentDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('postExperimentDuration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchDashboards'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('dashboardIdentifier'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Reports'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('pending'),
                                new \PHPStan\Type\Constant\ConstantStringType('running'),
                                new \PHPStan\Type\Constant\ConstantStringType('completed'),
                                new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                                new \PHPStan\Type\Constant\ConstantStringType('failed'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('reportType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
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
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateExperimentTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('experimentTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('targets'),
                    new \PHPStan\Type\Constant\ConstantStringType('actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopConditions'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetAccountConfigurationsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('experimentReportConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('filters'),
                        new \PHPStan\Type\Constant\ConstantStringType('selectionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('values'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('targets'),
                        new \PHPStan\Type\Constant\ConstantStringType('startAfter'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('logSchemaVersion'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('logGroupArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountTargeting'),
                        new \PHPStan\Type\Constant\ConstantStringType('emptyTargetResolutionMode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('single-account'),
                            new \PHPStan\Type\Constant\ConstantStringType('multi-account'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('fail'),
                            new \PHPStan\Type\Constant\ConstantStringType('skip'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                        new \PHPStan\Type\Constant\ConstantStringType('preExperimentDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('postExperimentDuration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchDashboards'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('dashboardIdentifier'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateSafetyLeverState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('safetyLever'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('disengaged'),
                            new \PHPStan\Type\Constant\ConstantStringType('engaged'),
                            new \PHPStan\Type\Constant\ConstantStringType('engaging'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateTargetAccountConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('targetAccountConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}