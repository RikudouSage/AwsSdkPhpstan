<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class AutoScalingPlansClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\AutoScalingPlans\AutoScalingPlansClient>
     */
    public function getClass(): string
    {
        return \Aws\AutoScalingPlans\AutoScalingPlansClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createScalingPlan',
            'deleteScalingPlan',
            'describeScalingPlanResources',
            'describeScalingPlans',
            'getScalingPlanResourceForecastData',
            'updateScalingPlan',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createScalingPlan' => $this->createScalingPlan(),
            'deleteScalingPlan' => $this->deleteScalingPlan(),
            'describeScalingPlanResources' => $this->describeScalingPlanResources(),
            'describeScalingPlans' => $this->describeScalingPlans(),
            'getScalingPlanResourceForecastData' => $this->getScalingPlanResourceForecastData(),
            'updateScalingPlan' => $this->updateScalingPlan(),
        };
    }
    private function createScalingPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScalingPlanVersion'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function deleteScalingPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeScalingPlanResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScalingPlanResources'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ScalingPlanName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScalingPlanVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceNamespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScalableDimension'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicies'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScalingStatusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScalingStatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('autoscaling'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecs'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2'),
                        new \PHPStan\Type\Constant\ConstantStringType('rds'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('autoscaling:autoScalingGroup:DesiredCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecs:service:DesiredCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2:spot-fleet-request:TargetCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('rds:cluster:ReadReplicaCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:table:ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:table:WriteCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:index:ReadCapacityUnits'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamodb:index:WriteCapacityUnits'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScaling'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PredefinedScalingMetricSpecification'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomizedScalingMetricSpecification'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScaleOutCooldown'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScaleInCooldown'),
                            new \PHPStan\Type\Constant\ConstantStringType('EstimatedInstanceWarmup'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PredefinedScalingMetricType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceLabel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ASGAverageCPUUtilization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ASGAverageNetworkIn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ASGAverageNetworkOut'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DynamoDBReadCapacityUtilization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DynamoDBWriteCapacityUtilization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECSServiceAverageCPUUtilization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECSServiceAverageMemoryUtilization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALBRequestCountPerTarget'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RDSReaderAverageCPUUtilization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RDSReaderAverageDatabaseConnections'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EC2SpotFleetRequestAverageCPUUtilization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EC2SpotFleetRequestAverageNetworkIn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EC2SpotFleetRequestAverageNetworkOut'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Average'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SampleCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                        new \PHPStan\Type\Constant\ConstantStringType('PartiallyActive'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeScalingPlans(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScalingPlans'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ScalingPlanName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScalingPlanVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScalingInstructions'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudFormationStackARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagFilters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceNamespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScalableDimension'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredefinedLoadMetricSpecification'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomizedLoadMetricSpecification'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduledActionBufferTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredictiveScalingMaxCapacityBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredictiveScalingMaxCapacityBuffer'),
                        new \PHPStan\Type\Constant\ConstantStringType('PredictiveScalingMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicyUpdateBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisableDynamicScaling'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('autoscaling'),
                            new \PHPStan\Type\Constant\ConstantStringType('ecs'),
                            new \PHPStan\Type\Constant\ConstantStringType('ec2'),
                            new \PHPStan\Type\Constant\ConstantStringType('rds'),
                            new \PHPStan\Type\Constant\ConstantStringType('dynamodb'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('autoscaling:autoScalingGroup:DesiredCapacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('ecs:service:DesiredCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('ec2:spot-fleet-request:TargetCapacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('rds:cluster:ReadReplicaCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('dynamodb:table:ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('dynamodb:table:WriteCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('dynamodb:index:ReadCapacityUnits'),
                            new \PHPStan\Type\Constant\ConstantStringType('dynamodb:index:WriteCapacityUnits'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PredefinedScalingMetricSpecification'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomizedScalingMetricSpecification'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScaleOutCooldown'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScaleInCooldown'),
                            new \PHPStan\Type\Constant\ConstantStringType('EstimatedInstanceWarmup'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PredefinedScalingMetricType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceLabel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ASGAverageCPUUtilization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ASGAverageNetworkIn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ASGAverageNetworkOut'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DynamoDBReadCapacityUtilization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DynamoDBWriteCapacityUtilization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECSServiceAverageCPUUtilization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ECSServiceAverageMemoryUtilization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALBRequestCountPerTarget'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RDSReaderAverageCPUUtilization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RDSReaderAverageDatabaseConnections'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EC2SpotFleetRequestAverageCPUUtilization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EC2SpotFleetRequestAverageNetworkIn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EC2SpotFleetRequestAverageNetworkOut'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Average'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SampleCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PredefinedLoadMetricType'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceLabel'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ASGTotalCPUUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('ASGTotalNetworkIn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ASGTotalNetworkOut'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALBTargetGroupRequestCount'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                            new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Average'),
                                new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                                new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                                new \PHPStan\Type\Constant\ConstantStringType('SampleCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SetForecastCapacityToMaxCapacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('SetMaxCapacityToForecastCapacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('SetMaxCapacityAboveForecastCapacity'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ForecastAndScale'),
                            new \PHPStan\Type\Constant\ConstantStringType('ForecastOnly'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeepExternalPolicies'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplaceExternalPolicies'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveWithProblems'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeletionInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeletionFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateFailed'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getScalingPlanResourceForecastData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Datapoints'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
    private function updateScalingPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}