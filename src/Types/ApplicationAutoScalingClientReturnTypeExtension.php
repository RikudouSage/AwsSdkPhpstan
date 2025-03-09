<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ApplicationAutoScalingClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ApplicationAutoScaling\ApplicationAutoScalingClient>
     */
    public function getClass(): string
    {
        return \Aws\ApplicationAutoScaling\ApplicationAutoScalingClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'deleteScalingPolicy',
            'deleteScheduledAction',
            'deregisterScalableTarget',
            'describeScalableTargets',
            'describeScalingActivities',
            'describeScalingPolicies',
            'describeScheduledActions',
            'getPredictiveScalingForecast',
            'listTagsForResource',
            'putScalingPolicy',
            'putScheduledAction',
            'registerScalableTarget',
            'tagResource',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'deleteScalingPolicy' => $this->deleteScalingPolicy(),
            'deleteScheduledAction' => $this->deleteScheduledAction(),
            'deregisterScalableTarget' => $this->deregisterScalableTarget(),
            'describeScalableTargets' => $this->describeScalableTargets(),
            'describeScalingActivities' => $this->describeScalingActivities(),
            'describeScalingPolicies' => $this->describeScalingPolicies(),
            'describeScheduledActions' => $this->describeScheduledActions(),
            'getPredictiveScalingForecast' => $this->getPredictiveScalingForecast(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putScalingPolicy' => $this->putScalingPolicy(),
            'putScheduledAction' => $this->putScheduledAction(),
            'registerScalableTarget' => $this->registerScalableTarget(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function deleteScalingPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteScheduledAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterScalableTarget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeScalableTargets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScalableTargets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceNamespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScalableDimension'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('PredictedCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SuspendedState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScalableTargetARN'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticmapreduce'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2'),
                        new \PHPStan\Type\Constant\ConstantStringType('appstream'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb'),
                        new \PHPStan\Type\Constant\ConstantStringType('rds'),
                        new \PHPStan\Type\Constant\ConstantStringType('sagemaker'),
                        new \PHPStan\Type\Constant\ConstantStringType('custom-resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('comprehend'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('cassandra'),
                        new \PHPStan\Type\Constant\ConstantStringType('kafka'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticache'),
                        new \PHPStan\Type\Constant\ConstantStringType('neptune'),
                        new \PHPStan\Type\Constant\ConstantStringType('workspaces'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ecs:service:DesiredCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2:spot-fleet-request:TargetCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticmapreduce:instancegroup:InstanceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('appstream:fleet:DesiredCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:table:ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:table:WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:index:ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:index:WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('rds:cluster:ReadReplicaCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('sagemaker:variant:DesiredInstanceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('custom-resource:ResourceType:Property'),
                        new \PHPStan\Type\Constant\ConstantStringType('comprehend:document-classifier-endpoint:DesiredInferenceUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('comprehend:entity-recognizer-endpoint:DesiredInferenceUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda:function:ProvisionedConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('cassandra:table:ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('cassandra:table:WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('kafka:broker-storage:VolumeSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticache:replication-group:NodeGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticache:replication-group:Replicas'),
                        new \PHPStan\Type\Constant\ConstantStringType('neptune:cluster:ReadReplicaCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('sagemaker:variant:DesiredProvisionedConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('sagemaker:inference-component:DesiredCopyCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('workspaces:workspacespool:DesiredUserSessions'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DynamicScalingInSuspended'),
                        new \PHPStan\Type\Constant\ConstantStringType('DynamicScalingOutSuspended'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduledScalingSuspended'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeScalingActivities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScalingActivities'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActivityId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceNamespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScalableDimension'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cause'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Details'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotScaledReasons'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticmapreduce'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2'),
                        new \PHPStan\Type\Constant\ConstantStringType('appstream'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb'),
                        new \PHPStan\Type\Constant\ConstantStringType('rds'),
                        new \PHPStan\Type\Constant\ConstantStringType('sagemaker'),
                        new \PHPStan\Type\Constant\ConstantStringType('custom-resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('comprehend'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('cassandra'),
                        new \PHPStan\Type\Constant\ConstantStringType('kafka'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticache'),
                        new \PHPStan\Type\Constant\ConstantStringType('neptune'),
                        new \PHPStan\Type\Constant\ConstantStringType('workspaces'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ecs:service:DesiredCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2:spot-fleet-request:TargetCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticmapreduce:instancegroup:InstanceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('appstream:fleet:DesiredCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:table:ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:table:WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:index:ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:index:WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('rds:cluster:ReadReplicaCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('sagemaker:variant:DesiredInstanceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('custom-resource:ResourceType:Property'),
                        new \PHPStan\Type\Constant\ConstantStringType('comprehend:document-classifier-endpoint:DesiredInferenceUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('comprehend:entity-recognizer-endpoint:DesiredInferenceUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda:function:ProvisionedConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('cassandra:table:ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('cassandra:table:WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('kafka:broker-storage:VolumeSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticache:replication-group:NodeGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticache:replication-group:Replicas'),
                        new \PHPStan\Type\Constant\ConstantStringType('neptune:cluster:ReadReplicaCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('sagemaker:variant:DesiredProvisionedConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('sagemaker:inference-component:DesiredCopyCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('workspaces:workspacespool:DesiredUserSessions'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                        new \PHPStan\Type\Constant\ConstantStringType('Overridden'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unfulfilled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentCapacity'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeScalingPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicies'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceNamespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScalableDimension'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                    new \PHPStan\Type\Constant\ConstantStringType('StepScalingPolicyConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScalingPolicyConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PredictiveScalingPolicyConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticmapreduce'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2'),
                        new \PHPStan\Type\Constant\ConstantStringType('appstream'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb'),
                        new \PHPStan\Type\Constant\ConstantStringType('rds'),
                        new \PHPStan\Type\Constant\ConstantStringType('sagemaker'),
                        new \PHPStan\Type\Constant\ConstantStringType('custom-resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('comprehend'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('cassandra'),
                        new \PHPStan\Type\Constant\ConstantStringType('kafka'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticache'),
                        new \PHPStan\Type\Constant\ConstantStringType('neptune'),
                        new \PHPStan\Type\Constant\ConstantStringType('workspaces'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ecs:service:DesiredCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2:spot-fleet-request:TargetCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticmapreduce:instancegroup:InstanceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('appstream:fleet:DesiredCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:table:ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:table:WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:index:ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:index:WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('rds:cluster:ReadReplicaCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('sagemaker:variant:DesiredInstanceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('custom-resource:ResourceType:Property'),
                        new \PHPStan\Type\Constant\ConstantStringType('comprehend:document-classifier-endpoint:DesiredInferenceUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('comprehend:entity-recognizer-endpoint:DesiredInferenceUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda:function:ProvisionedConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('cassandra:table:ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('cassandra:table:WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('kafka:broker-storage:VolumeSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticache:replication-group:NodeGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticache:replication-group:Replicas'),
                        new \PHPStan\Type\Constant\ConstantStringType('neptune:cluster:ReadReplicaCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('sagemaker:variant:DesiredProvisionedConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('sagemaker:inference-component:DesiredCopyCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('workspaces:workspacespool:DesiredUserSessions'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('StepScaling'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScaling'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredictiveScaling'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AdjustmentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('StepAdjustments'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinAdjustmentMagnitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cooldown'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricAggregationType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ChangeInCapacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('PercentChangeInCapacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExactCapacity'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MetricIntervalLowerBound'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricIntervalUpperBound'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScalingAdjustment'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Average'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredefinedMetricSpecification'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomizedMetricSpecification'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScaleOutCooldown'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScaleInCooldown'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PredefinedMetricType'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceLabel'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DynamoDBReadCapacityUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('DynamoDBWriteCapacityUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALBRequestCountPerTarget'),
                                new \PHPStan\Type\Constant\ConstantStringType('RDSReaderAverageCPUUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('RDSReaderAverageDatabaseConnections'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC2SpotFleetRequestAverageCPUUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC2SpotFleetRequestAverageNetworkIn'),
                                new \PHPStan\Type\Constant\ConstantStringType('EC2SpotFleetRequestAverageNetworkOut'),
                                new \PHPStan\Type\Constant\ConstantStringType('SageMakerVariantInvocationsPerInstance'),
                                new \PHPStan\Type\Constant\ConstantStringType('ECSServiceAverageCPUUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('ECSServiceAverageMemoryUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('AppStreamAverageCapacityUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('ComprehendInferenceUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('LambdaProvisionedConcurrencyUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('CassandraReadCapacityUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('CassandraWriteCapacityUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('KafkaBrokerStorageUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('ElastiCachePrimaryEngineCPUUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('ElastiCacheReplicaEngineCPUUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('ElastiCacheDatabaseMemoryUsageCountedForEvictPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('NeptuneReaderAverageCPUUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('SageMakerVariantProvisionedConcurrencyUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('ElastiCacheDatabaseCapacityUsageCountedForEvictPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('SageMakerInferenceComponentInvocationsPerCopy'),
                                new \PHPStan\Type\Constant\ConstantStringType('WorkSpacesAverageUserSessionsCapacityUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('SageMakerInferenceComponentConcurrentRequestsPerCopyHighResolution'),
                                new \PHPStan\Type\Constant\ConstantStringType('SageMakerVariantConcurrentRequestsPerModelHighResolution'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                            new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Average'),
                                new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                                new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                                new \PHPStan\Type\Constant\ConstantStringType('SampleCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MetricSpecifications'),
                        new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                        new \PHPStan\Type\Constant\ConstantStringType('SchedulingBufferTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCapacityBreachBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCapacityBuffer'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('PredefinedMetricPairSpecification'),
                            new \PHPStan\Type\Constant\ConstantStringType('PredefinedScalingMetricSpecification'),
                            new \PHPStan\Type\Constant\ConstantStringType('PredefinedLoadMetricSpecification'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomizedScalingMetricSpecification'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomizedLoadMetricSpecification'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomizedCapacityMetricSpecification'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PredefinedMetricType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceLabel'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PredefinedMetricType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceLabel'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PredefinedMetricType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceLabel'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetricDataQueries'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetricDataQueries'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetricDataQueries'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ForecastOnly'),
                            new \PHPStan\Type\Constant\ConstantStringType('ForecastAndScale'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HonorMaxCapacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncreaseMaxCapacity'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmARN'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeScheduledActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScheduledActions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduledActionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduledActionARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceNamespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('Schedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timezone'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScalableDimension'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScalableTargetAction'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticmapreduce'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2'),
                        new \PHPStan\Type\Constant\ConstantStringType('appstream'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb'),
                        new \PHPStan\Type\Constant\ConstantStringType('rds'),
                        new \PHPStan\Type\Constant\ConstantStringType('sagemaker'),
                        new \PHPStan\Type\Constant\ConstantStringType('custom-resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('comprehend'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('cassandra'),
                        new \PHPStan\Type\Constant\ConstantStringType('kafka'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticache'),
                        new \PHPStan\Type\Constant\ConstantStringType('neptune'),
                        new \PHPStan\Type\Constant\ConstantStringType('workspaces'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ecs:service:DesiredCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2:spot-fleet-request:TargetCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticmapreduce:instancegroup:InstanceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('appstream:fleet:DesiredCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:table:ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:table:WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:index:ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:index:WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('rds:cluster:ReadReplicaCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('sagemaker:variant:DesiredInstanceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('custom-resource:ResourceType:Property'),
                        new \PHPStan\Type\Constant\ConstantStringType('comprehend:document-classifier-endpoint:DesiredInferenceUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('comprehend:entity-recognizer-endpoint:DesiredInferenceUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda:function:ProvisionedConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('cassandra:table:ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('cassandra:table:WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('kafka:broker-storage:VolumeSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticache:replication-group:NodeGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticache:replication-group:Replicas'),
                        new \PHPStan\Type\Constant\ConstantStringType('neptune:cluster:ReadReplicaCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('sagemaker:variant:DesiredProvisionedConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('sagemaker:inference-component:DesiredCopyCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('workspaces:workspacespool:DesiredUserSessions'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MinCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCapacity'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPredictiveScalingForecast(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoadForecast'),
                new \PHPStan\Type\Constant\ConstantStringType('CapacityForecast'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamps'),
                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricSpecification'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ObjectType('DateTimeInterface')),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredefinedMetricPairSpecification'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredefinedScalingMetricSpecification'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredefinedLoadMetricSpecification'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomizedScalingMetricSpecification'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomizedLoadMetricSpecification'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomizedCapacityMetricSpecification'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PredefinedMetricType'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceLabel'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PredefinedMetricType'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceLabel'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PredefinedMetricType'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceLabel'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MetricDataQueries'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MetricDataQueries'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MetricDataQueries'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamps'),
                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ObjectType('DateTimeInterface')),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function putScalingPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyARN'),
                new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AlarmName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlarmARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function putScheduledAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function registerScalableTarget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScalableTargetARN'),
            ], [
                new \PHPStan\Type\StringType(),
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
}