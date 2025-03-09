<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SwfClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Swf\SwfClient>
     */
    public function getClass(): string
    {
        return \Aws\Swf\SwfClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'countClosedWorkflowExecutions',
            'countOpenWorkflowExecutions',
            'countPendingActivityTasks',
            'countPendingDecisionTasks',
            'deleteActivityType',
            'deleteWorkflowType',
            'deprecateActivityType',
            'deprecateDomain',
            'deprecateWorkflowType',
            'describeActivityType',
            'describeDomain',
            'describeWorkflowExecution',
            'describeWorkflowType',
            'getWorkflowExecutionHistory',
            'listActivityTypes',
            'listClosedWorkflowExecutions',
            'listDomains',
            'listOpenWorkflowExecutions',
            'listTagsForResource',
            'listWorkflowTypes',
            'pollForActivityTask',
            'pollForDecisionTask',
            'recordActivityTaskHeartbeat',
            'registerActivityType',
            'registerDomain',
            'registerWorkflowType',
            'requestCancelWorkflowExecution',
            'respondActivityTaskCanceled',
            'respondActivityTaskCompleted',
            'respondActivityTaskFailed',
            'respondDecisionTaskCompleted',
            'signalWorkflowExecution',
            'startWorkflowExecution',
            'tagResource',
            'terminateWorkflowExecution',
            'undeprecateActivityType',
            'undeprecateDomain',
            'undeprecateWorkflowType',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'countClosedWorkflowExecutions' => $this->countClosedWorkflowExecutions(),
            'countOpenWorkflowExecutions' => $this->countOpenWorkflowExecutions(),
            'countPendingActivityTasks' => $this->countPendingActivityTasks(),
            'countPendingDecisionTasks' => $this->countPendingDecisionTasks(),
            'deleteActivityType' => $this->deleteActivityType(),
            'deleteWorkflowType' => $this->deleteWorkflowType(),
            'deprecateActivityType' => $this->deprecateActivityType(),
            'deprecateDomain' => $this->deprecateDomain(),
            'deprecateWorkflowType' => $this->deprecateWorkflowType(),
            'describeActivityType' => $this->describeActivityType(),
            'describeDomain' => $this->describeDomain(),
            'describeWorkflowExecution' => $this->describeWorkflowExecution(),
            'describeWorkflowType' => $this->describeWorkflowType(),
            'getWorkflowExecutionHistory' => $this->getWorkflowExecutionHistory(),
            'listActivityTypes' => $this->listActivityTypes(),
            'listClosedWorkflowExecutions' => $this->listClosedWorkflowExecutions(),
            'listDomains' => $this->listDomains(),
            'listOpenWorkflowExecutions' => $this->listOpenWorkflowExecutions(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listWorkflowTypes' => $this->listWorkflowTypes(),
            'pollForActivityTask' => $this->pollForActivityTask(),
            'pollForDecisionTask' => $this->pollForDecisionTask(),
            'recordActivityTaskHeartbeat' => $this->recordActivityTaskHeartbeat(),
            'registerActivityType' => $this->registerActivityType(),
            'registerDomain' => $this->registerDomain(),
            'registerWorkflowType' => $this->registerWorkflowType(),
            'requestCancelWorkflowExecution' => $this->requestCancelWorkflowExecution(),
            'respondActivityTaskCanceled' => $this->respondActivityTaskCanceled(),
            'respondActivityTaskCompleted' => $this->respondActivityTaskCompleted(),
            'respondActivityTaskFailed' => $this->respondActivityTaskFailed(),
            'respondDecisionTaskCompleted' => $this->respondDecisionTaskCompleted(),
            'signalWorkflowExecution' => $this->signalWorkflowExecution(),
            'startWorkflowExecution' => $this->startWorkflowExecution(),
            'tagResource' => $this->tagResource(),
            'terminateWorkflowExecution' => $this->terminateWorkflowExecution(),
            'undeprecateActivityType' => $this->undeprecateActivityType(),
            'undeprecateDomain' => $this->undeprecateDomain(),
            'undeprecateWorkflowType' => $this->undeprecateWorkflowType(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function countClosedWorkflowExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('count'),
                new \PHPStan\Type\Constant\ConstantStringType('truncated'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function countOpenWorkflowExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('count'),
                new \PHPStan\Type\Constant\ConstantStringType('truncated'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function countPendingActivityTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('count'),
                new \PHPStan\Type\Constant\ConstantStringType('truncated'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function countPendingDecisionTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('count'),
                new \PHPStan\Type\Constant\ConstantStringType('truncated'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function deleteActivityType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteWorkflowType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deprecateActivityType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deprecateDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deprecateWorkflowType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeActivityType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('typeInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('activityType'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('deprecationDate'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('defaultTaskStartToCloseTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultTaskHeartbeatTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultTaskList'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultTaskPriority'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultTaskScheduleToStartTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultTaskScheduleToCloseTimeout'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionRetentionPeriodInDays'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeWorkflowExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('executionInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('executionConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('openCounts'),
                new \PHPStan\Type\Constant\ConstantStringType('latestActivityTaskTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('latestExecutionContext'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('execution'),
                    new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('closeTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('closeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('parent'),
                    new \PHPStan\Type\Constant\ConstantStringType('tagList'),
                    new \PHPStan\Type\Constant\ConstantStringType('cancelRequested'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                        new \PHPStan\Type\Constant\ConstantStringType('runId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTINUED_AS_NEW'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                        new \PHPStan\Type\Constant\ConstantStringType('runId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('taskStartToCloseTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionStartToCloseTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskList'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskPriority'),
                    new \PHPStan\Type\Constant\ConstantStringType('childPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaRole'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUEST_CANCEL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ABANDON'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('openActivityTasks'),
                    new \PHPStan\Type\Constant\ConstantStringType('openDecisionTasks'),
                    new \PHPStan\Type\Constant\ConstantStringType('openTimers'),
                    new \PHPStan\Type\Constant\ConstantStringType('openChildWorkflowExecutions'),
                    new \PHPStan\Type\Constant\ConstantStringType('openLambdaFunctions'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeWorkflowType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('typeInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('deprecationDate'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('defaultTaskStartToCloseTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultExecutionStartToCloseTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultTaskList'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultTaskPriority'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultChildPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultLambdaRole'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUEST_CANCEL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ABANDON'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getWorkflowExecutionHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('events'),
                new \PHPStan\Type\Constant\ConstantStringType('nextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventId'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionStartedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionCompletedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('completeWorkflowExecutionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('failWorkflowExecutionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionTimedOutEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionCanceledEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('cancelWorkflowExecutionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionContinuedAsNewEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('continueAsNewWorkflowExecutionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionTerminatedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionCancelRequestedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('decisionTaskScheduledEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('decisionTaskStartedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('decisionTaskTimedOutEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('activityTaskScheduledEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('activityTaskStartedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('activityTaskCompletedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('activityTaskFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('activityTaskTimedOutEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('activityTaskCanceledEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('activityTaskCancelRequestedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionSignaledEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('markerRecordedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('recordMarkerFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('timerStartedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('timerFiredEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('timerCanceledEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('startChildWorkflowExecutionInitiatedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('childWorkflowExecutionStartedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('childWorkflowExecutionCompletedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('childWorkflowExecutionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('childWorkflowExecutionTimedOutEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('childWorkflowExecutionCanceledEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('childWorkflowExecutionTerminatedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('signalExternalWorkflowExecutionInitiatedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalWorkflowExecutionSignaledEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('signalExternalWorkflowExecutionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalWorkflowExecutionCancelRequestedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('requestCancelExternalWorkflowExecutionInitiatedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('requestCancelExternalWorkflowExecutionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('scheduleActivityTaskFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('requestCancelActivityTaskFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTimerFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('cancelTimerFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('startChildWorkflowExecutionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionScheduledEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionStartedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionCompletedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionTimedOutEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('scheduleLambdaFunctionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('startLambdaFunctionFailedEventAttributes'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowExecutionStarted'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowExecutionCancelRequested'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowExecutionCompleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('CompleteWorkflowExecutionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowExecutionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailWorkflowExecutionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowExecutionTimedOut'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowExecutionCanceled'),
                            new \PHPStan\Type\Constant\ConstantStringType('CancelWorkflowExecutionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowExecutionContinuedAsNew'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContinueAsNewWorkflowExecutionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowExecutionTerminated'),
                            new \PHPStan\Type\Constant\ConstantStringType('DecisionTaskScheduled'),
                            new \PHPStan\Type\Constant\ConstantStringType('DecisionTaskStarted'),
                            new \PHPStan\Type\Constant\ConstantStringType('DecisionTaskCompleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('DecisionTaskTimedOut'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActivityTaskScheduled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScheduleActivityTaskFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActivityTaskStarted'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActivityTaskCompleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActivityTaskFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActivityTaskTimedOut'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActivityTaskCanceled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActivityTaskCancelRequested'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestCancelActivityTaskFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowExecutionSignaled'),
                            new \PHPStan\Type\Constant\ConstantStringType('MarkerRecorded'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecordMarkerFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimerStarted'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartTimerFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimerFired'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimerCanceled'),
                            new \PHPStan\Type\Constant\ConstantStringType('CancelTimerFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartChildWorkflowExecutionInitiated'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartChildWorkflowExecutionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChildWorkflowExecutionStarted'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChildWorkflowExecutionCompleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChildWorkflowExecutionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChildWorkflowExecutionTimedOut'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChildWorkflowExecutionCanceled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChildWorkflowExecutionTerminated'),
                            new \PHPStan\Type\Constant\ConstantStringType('SignalExternalWorkflowExecutionInitiated'),
                            new \PHPStan\Type\Constant\ConstantStringType('SignalExternalWorkflowExecutionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExternalWorkflowExecutionSignaled'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestCancelExternalWorkflowExecutionInitiated'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestCancelExternalWorkflowExecutionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExternalWorkflowExecutionCancelRequested'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionScheduled'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionStarted'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionCompleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionTimedOut'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScheduleLambdaFunctionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartLambdaFunctionFailed'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionStartToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskStartToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('childPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskList'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskPriority'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('tagList'),
                            new \PHPStan\Type\Constant\ConstantStringType('continuedExecutionRunId'),
                            new \PHPStan\Type\Constant\ConstantStringType('parentWorkflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('parentInitiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaRole'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REQUEST_CANCEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('ABANDON'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('result'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNHANDLED_DECISION'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNHANDLED_DECISION'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timeoutType'),
                            new \PHPStan\Type\Constant\ConstantStringType('childPolicy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('START_TO_CLOSE'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REQUEST_CANCEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('ABANDON'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNHANDLED_DECISION'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('newExecutionRunId'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionStartToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskList'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskPriority'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskStartToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('childPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('tagList'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaRole'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REQUEST_CANCEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('ABANDON'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNHANDLED_DECISION'),
                                new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_TYPE_DEPRECATED'),
                                new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_TYPE_DOES_NOT_EXIST'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_EXECUTION_START_TO_CLOSE_TIMEOUT_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_TASK_START_TO_CLOSE_TIMEOUT_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_TASK_LIST_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_CHILD_POLICY_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTINUE_AS_NEW_WORKFLOW_EXECUTION_RATE_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                            new \PHPStan\Type\Constant\ConstantStringType('childPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REQUEST_CANCEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('ABANDON'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CHILD_POLICY_APPLIED'),
                                new \PHPStan\Type\Constant\ConstantStringType('EVENT_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATOR_INITIATED'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('externalWorkflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('externalInitiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantStringType('CHILD_POLICY_APPLIED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('taskList'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskPriority'),
                            new \PHPStan\Type\Constant\ConstantStringType('startToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduleToStartTimeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('identity'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('executionContext'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskList'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskListScheduleToStartTimeout'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timeoutType'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('START_TO_CLOSE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCHEDULE_TO_START'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('activityType'),
                            new \PHPStan\Type\Constant\ConstantStringType('activityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('control'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduleToStartTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduleToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('startToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskList'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskPriority'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('heartbeatTimeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('identity'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('result'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timeoutType'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('START_TO_CLOSE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCHEDULE_TO_START'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCHEDULE_TO_CLOSE'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEARTBEAT'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('latestCancelRequestedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('activityId'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('signalName'),
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('externalWorkflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('externalInitiatedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('markerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('markerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('control'),
                            new \PHPStan\Type\Constant\ConstantStringType('startToFireTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('control'),
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionStartToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskList'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskPriority'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('childPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskStartToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('tagList'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaRole'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REQUEST_CANCEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('ABANDON'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('result'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeoutType'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('START_TO_CLOSE'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                            new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            new \PHPStan\Type\Constant\ConstantStringType('signalName'),
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('control'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                            new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('control'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN_EXTERNAL_WORKFLOW_EXECUTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('SIGNAL_EXTERNAL_WORKFLOW_EXECUTION_RATE_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                            new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('control'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                            new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('control'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN_EXTERNAL_WORKFLOW_EXECUTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('REQUEST_CANCEL_EXTERNAL_WORKFLOW_EXECUTION_RATE_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('activityType'),
                            new \PHPStan\Type\Constant\ConstantStringType('activityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVITY_TYPE_DEPRECATED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVITY_TYPE_DOES_NOT_EXIST'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVITY_ID_ALREADY_IN_USE'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPEN_ACTIVITIES_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVITY_CREATION_RATE_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_SCHEDULE_TO_CLOSE_TIMEOUT_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_TASK_LIST_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_SCHEDULE_TO_START_TIMEOUT_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_START_TO_CLOSE_TIMEOUT_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_HEARTBEAT_TIMEOUT_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('activityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVITY_ID_UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TIMER_ID_ALREADY_IN_USE'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPEN_TIMERS_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIMER_CREATION_RATE_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TIMER_ID_UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('control'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_TYPE_DOES_NOT_EXIST'),
                                new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_TYPE_DEPRECATED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPEN_CHILDREN_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPEN_WORKFLOWS_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CHILD_CREATION_RATE_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_ALREADY_RUNNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_EXECUTION_START_TO_CLOSE_TIMEOUT_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_TASK_LIST_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_TASK_START_TO_CLOSE_TIMEOUT_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_CHILD_POLICY_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('control'),
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('startToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('result'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeoutType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantStringType('START_TO_CLOSE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ID_ALREADY_IN_USE'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPEN_LAMBDA_FUNCTIONS_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_FUNCTION_CREATION_RATE_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_SERVICE_NOT_AVAILABLE_IN_REGION'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSUME_ROLE_FAILED'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listActivityTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('typeInfos'),
                new \PHPStan\Type\Constant\ConstantStringType('nextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('activityType'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('deprecationDate'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGISTERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
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
    private function listClosedWorkflowExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('executionInfos'),
                new \PHPStan\Type\Constant\ConstantStringType('nextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('execution'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('closeTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('closeStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('parent'),
                        new \PHPStan\Type\Constant\ConstantStringType('tagList'),
                        new \PHPStan\Type\Constant\ConstantStringType('cancelRequested'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                            new \PHPStan\Type\Constant\ConstantStringType('runId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTINUED_AS_NEW'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                            new \PHPStan\Type\Constant\ConstantStringType('runId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDomains(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainInfos'),
                new \PHPStan\Type\Constant\ConstantStringType('nextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGISTERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOpenWorkflowExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('executionInfos'),
                new \PHPStan\Type\Constant\ConstantStringType('nextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('execution'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('closeTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('closeStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('parent'),
                        new \PHPStan\Type\Constant\ConstantStringType('tagList'),
                        new \PHPStan\Type\Constant\ConstantStringType('cancelRequested'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                            new \PHPStan\Type\Constant\ConstantStringType('runId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOSED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTINUED_AS_NEW'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                            new \PHPStan\Type\Constant\ConstantStringType('runId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listWorkflowTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('typeInfos'),
                new \PHPStan\Type\Constant\ConstantStringType('nextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('deprecationDate'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGISTERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
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
    private function pollForActivityTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskToken'),
                new \PHPStan\Type\Constant\ConstantStringType('activityId'),
                new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowExecution'),
                new \PHPStan\Type\Constant\ConstantStringType('activityType'),
                new \PHPStan\Type\Constant\ConstantStringType('input'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                    new \PHPStan\Type\Constant\ConstantStringType('runId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function pollForDecisionTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskToken'),
                new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowExecution'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                new \PHPStan\Type\Constant\ConstantStringType('events'),
                new \PHPStan\Type\Constant\ConstantStringType('nextPageToken'),
                new \PHPStan\Type\Constant\ConstantStringType('previousStartedEventId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                    new \PHPStan\Type\Constant\ConstantStringType('runId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventId'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionStartedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionCompletedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('completeWorkflowExecutionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('failWorkflowExecutionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionTimedOutEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionCanceledEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('cancelWorkflowExecutionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionContinuedAsNewEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('continueAsNewWorkflowExecutionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionTerminatedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionCancelRequestedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('decisionTaskScheduledEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('decisionTaskStartedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('decisionTaskTimedOutEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('activityTaskScheduledEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('activityTaskStartedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('activityTaskCompletedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('activityTaskFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('activityTaskTimedOutEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('activityTaskCanceledEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('activityTaskCancelRequestedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionSignaledEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('markerRecordedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('recordMarkerFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('timerStartedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('timerFiredEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('timerCanceledEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('startChildWorkflowExecutionInitiatedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('childWorkflowExecutionStartedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('childWorkflowExecutionCompletedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('childWorkflowExecutionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('childWorkflowExecutionTimedOutEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('childWorkflowExecutionCanceledEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('childWorkflowExecutionTerminatedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('signalExternalWorkflowExecutionInitiatedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalWorkflowExecutionSignaledEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('signalExternalWorkflowExecutionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalWorkflowExecutionCancelRequestedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('requestCancelExternalWorkflowExecutionInitiatedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('requestCancelExternalWorkflowExecutionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('scheduleActivityTaskFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('requestCancelActivityTaskFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTimerFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('cancelTimerFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('startChildWorkflowExecutionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionScheduledEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionStartedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionCompletedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionTimedOutEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('scheduleLambdaFunctionFailedEventAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('startLambdaFunctionFailedEventAttributes'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowExecutionStarted'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowExecutionCancelRequested'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowExecutionCompleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('CompleteWorkflowExecutionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowExecutionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailWorkflowExecutionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowExecutionTimedOut'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowExecutionCanceled'),
                            new \PHPStan\Type\Constant\ConstantStringType('CancelWorkflowExecutionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowExecutionContinuedAsNew'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContinueAsNewWorkflowExecutionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowExecutionTerminated'),
                            new \PHPStan\Type\Constant\ConstantStringType('DecisionTaskScheduled'),
                            new \PHPStan\Type\Constant\ConstantStringType('DecisionTaskStarted'),
                            new \PHPStan\Type\Constant\ConstantStringType('DecisionTaskCompleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('DecisionTaskTimedOut'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActivityTaskScheduled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScheduleActivityTaskFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActivityTaskStarted'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActivityTaskCompleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActivityTaskFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActivityTaskTimedOut'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActivityTaskCanceled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActivityTaskCancelRequested'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestCancelActivityTaskFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('WorkflowExecutionSignaled'),
                            new \PHPStan\Type\Constant\ConstantStringType('MarkerRecorded'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecordMarkerFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimerStarted'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartTimerFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimerFired'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimerCanceled'),
                            new \PHPStan\Type\Constant\ConstantStringType('CancelTimerFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartChildWorkflowExecutionInitiated'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartChildWorkflowExecutionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChildWorkflowExecutionStarted'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChildWorkflowExecutionCompleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChildWorkflowExecutionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChildWorkflowExecutionTimedOut'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChildWorkflowExecutionCanceled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChildWorkflowExecutionTerminated'),
                            new \PHPStan\Type\Constant\ConstantStringType('SignalExternalWorkflowExecutionInitiated'),
                            new \PHPStan\Type\Constant\ConstantStringType('SignalExternalWorkflowExecutionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExternalWorkflowExecutionSignaled'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestCancelExternalWorkflowExecutionInitiated'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestCancelExternalWorkflowExecutionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExternalWorkflowExecutionCancelRequested'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionScheduled'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionStarted'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionCompleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionTimedOut'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScheduleLambdaFunctionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartLambdaFunctionFailed'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionStartToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskStartToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('childPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskList'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskPriority'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('tagList'),
                            new \PHPStan\Type\Constant\ConstantStringType('continuedExecutionRunId'),
                            new \PHPStan\Type\Constant\ConstantStringType('parentWorkflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('parentInitiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaRole'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REQUEST_CANCEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('ABANDON'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('result'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNHANDLED_DECISION'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNHANDLED_DECISION'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timeoutType'),
                            new \PHPStan\Type\Constant\ConstantStringType('childPolicy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('START_TO_CLOSE'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REQUEST_CANCEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('ABANDON'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNHANDLED_DECISION'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('newExecutionRunId'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionStartToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskList'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskPriority'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskStartToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('childPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('tagList'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaRole'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REQUEST_CANCEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('ABANDON'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNHANDLED_DECISION'),
                                new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_TYPE_DEPRECATED'),
                                new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_TYPE_DOES_NOT_EXIST'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_EXECUTION_START_TO_CLOSE_TIMEOUT_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_TASK_START_TO_CLOSE_TIMEOUT_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_TASK_LIST_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_CHILD_POLICY_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTINUE_AS_NEW_WORKFLOW_EXECUTION_RATE_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                            new \PHPStan\Type\Constant\ConstantStringType('childPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REQUEST_CANCEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('ABANDON'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CHILD_POLICY_APPLIED'),
                                new \PHPStan\Type\Constant\ConstantStringType('EVENT_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATOR_INITIATED'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('externalWorkflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('externalInitiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantStringType('CHILD_POLICY_APPLIED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('taskList'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskPriority'),
                            new \PHPStan\Type\Constant\ConstantStringType('startToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduleToStartTimeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('identity'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('executionContext'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskList'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskListScheduleToStartTimeout'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timeoutType'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('START_TO_CLOSE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCHEDULE_TO_START'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('activityType'),
                            new \PHPStan\Type\Constant\ConstantStringType('activityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('control'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduleToStartTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduleToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('startToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskList'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskPriority'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('heartbeatTimeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('identity'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('result'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timeoutType'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('START_TO_CLOSE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCHEDULE_TO_START'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCHEDULE_TO_CLOSE'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEARTBEAT'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('latestCancelRequestedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('activityId'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('signalName'),
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('externalWorkflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('externalInitiatedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('markerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('markerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('control'),
                            new \PHPStan\Type\Constant\ConstantStringType('startToFireTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('control'),
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionStartToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskList'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskPriority'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('childPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskStartToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('tagList'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaRole'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REQUEST_CANCEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('ABANDON'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('result'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeoutType'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('START_TO_CLOSE'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                            new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            new \PHPStan\Type\Constant\ConstantStringType('signalName'),
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('control'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                            new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('control'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN_EXTERNAL_WORKFLOW_EXECUTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('SIGNAL_EXTERNAL_WORKFLOW_EXECUTION_RATE_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowExecution'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                            new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('control'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                            new \PHPStan\Type\Constant\ConstantStringType('runId'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('control'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN_EXTERNAL_WORKFLOW_EXECUTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('REQUEST_CANCEL_EXTERNAL_WORKFLOW_EXECUTION_RATE_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('activityType'),
                            new \PHPStan\Type\Constant\ConstantStringType('activityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVITY_TYPE_DEPRECATED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVITY_TYPE_DOES_NOT_EXIST'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVITY_ID_ALREADY_IN_USE'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPEN_ACTIVITIES_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVITY_CREATION_RATE_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_SCHEDULE_TO_CLOSE_TIMEOUT_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_TASK_LIST_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_SCHEDULE_TO_START_TIMEOUT_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_START_TO_CLOSE_TIMEOUT_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_HEARTBEAT_TIMEOUT_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('activityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVITY_ID_UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TIMER_ID_ALREADY_IN_USE'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPEN_TIMERS_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIMER_CREATION_RATE_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TIMER_ID_UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('workflowType'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('workflowId'),
                            new \PHPStan\Type\Constant\ConstantStringType('initiatedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('control'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_TYPE_DOES_NOT_EXIST'),
                                new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_TYPE_DEPRECATED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPEN_CHILDREN_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPEN_WORKFLOWS_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CHILD_CREATION_RATE_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_ALREADY_RUNNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_EXECUTION_START_TO_CLOSE_TIMEOUT_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_TASK_LIST_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_TASK_START_TO_CLOSE_TIMEOUT_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_CHILD_POLICY_UNDEFINED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPERATION_NOT_PERMITTED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('control'),
                            new \PHPStan\Type\Constant\ConstantStringType('input'),
                            new \PHPStan\Type\Constant\ConstantStringType('startToCloseTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('result'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('startedEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeoutType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantStringType('START_TO_CLOSE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('decisionTaskCompletedEventId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ID_ALREADY_IN_USE'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPEN_LAMBDA_FUNCTIONS_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_FUNCTION_CREATION_RATE_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_SERVICE_NOT_AVAILABLE_IN_REGION'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSUME_ROLE_FAILED'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function recordActivityTaskHeartbeat(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cancelRequested'),
            ], [
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function registerActivityType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function registerDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function registerWorkflowType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function requestCancelWorkflowExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function respondActivityTaskCanceled(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function respondActivityTaskCompleted(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function respondActivityTaskFailed(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function respondDecisionTaskCompleted(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function signalWorkflowExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startWorkflowExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('runId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function terminateWorkflowExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function undeprecateActivityType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function undeprecateDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function undeprecateWorkflowType(): ?\PHPStan\Type\Type
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
}