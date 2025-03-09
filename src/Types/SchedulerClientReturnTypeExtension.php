<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SchedulerClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Scheduler\SchedulerClient>
     */
    public function getClass(): string
    {
        return \Aws\Scheduler\SchedulerClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createSchedule',
            'createScheduleGroup',
            'deleteSchedule',
            'deleteScheduleGroup',
            'getSchedule',
            'getScheduleGroup',
            'listScheduleGroups',
            'listSchedules',
            'listTagsForResource',
            'tagResource',
            'untagResource',
            'updateSchedule',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createSchedule' => $this->createSchedule(),
            'createScheduleGroup' => $this->createScheduleGroup(),
            'deleteSchedule' => $this->deleteSchedule(),
            'deleteScheduleGroup' => $this->deleteScheduleGroup(),
            'getSchedule' => $this->getSchedule(),
            'getScheduleGroup' => $this->getScheduleGroup(),
            'listScheduleGroups' => $this->listScheduleGroups(),
            'listSchedules' => $this->listSchedules(),
            'listTagsForResource' => $this->listTagsForResource(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateSchedule' => $this->updateSchedule(),
        };
    }
    private function createSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScheduleArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createScheduleGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScheduleGroupArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteScheduleGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ActionAfterCompletion'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EndDate'),
                new \PHPStan\Type\Constant\ConstantStringType('FlexibleTimeWindow'),
                new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModificationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpressionTimezone'),
                new \PHPStan\Type\Constant\ConstantStringType('StartDate'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('Target'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MaximumWindowInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLEXIBLE'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeadLetterConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('EcsParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventBridgeParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('Input'),
                    new \PHPStan\Type\Constant\ConstantStringType('KinesisParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetryPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SageMakerPipelineParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('SqsParameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityProviderStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnableECSManagedTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnableExecuteCommand'),
                        new \PHPStan\Type\Constant\ConstantStringType('Group'),
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlacementConstraints'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlacementStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('PropagateTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReferenceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaskCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaskDefinitionArn'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('base'),
                                new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                                new \PHPStan\Type\Constant\ConstantStringType('weight'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AssignPublicIp'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('distinctInstance'),
                                    new \PHPStan\Type\Constant\ConstantStringType('memberOf'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('field'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('random'),
                                    new \PHPStan\Type\Constant\ConstantStringType('spread'),
                                    new \PHPStan\Type\Constant\ConstantStringType('binpack'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('TASK_DEFINITION'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DetailType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PartitionKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumEventAgeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumRetryAttempts'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PipelineParameterList'),
                    ], [
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
                        new \PHPStan\Type\Constant\ConstantStringType('MessageGroupId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getScheduleGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModificationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
            ]),
        ]);
    }
    private function listScheduleGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduleGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listSchedules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Schedules'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('GroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Target'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
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
    private function updateSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScheduleArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}