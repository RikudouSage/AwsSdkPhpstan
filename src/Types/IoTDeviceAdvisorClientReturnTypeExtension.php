<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class IoTDeviceAdvisorClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\IoTDeviceAdvisor\IoTDeviceAdvisorClient>
     */
    public function getClass(): string
    {
        return \Aws\IoTDeviceAdvisor\IoTDeviceAdvisorClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createSuiteDefinition',
            'deleteSuiteDefinition',
            'getEndpoint',
            'getSuiteDefinition',
            'getSuiteRun',
            'getSuiteRunReport',
            'listSuiteDefinitions',
            'listSuiteRuns',
            'listTagsForResource',
            'startSuiteRun',
            'stopSuiteRun',
            'tagResource',
            'untagResource',
            'updateSuiteDefinition',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createSuiteDefinition' => $this->createSuiteDefinition(),
            'deleteSuiteDefinition' => $this->deleteSuiteDefinition(),
            'getEndpoint' => $this->getEndpoint(),
            'getSuiteDefinition' => $this->getSuiteDefinition(),
            'getSuiteRun' => $this->getSuiteRun(),
            'getSuiteRunReport' => $this->getSuiteRunReport(),
            'listSuiteDefinitions' => $this->listSuiteDefinitions(),
            'listSuiteRuns' => $this->listSuiteRuns(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startSuiteRun' => $this->startSuiteRun(),
            'stopSuiteRun' => $this->stopSuiteRun(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateSuiteDefinition' => $this->updateSuiteDefinition(),
        };
    }
    private function createSuiteDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionId'),
                new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionName'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deleteSuiteDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSuiteDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionId'),
                new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('latestVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('devices'),
                    new \PHPStan\Type\Constant\ConstantStringType('intendedForQualification'),
                    new \PHPStan\Type\Constant\ConstantStringType('isLongDurationTest'),
                    new \PHPStan\Type\Constant\ConstantStringType('rootGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('devicePermissionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('thingArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceRoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MqttV3_1_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('MqttV5'),
                        new \PHPStan\Type\Constant\ConstantStringType('MqttV3_1_1_OverWebSocket'),
                        new \PHPStan\Type\Constant\ConstantStringType('MqttV5_OverWebSocket'),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getSuiteRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionId'),
                new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('suiteRunId'),
                new \PHPStan\Type\Constant\ConstantStringType('suiteRunArn'),
                new \PHPStan\Type\Constant\ConstantStringType('suiteRunConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('testResult'),
                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('errorReason'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('primaryDevice'),
                    new \PHPStan\Type\Constant\ConstantStringType('selectedTestList'),
                    new \PHPStan\Type\Constant\ConstantStringType('parallelRun'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('thingArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceRoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('groups'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('groupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('tests'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('testCaseRunId'),
                            new \PHPStan\Type\Constant\ConstantStringType('testCaseDefinitionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('testCaseDefinitionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('logUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('warnings'),
                            new \PHPStan\Type\Constant\ConstantStringType('failure'),
                            new \PHPStan\Type\Constant\ConstantStringType('testScenarios'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PASS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PASS_WITH_WARNINGS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('testCaseScenarioId'),
                                new \PHPStan\Type\Constant\ConstantStringType('testCaseScenarioType'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('failure'),
                                new \PHPStan\Type\Constant\ConstantStringType('systemMessage'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Advanced'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Basic'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PASS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PASS_WITH_WARNINGS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ])),
                    ])),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PASS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASS_WITH_WARNINGS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getSuiteRunReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('qualificationReportDownloadUrl'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSuiteDefinitions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionInformationList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultDevices'),
                    new \PHPStan\Type\Constant\ConstantStringType('intendedForQualification'),
                    new \PHPStan\Type\Constant\ConstantStringType('isLongDurationTest'),
                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('thingArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceRoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MqttV3_1_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('MqttV5'),
                        new \PHPStan\Type\Constant\ConstantStringType('MqttV3_1_1_OverWebSocket'),
                        new \PHPStan\Type\Constant\ConstantStringType('MqttV5_OverWebSocket'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSuiteRuns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('suiteRunsList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('suiteRunId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('endAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('passed'),
                    new \PHPStan\Type\Constant\ConstantStringType('failed'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PASS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASS_WITH_WARNINGS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
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
    private function startSuiteRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('suiteRunId'),
                new \PHPStan\Type\Constant\ConstantStringType('suiteRunArn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopSuiteRun(): ?\PHPStan\Type\Type
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
    private function updateSuiteDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionId'),
                new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionName'),
                new \PHPStan\Type\Constant\ConstantStringType('suiteDefinitionVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
}