<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SfnClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Sfn\SfnClient>
     */
    public function getClass(): string
    {
        return \Aws\Sfn\SfnClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createActivity',
            'createStateMachine',
            'createStateMachineAlias',
            'deleteActivity',
            'deleteStateMachine',
            'deleteStateMachineAlias',
            'deleteStateMachineVersion',
            'describeActivity',
            'describeExecution',
            'describeMapRun',
            'describeStateMachine',
            'describeStateMachineAlias',
            'describeStateMachineForExecution',
            'getActivityTask',
            'getExecutionHistory',
            'listActivities',
            'listExecutions',
            'listMapRuns',
            'listStateMachineAliases',
            'listStateMachineVersions',
            'listStateMachines',
            'listTagsForResource',
            'publishStateMachineVersion',
            'redriveExecution',
            'sendTaskFailure',
            'sendTaskHeartbeat',
            'sendTaskSuccess',
            'startExecution',
            'startSyncExecution',
            'stopExecution',
            'tagResource',
            'testState',
            'untagResource',
            'updateMapRun',
            'updateStateMachine',
            'updateStateMachineAlias',
            'validateStateMachineDefinition',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createActivity' => $this->createActivity(),
            'createStateMachine' => $this->createStateMachine(),
            'createStateMachineAlias' => $this->createStateMachineAlias(),
            'deleteActivity' => $this->deleteActivity(),
            'deleteStateMachine' => $this->deleteStateMachine(),
            'deleteStateMachineAlias' => $this->deleteStateMachineAlias(),
            'deleteStateMachineVersion' => $this->deleteStateMachineVersion(),
            'describeActivity' => $this->describeActivity(),
            'describeExecution' => $this->describeExecution(),
            'describeMapRun' => $this->describeMapRun(),
            'describeStateMachine' => $this->describeStateMachine(),
            'describeStateMachineAlias' => $this->describeStateMachineAlias(),
            'describeStateMachineForExecution' => $this->describeStateMachineForExecution(),
            'getActivityTask' => $this->getActivityTask(),
            'getExecutionHistory' => $this->getExecutionHistory(),
            'listActivities' => $this->listActivities(),
            'listExecutions' => $this->listExecutions(),
            'listMapRuns' => $this->listMapRuns(),
            'listStateMachineAliases' => $this->listStateMachineAliases(),
            'listStateMachineVersions' => $this->listStateMachineVersions(),
            'listStateMachines' => $this->listStateMachines(),
            'listTagsForResource' => $this->listTagsForResource(),
            'publishStateMachineVersion' => $this->publishStateMachineVersion(),
            'redriveExecution' => $this->redriveExecution(),
            'sendTaskFailure' => $this->sendTaskFailure(),
            'sendTaskHeartbeat' => $this->sendTaskHeartbeat(),
            'sendTaskSuccess' => $this->sendTaskSuccess(),
            'startExecution' => $this->startExecution(),
            'startSyncExecution' => $this->startSyncExecution(),
            'stopExecution' => $this->stopExecution(),
            'tagResource' => $this->tagResource(),
            'testState' => $this->testState(),
            'untagResource' => $this->untagResource(),
            'updateMapRun' => $this->updateMapRun(),
            'updateStateMachine' => $this->updateStateMachine(),
            'updateStateMachineAlias' => $this->updateStateMachineAlias(),
            'validateStateMachineDefinition' => $this->validateStateMachineDefinition(),
        };
    }
    private function createActivity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('activityArn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createStateMachine(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('stateMachineArn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('stateMachineVersionArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createStateMachineAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('stateMachineAliasArn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deleteActivity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteStateMachine(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteStateMachineAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteStateMachineVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeActivity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('activityArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsDataKeyReusePeriodSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED_KMS_KEY'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('executionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('stateMachineArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('startDate'),
                new \PHPStan\Type\Constant\ConstantStringType('stopDate'),
                new \PHPStan\Type\Constant\ConstantStringType('input'),
                new \PHPStan\Type\Constant\ConstantStringType('inputDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('output'),
                new \PHPStan\Type\Constant\ConstantStringType('outputDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('traceHeader'),
                new \PHPStan\Type\Constant\ConstantStringType('mapRunArn'),
                new \PHPStan\Type\Constant\ConstantStringType('error'),
                new \PHPStan\Type\Constant\ConstantStringType('cause'),
                new \PHPStan\Type\Constant\ConstantStringType('stateMachineVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('stateMachineAliasArn'),
                new \PHPStan\Type\Constant\ConstantStringType('redriveCount'),
                new \PHPStan\Type\Constant\ConstantStringType('redriveDate'),
                new \PHPStan\Type\Constant\ConstantStringType('redriveStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('redriveStatusReason'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                    new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_REDRIVE'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('included'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('included'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REDRIVABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_REDRIVABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('REDRIVABLE_BY_MAP_RUN'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeMapRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('mapRunArn'),
                new \PHPStan\Type\Constant\ConstantStringType('executionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('startDate'),
                new \PHPStan\Type\Constant\ConstantStringType('stopDate'),
                new \PHPStan\Type\Constant\ConstantStringType('maxConcurrency'),
                new \PHPStan\Type\Constant\ConstantStringType('toleratedFailurePercentage'),
                new \PHPStan\Type\Constant\ConstantStringType('toleratedFailureCount'),
                new \PHPStan\Type\Constant\ConstantStringType('itemCounts'),
                new \PHPStan\Type\Constant\ConstantStringType('executionCounts'),
                new \PHPStan\Type\Constant\ConstantStringType('redriveCount'),
                new \PHPStan\Type\Constant\ConstantStringType('redriveDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('running'),
                    new \PHPStan\Type\Constant\ConstantStringType('succeeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('timedOut'),
                    new \PHPStan\Type\Constant\ConstantStringType('aborted'),
                    new \PHPStan\Type\Constant\ConstantStringType('total'),
                    new \PHPStan\Type\Constant\ConstantStringType('resultsWritten'),
                    new \PHPStan\Type\Constant\ConstantStringType('failuresNotRedrivable'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingRedrive'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('running'),
                    new \PHPStan\Type\Constant\ConstantStringType('succeeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('timedOut'),
                    new \PHPStan\Type\Constant\ConstantStringType('aborted'),
                    new \PHPStan\Type\Constant\ConstantStringType('total'),
                    new \PHPStan\Type\Constant\ConstantStringType('resultsWritten'),
                    new \PHPStan\Type\Constant\ConstantStringType('failuresNotRedrivable'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingRedrive'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeStateMachine(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('stateMachineArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('definition'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('loggingConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('tracingConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('label'),
                new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('variableReferences'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPRESS'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('level'),
                    new \PHPStan\Type\Constant\ConstantStringType('includeExecutionData'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinations'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('FATAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsLogGroup'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('logGroupArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsDataKeyReusePeriodSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED_KMS_KEY'),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
            ]),
        ]);
    }
    private function describeStateMachineAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('stateMachineAliasArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('routingConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('updateDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('stateMachineVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('weight'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeStateMachineForExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('stateMachineArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('definition'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('updateDate'),
                new \PHPStan\Type\Constant\ConstantStringType('loggingConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('tracingConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('mapRunArn'),
                new \PHPStan\Type\Constant\ConstantStringType('label'),
                new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('variableReferences'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('level'),
                    new \PHPStan\Type\Constant\ConstantStringType('includeExecutionData'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinations'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('FATAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsLogGroup'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('logGroupArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsDataKeyReusePeriodSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED_KMS_KEY'),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
            ]),
        ]);
    }
    private function getActivityTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskToken'),
                new \PHPStan\Type\Constant\ConstantStringType('input'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getExecutionHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('events'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('previousEventId'),
                    new \PHPStan\Type\Constant\ConstantStringType('activityFailedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('activityScheduleFailedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('activityScheduledEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('activityStartedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('activitySucceededEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('activityTimedOutEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskFailedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskScheduledEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskStartFailedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskStartedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskSubmitFailedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskSubmittedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskSucceededEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskTimedOutEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionFailedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionStartedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionSucceededEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionAbortedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionTimedOutEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionRedrivenEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('mapStateStartedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('mapIterationStartedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('mapIterationSucceededEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('mapIterationFailedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('mapIterationAbortedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionFailedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionScheduleFailedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionScheduledEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionStartFailedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionSucceededEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionTimedOutEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateEnteredEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateExitedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('mapRunStartedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('mapRunFailedEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('mapRunRedrivenEventDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('evaluationFailedEventDetails'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActivityFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActivityScheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActivityScheduleFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActivityStarted'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActivitySucceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActivityTimedOut'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChoiceStateEntered'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChoiceStateExited'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionAborted'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionStarted'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionSucceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionTimedOut'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailStateEntered'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionScheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionScheduleFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionStarted'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionStartFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionSucceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionTimedOut'),
                        new \PHPStan\Type\Constant\ConstantStringType('MapIterationAborted'),
                        new \PHPStan\Type\Constant\ConstantStringType('MapIterationFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('MapIterationStarted'),
                        new \PHPStan\Type\Constant\ConstantStringType('MapIterationSucceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('MapStateAborted'),
                        new \PHPStan\Type\Constant\ConstantStringType('MapStateEntered'),
                        new \PHPStan\Type\Constant\ConstantStringType('MapStateExited'),
                        new \PHPStan\Type\Constant\ConstantStringType('MapStateFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('MapStateStarted'),
                        new \PHPStan\Type\Constant\ConstantStringType('MapStateSucceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParallelStateAborted'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParallelStateEntered'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParallelStateExited'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParallelStateFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParallelStateStarted'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParallelStateSucceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('PassStateEntered'),
                        new \PHPStan\Type\Constant\ConstantStringType('PassStateExited'),
                        new \PHPStan\Type\Constant\ConstantStringType('SucceedStateEntered'),
                        new \PHPStan\Type\Constant\ConstantStringType('SucceedStateExited'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaskFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaskScheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaskStarted'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaskStartFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaskStateAborted'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaskStateEntered'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaskStateExited'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaskSubmitFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaskSubmitted'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaskSucceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaskTimedOut'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitStateAborted'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitStateEntered'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitStateExited'),
                        new \PHPStan\Type\Constant\ConstantStringType('MapRunAborted'),
                        new \PHPStan\Type\Constant\ConstantStringType('MapRunFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('MapRunStarted'),
                        new \PHPStan\Type\Constant\ConstantStringType('MapRunSucceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionRedriven'),
                        new \PHPStan\Type\Constant\ConstantStringType('MapRunRedriven'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluationFailed'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('cause'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('cause'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('input'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('heartbeatInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('truncated'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('workerName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('output'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputDetails'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('truncated'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('cause'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('cause'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('heartbeatInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskCredentials'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('cause'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resource'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('cause'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('output'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputDetails'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('truncated'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('output'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputDetails'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('truncated'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('cause'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('cause'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('input'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('stateMachineAliasArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('stateMachineVersionArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('truncated'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('output'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputDetails'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('truncated'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('cause'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('cause'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('redriveCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('length'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('index'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('index'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('index'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('index'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('cause'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('cause'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('input'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskCredentials'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('truncated'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('cause'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('output'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputDetails'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('truncated'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('cause'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('input'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputDetails'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('truncated'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('output'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('assignedVariables'),
                        new \PHPStan\Type\Constant\ConstantStringType('assignedVariablesDetails'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('truncated'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('truncated'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('mapRunArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('cause'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('mapRunArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('redriveCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('cause'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listActivities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('activities'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('activityArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('executions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('executionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateMachineArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('startDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('mapRunArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('itemCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateMachineVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateMachineAliasArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('redriveCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('redriveDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_REDRIVE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMapRuns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('mapRuns'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('executionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('mapRunArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateMachineArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('startDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStateMachineAliases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('stateMachineAliases'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('stateMachineAliasArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStateMachineVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('stateMachineVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('stateMachineVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStateMachines(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('stateMachines'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('stateMachineArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPRESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function publishStateMachineVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('stateMachineVersionArn'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function redriveExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('redriveDate'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function sendTaskFailure(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function sendTaskHeartbeat(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function sendTaskSuccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('executionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('startDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function startSyncExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('executionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('stateMachineArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('startDate'),
                new \PHPStan\Type\Constant\ConstantStringType('stopDate'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('error'),
                new \PHPStan\Type\Constant\ConstantStringType('cause'),
                new \PHPStan\Type\Constant\ConstantStringType('input'),
                new \PHPStan\Type\Constant\ConstantStringType('inputDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('output'),
                new \PHPStan\Type\Constant\ConstantStringType('outputDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('traceHeader'),
                new \PHPStan\Type\Constant\ConstantStringType('billingDetails'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('included'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('included'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('billedMemoryUsedInMB'),
                    new \PHPStan\Type\Constant\ConstantStringType('billedDurationInMilliseconds'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function stopExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('stopDate'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function testState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('output'),
                new \PHPStan\Type\Constant\ConstantStringType('error'),
                new \PHPStan\Type\Constant\ConstantStringType('cause'),
                new \PHPStan\Type\Constant\ConstantStringType('inspectionData'),
                new \PHPStan\Type\Constant\ConstantStringType('nextState'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('input'),
                    new \PHPStan\Type\Constant\ConstantStringType('afterArguments'),
                    new \PHPStan\Type\Constant\ConstantStringType('afterInputPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('afterParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('result'),
                    new \PHPStan\Type\Constant\ConstantStringType('afterResultSelector'),
                    new \PHPStan\Type\Constant\ConstantStringType('afterResultPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('request'),
                    new \PHPStan\Type\Constant\ConstantStringType('response'),
                    new \PHPStan\Type\Constant\ConstantStringType('variables'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('method'),
                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                        new \PHPStan\Type\Constant\ConstantStringType('headers'),
                        new \PHPStan\Type\Constant\ConstantStringType('body'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('headers'),
                        new \PHPStan\Type\Constant\ConstantStringType('body'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RETRIABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CAUGHT_ERROR'),
                ]),
            ]),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateMapRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateStateMachine(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('updateDate'),
                new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('stateMachineVersionArn'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateStateMachineAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('updateDate'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function validateStateMachineDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('result'),
                new \PHPStan\Type\Constant\ConstantStringType('diagnostics'),
                new \PHPStan\Type\Constant\ConstantStringType('truncated'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('OK'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
}