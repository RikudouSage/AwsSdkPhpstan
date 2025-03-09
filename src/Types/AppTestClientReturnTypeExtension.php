<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class AppTestClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\AppTest\AppTestClient>
     */
    public function getClass(): string
    {
        return \Aws\AppTest\AppTestClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createTestCase',
            'createTestConfiguration',
            'createTestSuite',
            'deleteTestCase',
            'deleteTestConfiguration',
            'deleteTestRun',
            'deleteTestSuite',
            'getTestCase',
            'getTestConfiguration',
            'getTestRunStep',
            'getTestSuite',
            'listTagsForResource',
            'listTestCases',
            'listTestConfigurations',
            'listTestRunSteps',
            'listTestRunTestCases',
            'listTestRuns',
            'listTestSuites',
            'startTestRun',
            'tagResource',
            'untagResource',
            'updateTestCase',
            'updateTestConfiguration',
            'updateTestSuite',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createTestCase' => $this->createTestCase(),
            'createTestConfiguration' => $this->createTestConfiguration(),
            'createTestSuite' => $this->createTestSuite(),
            'deleteTestCase' => $this->deleteTestCase(),
            'deleteTestConfiguration' => $this->deleteTestConfiguration(),
            'deleteTestRun' => $this->deleteTestRun(),
            'deleteTestSuite' => $this->deleteTestSuite(),
            'getTestCase' => $this->getTestCase(),
            'getTestConfiguration' => $this->getTestConfiguration(),
            'getTestRunStep' => $this->getTestRunStep(),
            'getTestSuite' => $this->getTestSuite(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTestCases' => $this->listTestCases(),
            'listTestConfigurations' => $this->listTestConfigurations(),
            'listTestRunSteps' => $this->listTestRunSteps(),
            'listTestRunTestCases' => $this->listTestRunTestCases(),
            'listTestRuns' => $this->listTestRuns(),
            'listTestSuites' => $this->listTestSuites(),
            'startTestRun' => $this->startTestRun(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateTestCase' => $this->updateTestCase(),
            'updateTestConfiguration' => $this->updateTestConfiguration(),
            'updateTestSuite' => $this->updateTestSuite(),
        };
    }
    private function createTestCase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testCaseId'),
                new \PHPStan\Type\Constant\ConstantStringType('testCaseVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function createTestConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testConfigurationId'),
                new \PHPStan\Type\Constant\ConstantStringType('testConfigurationVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function createTestSuite(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testSuiteId'),
                new \PHPStan\Type\Constant\ConstantStringType('testSuiteVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function deleteTestCase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTestConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTestRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTestSuite(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getTestCase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testCaseId'),
                new \PHPStan\Type\Constant\ConstantStringType('testCaseArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('latestVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('testCaseVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('steps'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('resourceAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('mainframeAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('compareAction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('m2ManagedApplicationAction'),
                                new \PHPStan\Type\Constant\ConstantStringType('m2NonManagedApplicationAction'),
                                new \PHPStan\Type\Constant\ConstantStringType('cloudFormationAction'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('properties'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Configure'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Deconfigure'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('forceStop'),
                                        new \PHPStan\Type\Constant\ConstantStringType('importDataSetLocation'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Configure'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Deconfigure'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Create'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Delete'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('properties'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('batch'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tn3270'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('batchJobName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('batchJobParameters'),
                                        new \PHPStan\Type\Constant\ConstantStringType('exportDataSetNames'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('script'),
                                        new \PHPStan\Type\Constant\ConstantStringType('exportDataSetNames'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('scriptLocation'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantStringType('Selenium'),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('dmsTaskArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('input'),
                                new \PHPStan\Type\Constant\ConstantStringType('output'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('file'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('sourceLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('targetLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('fileMetadata'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('dataSets'),
                                            new \PHPStan\Type\Constant\ConstantStringType('databaseCDC'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('ccsid'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('length'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('PS'),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('FIXED'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('VARIABLE'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('LINE_SEQUENTIAL'),
                                                    ]),
                                                    new \PHPStan\Type\IntegerType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('sourceMetadata'),
                                                new \PHPStan\Type\Constant\ConstantStringType('targetMetadata'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('captureTool'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('z/OS-DB2'),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Precisely'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('AWS DMS'),
                                                    ]),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('captureTool'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('PostgreSQL'),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Precisely'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('AWS DMS'),
                                                    ]),
                                                ]),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('file'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('fileLocation'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getTestConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testConfigurationId'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('testConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('latestVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('testConfigurationVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('resources'),
                new \PHPStan\Type\Constant\ConstantStringType('properties'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceSettings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudFormation'),
                            new \PHPStan\Type\Constant\ConstantStringType('m2ManagedApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('m2NonManagedApplication'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('templateLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('applicationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                                new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointServiceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('listenerPort'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('MicroFocus'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointServiceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('listenerPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                                new \PHPStan\Type\Constant\ConstantStringType('webAppName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('BluAge'),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getTestRunStep(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('stepName'),
                new \PHPStan\Type\Constant\ConstantStringType('testRunId'),
                new \PHPStan\Type\Constant\ConstantStringType('testCaseId'),
                new \PHPStan\Type\Constant\ConstantStringType('testCaseVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('testSuiteId'),
                new \PHPStan\Type\Constant\ConstantStringType('testSuiteVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('beforeStep'),
                new \PHPStan\Type\Constant\ConstantStringType('afterStep'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('runStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('runEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('stepRunSummary'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Success'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Running'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('mainframeAction'),
                    new \PHPStan\Type\Constant\ConstantStringType('compareAction'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceAction'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('batch'),
                        new \PHPStan\Type\Constant\ConstantStringType('tn3270'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('stepInput'),
                            new \PHPStan\Type\Constant\ConstantStringType('stepOutput'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                new \PHPStan\Type\Constant\ConstantStringType('batchJobName'),
                                new \PHPStan\Type\Constant\ConstantStringType('batchJobParameters'),
                                new \PHPStan\Type\Constant\ConstantStringType('exportDataSetNames'),
                                new \PHPStan\Type\Constant\ConstantStringType('properties'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('m2ManagedApplication'),
                                    new \PHPStan\Type\Constant\ConstantStringType('m2NonManagedApplication'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('applicationId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                                        new \PHPStan\Type\Constant\ConstantStringType('listenerPort'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantStringType('MicroFocus'),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointServiceName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('listenerPort'),
                                        new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                                        new \PHPStan\Type\Constant\ConstantStringType('webAppName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\Constant\ConstantStringType('BluAge'),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('dmsTaskArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('dataSetExportLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('dmsOutputLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('dataSetDetails'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ccsid'),
                                        new \PHPStan\Type\Constant\ConstantStringType('format'),
                                        new \PHPStan\Type\Constant\ConstantStringType('length'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantStringType('PS'),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('FIXED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VARIABLE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LINE_SEQUENTIAL'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('stepInput'),
                            new \PHPStan\Type\Constant\ConstantStringType('stepOutput'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                new \PHPStan\Type\Constant\ConstantStringType('script'),
                                new \PHPStan\Type\Constant\ConstantStringType('exportDataSetNames'),
                                new \PHPStan\Type\Constant\ConstantStringType('properties'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('m2ManagedApplication'),
                                    new \PHPStan\Type\Constant\ConstantStringType('m2NonManagedApplication'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('applicationId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                                        new \PHPStan\Type\Constant\ConstantStringType('listenerPort'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantStringType('MicroFocus'),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointServiceName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('listenerPort'),
                                        new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                                        new \PHPStan\Type\Constant\ConstantStringType('webAppName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\Constant\ConstantStringType('BluAge'),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('scriptLocation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('Selenium'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('dmsTaskArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('dataSetExportLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('dmsOutputLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('dataSetDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('scriptOutputLocation'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ccsid'),
                                        new \PHPStan\Type\Constant\ConstantStringType('format'),
                                        new \PHPStan\Type\Constant\ConstantStringType('length'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantStringType('PS'),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('FIXED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VARIABLE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LINE_SEQUENTIAL'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fileType'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('datasets'),
                                new \PHPStan\Type\Constant\ConstantStringType('databaseCDC'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('stepInput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('stepOutput'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('sourceLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('targetLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sourceDataSets'),
                                        new \PHPStan\Type\Constant\ConstantStringType('targetDataSets'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ccsid'),
                                                new \PHPStan\Type\Constant\ConstantStringType('format'),
                                                new \PHPStan\Type\Constant\ConstantStringType('length'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantStringType('PS'),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('FIXED'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('VARIABLE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('LINE_SEQUENTIAL'),
                                                ]),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ccsid'),
                                                new \PHPStan\Type\Constant\ConstantStringType('format'),
                                                new \PHPStan\Type\Constant\ConstantStringType('length'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantStringType('PS'),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('FIXED'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('VARIABLE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('LINE_SEQUENTIAL'),
                                                ]),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('comparisonOutputLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('comparisonStatus'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Different'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Equivalent'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Equal'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('stepInput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('stepOutput'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('sourceLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('targetLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sourceMetadata'),
                                        new \PHPStan\Type\Constant\ConstantStringType('targetMetadata'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('captureTool'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('z/OS-DB2'),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Precisely'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS DMS'),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('captureTool'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('PostgreSQL'),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Precisely'),
                                                new \PHPStan\Type\Constant\ConstantStringType('AWS DMS'),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('comparisonOutputLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('comparisonStatus'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Different'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Equivalent'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Equal'),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cloudFormation'),
                        new \PHPStan\Type\Constant\ConstantStringType('m2ManagedApplication'),
                        new \PHPStan\Type\Constant\ConstantStringType('m2NonManagedApplication'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('createCloudformation'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleteCloudformation'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('stepInput'),
                                new \PHPStan\Type\Constant\ConstantStringType('stepOutput'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('templateLocation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('stackId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('exports'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('stepInput'),
                                new \PHPStan\Type\Constant\ConstantStringType('stepOutput'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('stackId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('stepInput'),
                            new \PHPStan\Type\Constant\ConstantStringType('stepOutput'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('applicationId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                                new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointServiceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('listenerPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('properties'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Configure'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Deconfigure'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('forceStop'),
                                    new \PHPStan\Type\Constant\ConstantStringType('importDataSetLocation'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('importDataSetSummary'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('stepInput'),
                            new \PHPStan\Type\Constant\ConstantStringType('stepOutput'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointServiceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('listenerPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                                new \PHPStan\Type\Constant\ConstantStringType('webAppName'),
                                new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('BluAge'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Configure'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Deconfigure'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getTestSuite(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testSuiteId'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('latestVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('testSuiteVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('testSuiteArn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('beforeSteps'),
                new \PHPStan\Type\Constant\ConstantStringType('afterSteps'),
                new \PHPStan\Type\Constant\ConstantStringType('testCases'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                    new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('resourceAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('mainframeAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('compareAction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('m2ManagedApplicationAction'),
                                new \PHPStan\Type\Constant\ConstantStringType('m2NonManagedApplicationAction'),
                                new \PHPStan\Type\Constant\ConstantStringType('cloudFormationAction'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('properties'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Configure'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Deconfigure'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('forceStop'),
                                        new \PHPStan\Type\Constant\ConstantStringType('importDataSetLocation'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Configure'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Deconfigure'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Create'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Delete'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('properties'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('batch'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tn3270'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('batchJobName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('batchJobParameters'),
                                        new \PHPStan\Type\Constant\ConstantStringType('exportDataSetNames'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('script'),
                                        new \PHPStan\Type\Constant\ConstantStringType('exportDataSetNames'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('scriptLocation'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantStringType('Selenium'),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('dmsTaskArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('input'),
                                new \PHPStan\Type\Constant\ConstantStringType('output'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('file'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('sourceLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('targetLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('fileMetadata'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('dataSets'),
                                            new \PHPStan\Type\Constant\ConstantStringType('databaseCDC'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('ccsid'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('length'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('PS'),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('FIXED'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('VARIABLE'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('LINE_SEQUENTIAL'),
                                                    ]),
                                                    new \PHPStan\Type\IntegerType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('sourceMetadata'),
                                                new \PHPStan\Type\Constant\ConstantStringType('targetMetadata'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('captureTool'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('z/OS-DB2'),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Precisely'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('AWS DMS'),
                                                    ]),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('captureTool'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('PostgreSQL'),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Precisely'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('AWS DMS'),
                                                    ]),
                                                ]),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('file'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('fileLocation'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('resourceAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('mainframeAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('compareAction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('m2ManagedApplicationAction'),
                                new \PHPStan\Type\Constant\ConstantStringType('m2NonManagedApplicationAction'),
                                new \PHPStan\Type\Constant\ConstantStringType('cloudFormationAction'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('properties'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Configure'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Deconfigure'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('forceStop'),
                                        new \PHPStan\Type\Constant\ConstantStringType('importDataSetLocation'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Configure'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Deconfigure'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Create'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Delete'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('properties'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('batch'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tn3270'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('batchJobName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('batchJobParameters'),
                                        new \PHPStan\Type\Constant\ConstantStringType('exportDataSetNames'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('script'),
                                        new \PHPStan\Type\Constant\ConstantStringType('exportDataSetNames'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('scriptLocation'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantStringType('Selenium'),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('dmsTaskArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('input'),
                                new \PHPStan\Type\Constant\ConstantStringType('output'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('file'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('sourceLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('targetLocation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('fileMetadata'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('dataSets'),
                                            new \PHPStan\Type\Constant\ConstantStringType('databaseCDC'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('ccsid'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('length'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('PS'),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('FIXED'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('VARIABLE'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('LINE_SEQUENTIAL'),
                                                    ]),
                                                    new \PHPStan\Type\IntegerType(),
                                                ]),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('sourceMetadata'),
                                                new \PHPStan\Type\Constant\ConstantStringType('targetMetadata'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('captureTool'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('z/OS-DB2'),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Precisely'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('AWS DMS'),
                                                    ]),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('captureTool'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantStringType('PostgreSQL'),
                                                    new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('Precisely'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('AWS DMS'),
                                                    ]),
                                                ]),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('file'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('fileLocation'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('sequential'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
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
    private function listTestCases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testCases'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('testCaseId'),
                        new \PHPStan\Type\Constant\ConstantStringType('testCaseArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('latestVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTestConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('testConfigurationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('latestVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('testConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTestRunSteps(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testRunSteps'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stepName'),
                        new \PHPStan\Type\Constant\ConstantStringType('testRunId'),
                        new \PHPStan\Type\Constant\ConstantStringType('testCaseId'),
                        new \PHPStan\Type\Constant\ConstantStringType('testCaseVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('testSuiteId'),
                        new \PHPStan\Type\Constant\ConstantStringType('testSuiteVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('beforeStep'),
                        new \PHPStan\Type\Constant\ConstantStringType('afterStep'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('runStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('runEndTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Success'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Running'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTestRunTestCases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testRunTestCases'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('testCaseId'),
                        new \PHPStan\Type\Constant\ConstantStringType('testCaseVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('testRunId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('runStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('runEndTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Success'),
                            new \PHPStan\Type\Constant\ConstantStringType('Running'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTestRuns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testRuns'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('testRunId'),
                        new \PHPStan\Type\Constant\ConstantStringType('testRunArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('testSuiteId'),
                        new \PHPStan\Type\Constant\ConstantStringType('testSuiteVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('testConfigurationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('testConfigurationVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('runStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('runEndTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Success'),
                            new \PHPStan\Type\Constant\ConstantStringType('Running'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTestSuites(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testSuites'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('testSuiteId'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('latestVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('testSuiteArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                            new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startTestRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testRunId'),
                new \PHPStan\Type\Constant\ConstantStringType('testRunStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Success'),
                    new \PHPStan\Type\Constant\ConstantStringType('Running'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
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
    private function updateTestCase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testCaseId'),
                new \PHPStan\Type\Constant\ConstantStringType('testCaseVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function updateTestConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testConfigurationId'),
                new \PHPStan\Type\Constant\ConstantStringType('testConfigurationVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function updateTestSuite(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('testSuiteId'),
                new \PHPStan\Type\Constant\ConstantStringType('testSuiteVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
}