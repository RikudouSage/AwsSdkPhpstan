<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class AutoScalingClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\AutoScaling\AutoScalingClient>
     */
    public function getClass(): string
    {
        return \Aws\AutoScaling\AutoScalingClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'attachInstances',
            'attachLoadBalancerTargetGroups',
            'attachLoadBalancers',
            'attachTrafficSources',
            'batchDeleteScheduledAction',
            'batchPutScheduledUpdateGroupAction',
            'cancelInstanceRefresh',
            'completeLifecycleAction',
            'createAutoScalingGroup',
            'createLaunchConfiguration',
            'createOrUpdateTags',
            'deleteAutoScalingGroup',
            'deleteLaunchConfiguration',
            'deleteLifecycleHook',
            'deleteNotificationConfiguration',
            'deletePolicy',
            'deleteScheduledAction',
            'deleteTags',
            'deleteWarmPool',
            'describeAccountLimits',
            'describeAdjustmentTypes',
            'describeAutoScalingGroups',
            'describeAutoScalingInstances',
            'describeAutoScalingNotificationTypes',
            'describeInstanceRefreshes',
            'describeLaunchConfigurations',
            'describeLifecycleHookTypes',
            'describeLifecycleHooks',
            'describeLoadBalancerTargetGroups',
            'describeLoadBalancers',
            'describeMetricCollectionTypes',
            'describeNotificationConfigurations',
            'describePolicies',
            'describeScalingActivities',
            'describeScalingProcessTypes',
            'describeScheduledActions',
            'describeTags',
            'describeTerminationPolicyTypes',
            'describeTrafficSources',
            'describeWarmPool',
            'detachInstances',
            'detachLoadBalancerTargetGroups',
            'detachLoadBalancers',
            'detachTrafficSources',
            'disableMetricsCollection',
            'enableMetricsCollection',
            'enterStandby',
            'executePolicy',
            'exitStandby',
            'getPredictiveScalingForecast',
            'putLifecycleHook',
            'putNotificationConfiguration',
            'putScalingPolicy',
            'putScheduledUpdateGroupAction',
            'putWarmPool',
            'recordLifecycleActionHeartbeat',
            'resumeProcesses',
            'rollbackInstanceRefresh',
            'setDesiredCapacity',
            'setInstanceHealth',
            'setInstanceProtection',
            'startInstanceRefresh',
            'suspendProcesses',
            'terminateInstanceInAutoScalingGroup',
            'updateAutoScalingGroup',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'attachInstances' => $this->attachInstances(),
            'attachLoadBalancerTargetGroups' => $this->attachLoadBalancerTargetGroups(),
            'attachLoadBalancers' => $this->attachLoadBalancers(),
            'attachTrafficSources' => $this->attachTrafficSources(),
            'batchDeleteScheduledAction' => $this->batchDeleteScheduledAction(),
            'batchPutScheduledUpdateGroupAction' => $this->batchPutScheduledUpdateGroupAction(),
            'cancelInstanceRefresh' => $this->cancelInstanceRefresh(),
            'completeLifecycleAction' => $this->completeLifecycleAction(),
            'createAutoScalingGroup' => $this->createAutoScalingGroup(),
            'createLaunchConfiguration' => $this->createLaunchConfiguration(),
            'createOrUpdateTags' => $this->createOrUpdateTags(),
            'deleteAutoScalingGroup' => $this->deleteAutoScalingGroup(),
            'deleteLaunchConfiguration' => $this->deleteLaunchConfiguration(),
            'deleteLifecycleHook' => $this->deleteLifecycleHook(),
            'deleteNotificationConfiguration' => $this->deleteNotificationConfiguration(),
            'deletePolicy' => $this->deletePolicy(),
            'deleteScheduledAction' => $this->deleteScheduledAction(),
            'deleteTags' => $this->deleteTags(),
            'deleteWarmPool' => $this->deleteWarmPool(),
            'describeAccountLimits' => $this->describeAccountLimits(),
            'describeAdjustmentTypes' => $this->describeAdjustmentTypes(),
            'describeAutoScalingGroups' => $this->describeAutoScalingGroups(),
            'describeAutoScalingInstances' => $this->describeAutoScalingInstances(),
            'describeAutoScalingNotificationTypes' => $this->describeAutoScalingNotificationTypes(),
            'describeInstanceRefreshes' => $this->describeInstanceRefreshes(),
            'describeLaunchConfigurations' => $this->describeLaunchConfigurations(),
            'describeLifecycleHookTypes' => $this->describeLifecycleHookTypes(),
            'describeLifecycleHooks' => $this->describeLifecycleHooks(),
            'describeLoadBalancerTargetGroups' => $this->describeLoadBalancerTargetGroups(),
            'describeLoadBalancers' => $this->describeLoadBalancers(),
            'describeMetricCollectionTypes' => $this->describeMetricCollectionTypes(),
            'describeNotificationConfigurations' => $this->describeNotificationConfigurations(),
            'describePolicies' => $this->describePolicies(),
            'describeScalingActivities' => $this->describeScalingActivities(),
            'describeScalingProcessTypes' => $this->describeScalingProcessTypes(),
            'describeScheduledActions' => $this->describeScheduledActions(),
            'describeTags' => $this->describeTags(),
            'describeTerminationPolicyTypes' => $this->describeTerminationPolicyTypes(),
            'describeTrafficSources' => $this->describeTrafficSources(),
            'describeWarmPool' => $this->describeWarmPool(),
            'detachInstances' => $this->detachInstances(),
            'detachLoadBalancerTargetGroups' => $this->detachLoadBalancerTargetGroups(),
            'detachLoadBalancers' => $this->detachLoadBalancers(),
            'detachTrafficSources' => $this->detachTrafficSources(),
            'disableMetricsCollection' => $this->disableMetricsCollection(),
            'enableMetricsCollection' => $this->enableMetricsCollection(),
            'enterStandby' => $this->enterStandby(),
            'executePolicy' => $this->executePolicy(),
            'exitStandby' => $this->exitStandby(),
            'getPredictiveScalingForecast' => $this->getPredictiveScalingForecast(),
            'putLifecycleHook' => $this->putLifecycleHook(),
            'putNotificationConfiguration' => $this->putNotificationConfiguration(),
            'putScalingPolicy' => $this->putScalingPolicy(),
            'putScheduledUpdateGroupAction' => $this->putScheduledUpdateGroupAction(),
            'putWarmPool' => $this->putWarmPool(),
            'recordLifecycleActionHeartbeat' => $this->recordLifecycleActionHeartbeat(),
            'resumeProcesses' => $this->resumeProcesses(),
            'rollbackInstanceRefresh' => $this->rollbackInstanceRefresh(),
            'setDesiredCapacity' => $this->setDesiredCapacity(),
            'setInstanceHealth' => $this->setInstanceHealth(),
            'setInstanceProtection' => $this->setInstanceProtection(),
            'startInstanceRefresh' => $this->startInstanceRefresh(),
            'suspendProcesses' => $this->suspendProcesses(),
            'terminateInstanceInAutoScalingGroup' => $this->terminateInstanceInAutoScalingGroup(),
            'updateAutoScalingGroup' => $this->updateAutoScalingGroup(),
        };
    }
    private function attachInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function attachLoadBalancerTargetGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function attachLoadBalancers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function attachTrafficSources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function batchDeleteScheduledAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedScheduledActions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduledActionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchPutScheduledUpdateGroupAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedScheduledUpdateGroupActions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduledActionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function cancelInstanceRefresh(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceRefreshId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function completeLifecycleAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createAutoScalingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createLaunchConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createOrUpdateTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAutoScalingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteLaunchConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteLifecycleHook(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteNotificationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deletePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteScheduledAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteWarmPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeAccountLimits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MaxNumberOfAutoScalingGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxNumberOfLaunchConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberOfAutoScalingGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberOfLaunchConfigurations'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function describeAdjustmentTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdjustmentTypes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdjustmentType'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeAutoScalingGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('MixedInstancesPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('PredictedCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultCooldown'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetGroupARNs'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckType'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckGracePeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('Instances'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SuspendedProcesses'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlacementGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('VPCZoneIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnabledMetrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('TerminationPolicies'),
                    new \PHPStan\Type\Constant\ConstantStringType('NewInstancesProtectedFromScaleIn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceLinkedRoleARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxInstanceLifetime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityRebalance'),
                    new \PHPStan\Type\Constant\ConstantStringType('WarmPoolConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('WarmPoolSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('Context'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredCapacityType'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultInstanceWarmup'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceMaintenancePolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneDistribution'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneImpairmentPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityReservationSpecification'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstancesDistribution'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateSpecification'),
                            new \PHPStan\Type\Constant\ConstantStringType('Overrides'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateId'),
                                new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('WeightedCapacity'),
                                new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateSpecification'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceRequirements'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VCpuCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MemoryMiB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CpuManufacturers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MemoryGiBPerVCpu'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ExcludedInstanceTypes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceGenerations'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SpotMaxPricePercentageOverLowestPrice'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaxSpotPriceAsPercentageOfOptimalOnDemandPrice'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OnDemandMaxPricePercentageOverLowestPrice'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BareMetal'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BurstablePerformance'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RequireHibernateSupport'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LocalStorage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LocalStorageTypes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TotalLocalStorageGB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BaselineEbsBandwidthMbps'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AcceleratorTypes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AcceleratorCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AcceleratorManufacturers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AcceleratorNames'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AcceleratorTotalMemoryMiB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NetworkBandwidthGbps'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AllowedInstanceTypes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BaselinePerformanceFactors'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('intel'),
                                        new \PHPStan\Type\Constant\ConstantStringType('amd'),
                                        new \PHPStan\Type\Constant\ConstantStringType('amazon-web-services'),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                    ], [
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('current'),
                                        new \PHPStan\Type\Constant\ConstantStringType('previous'),
                                    ])),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('included'),
                                        new \PHPStan\Type\Constant\ConstantStringType('excluded'),
                                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('included'),
                                        new \PHPStan\Type\Constant\ConstantStringType('excluded'),
                                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('included'),
                                        new \PHPStan\Type\Constant\ConstantStringType('excluded'),
                                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('hdd'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ssd'),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                    ], [
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('gpu'),
                                        new \PHPStan\Type\Constant\ConstantStringType('fpga'),
                                        new \PHPStan\Type\Constant\ConstantStringType('inference'),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('nvidia'),
                                        new \PHPStan\Type\Constant\ConstantStringType('amd'),
                                        new \PHPStan\Type\Constant\ConstantStringType('amazon-web-services'),
                                        new \PHPStan\Type\Constant\ConstantStringType('xilinx'),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('a100'),
                                        new \PHPStan\Type\Constant\ConstantStringType('v100'),
                                        new \PHPStan\Type\Constant\ConstantStringType('k80'),
                                        new \PHPStan\Type\Constant\ConstantStringType('t4'),
                                        new \PHPStan\Type\Constant\ConstantStringType('m60'),
                                        new \PHPStan\Type\Constant\ConstantStringType('radeon-pro-v520'),
                                        new \PHPStan\Type\Constant\ConstantStringType('vu9p'),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                    ], [
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('References'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('InstanceFamily'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandAllocationStrategy'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandBaseCapacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnDemandPercentageAboveBaseCapacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('SpotAllocationStrategy'),
                            new \PHPStan\Type\Constant\ConstantStringType('SpotInstancePools'),
                            new \PHPStan\Type\Constant\ConstantStringType('SpotMaxPrice'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('LifecycleState'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchConfigurationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProtectedFromScaleIn'),
                        new \PHPStan\Type\Constant\ConstantStringType('WeightedCapacity'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pending:Wait'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pending:Proceed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Quarantined'),
                            new \PHPStan\Type\Constant\ConstantStringType('InService'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terminating'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terminating:Wait'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terminating:Proceed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terminated'),
                            new \PHPStan\Type\Constant\ConstantStringType('Detaching'),
                            new \PHPStan\Type\Constant\ConstantStringType('Detached'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnteringStandby'),
                            new \PHPStan\Type\Constant\ConstantStringType('Standby'),
                            new \PHPStan\Type\Constant\ConstantStringType('Warmed:Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Warmed:Pending:Wait'),
                            new \PHPStan\Type\Constant\ConstantStringType('Warmed:Pending:Proceed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Warmed:Terminating'),
                            new \PHPStan\Type\Constant\ConstantStringType('Warmed:Terminating:Wait'),
                            new \PHPStan\Type\Constant\ConstantStringType('Warmed:Terminating:Proceed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Warmed:Terminated'),
                            new \PHPStan\Type\Constant\ConstantStringType('Warmed:Stopped'),
                            new \PHPStan\Type\Constant\ConstantStringType('Warmed:Running'),
                            new \PHPStan\Type\Constant\ConstantStringType('Warmed:Hibernated'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProcessName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SuspensionReason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                        new \PHPStan\Type\Constant\ConstantStringType('Granularity'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('PropagateAtLaunch'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxGroupPreparedCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('PoolState'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceReusePolicy'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                            new \PHPStan\Type\Constant\ConstantStringType('Running'),
                            new \PHPStan\Type\Constant\ConstantStringType('Hibernated'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDelete'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReuseOnScaleIn'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MinHealthyPercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxHealthyPercentage'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityDistributionStrategy'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('balanced-only'),
                            new \PHPStan\Type\Constant\ConstantStringType('balanced-best-effort'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ZonalShiftEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImpairedZoneHealthCheckBehavior'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReplaceUnhealthy'),
                            new \PHPStan\Type\Constant\ConstantStringType('IgnoreUnhealthy'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityReservationPreference'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityReservationTarget'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('capacity-reservations-only'),
                            new \PHPStan\Type\Constant\ConstantStringType('capacity-reservations-first'),
                            new \PHPStan\Type\Constant\ConstantStringType('none'),
                            new \PHPStan\Type\Constant\ConstantStringType('default'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityReservationIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('CapacityReservationResourceGroupArns'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAutoScalingInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingInstances'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('LifecycleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectedFromScaleIn'),
                    new \PHPStan\Type\Constant\ConstantStringType('WeightedCapacity'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAutoScalingNotificationTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingNotificationTypes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeInstanceRefreshes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceRefreshes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceRefreshId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentageComplete'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstancesToUpdate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProgressDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('Preferences'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('RollbackDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelling'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('RollbackInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('RollbackFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('RollbackSuccessful'),
                        new \PHPStan\Type\Constant\ConstantStringType('Baking'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LivePoolProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('WarmPoolProgress'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PercentageComplete'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstancesToUpdate'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PercentageComplete'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstancesToUpdate'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MinHealthyPercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceWarmup'),
                        new \PHPStan\Type\Constant\ConstantStringType('CheckpointPercentages'),
                        new \PHPStan\Type\Constant\ConstantStringType('CheckpointDelay'),
                        new \PHPStan\Type\Constant\ConstantStringType('SkipMatching'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoRollback'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScaleInProtectedInstances'),
                        new \PHPStan\Type\Constant\ConstantStringType('StandbyInstances'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmSpecification'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxHealthyPercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('BakeTime'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Refresh'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ignore'),
                            new \PHPStan\Type\Constant\ConstantStringType('Wait'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Terminate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ignore'),
                            new \PHPStan\Type\Constant\ConstantStringType('Wait'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('MixedInstancesPolicy'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplate'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstancesDistribution'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateSpecification'),
                                new \PHPStan\Type\Constant\ConstantStringType('Overrides'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WeightedCapacity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateSpecification'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceRequirements'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('VCpuCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MemoryMiB'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CpuManufacturers'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MemoryGiBPerVCpu'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ExcludedInstanceTypes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InstanceGenerations'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SpotMaxPricePercentageOverLowestPrice'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxSpotPriceAsPercentageOfOptimalOnDemandPrice'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OnDemandMaxPricePercentageOverLowestPrice'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BareMetal'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BurstablePerformance'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RequireHibernateSupport'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LocalStorage'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LocalStorageTypes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TotalLocalStorageGB'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BaselineEbsBandwidthMbps'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AcceleratorTypes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AcceleratorCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AcceleratorManufacturers'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AcceleratorNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AcceleratorTotalMemoryMiB'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkBandwidthGbps'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AllowedInstanceTypes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BaselinePerformanceFactors'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('intel'),
                                            new \PHPStan\Type\Constant\ConstantStringType('amd'),
                                            new \PHPStan\Type\Constant\ConstantStringType('amazon-web-services'),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('current'),
                                            new \PHPStan\Type\Constant\ConstantStringType('previous'),
                                        ])),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('included'),
                                            new \PHPStan\Type\Constant\ConstantStringType('excluded'),
                                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('included'),
                                            new \PHPStan\Type\Constant\ConstantStringType('excluded'),
                                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('included'),
                                            new \PHPStan\Type\Constant\ConstantStringType('excluded'),
                                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('hdd'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ssd'),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('gpu'),
                                            new \PHPStan\Type\Constant\ConstantStringType('fpga'),
                                            new \PHPStan\Type\Constant\ConstantStringType('inference'),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('nvidia'),
                                            new \PHPStan\Type\Constant\ConstantStringType('amd'),
                                            new \PHPStan\Type\Constant\ConstantStringType('amazon-web-services'),
                                            new \PHPStan\Type\Constant\ConstantStringType('xilinx'),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('a100'),
                                            new \PHPStan\Type\Constant\ConstantStringType('v100'),
                                            new \PHPStan\Type\Constant\ConstantStringType('k80'),
                                            new \PHPStan\Type\Constant\ConstantStringType('t4'),
                                            new \PHPStan\Type\Constant\ConstantStringType('m60'),
                                            new \PHPStan\Type\Constant\ConstantStringType('radeon-pro-v520'),
                                            new \PHPStan\Type\Constant\ConstantStringType('vu9p'),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('References'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceFamily'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('OnDemandAllocationStrategy'),
                                new \PHPStan\Type\Constant\ConstantStringType('OnDemandBaseCapacity'),
                                new \PHPStan\Type\Constant\ConstantStringType('OnDemandPercentageAboveBaseCapacity'),
                                new \PHPStan\Type\Constant\ConstantStringType('SpotAllocationStrategy'),
                                new \PHPStan\Type\Constant\ConstantStringType('SpotInstancePools'),
                                new \PHPStan\Type\Constant\ConstantStringType('SpotMaxPrice'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RollbackReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('RollbackStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('PercentageCompleteOnRollback'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstancesToUpdateOnRollback'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgressDetailsOnRollback'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LivePoolProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmPoolProgress'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PercentageComplete'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstancesToUpdate'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PercentageComplete'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstancesToUpdate'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeLaunchConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LaunchConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchConfigurationARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClassicLinkVPCId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClassicLinkVPCSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserData'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('KernelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RamdiskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BlockDeviceMappings'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceMonitoring'),
                    new \PHPStan\Type\Constant\ConstantStringType('SpotPrice'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamInstanceProfile'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EbsOptimized'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociatePublicIpAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlacementTenancy'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetadataOptions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VirtualName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ebs'),
                        new \PHPStan\Type\Constant\ConstantStringType('NoDevice'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SnapshotId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VolumeSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeleteOnTermination'),
                            new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                            new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                            new \PHPStan\Type\Constant\ConstantStringType('Throughput'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HttpTokens'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpPutResponseHopLimit'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpEndpoint'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('optional'),
                            new \PHPStan\Type\Constant\ConstantStringType('required'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeLifecycleHookTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LifecycleHookTypes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeLifecycleHooks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LifecycleHooks'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LifecycleHookName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LifecycleTransition'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationTargetARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('HeartbeatTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultResult'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeLoadBalancerTargetGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerTargetGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerTargetGroupARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeLoadBalancers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoadBalancers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeMetricCollectionTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                new \PHPStan\Type\Constant\ConstantStringType('Granularities'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Granularity'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeNotificationConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NotificationConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TopicARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describePolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScalingPolicies'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdjustmentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinAdjustmentStep'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinAdjustmentMagnitude'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScalingAdjustment'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cooldown'),
                    new \PHPStan\Type\Constant\ConstantStringType('StepAdjustments'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricAggregationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedInstanceWarmup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('PredictiveScalingConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MetricIntervalLowerBound'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricIntervalUpperBound'),
                        new \PHPStan\Type\Constant\ConstantStringType('ScalingAdjustment'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmARN'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PredefinedMetricSpecification'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomizedMetricSpecification'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisableScaleIn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PredefinedMetricType'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceLabel'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ASGAverageCPUUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('ASGAverageNetworkIn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ASGAverageNetworkOut'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALBRequestCountPerTarget'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                            new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            new \PHPStan\Type\Constant\ConstantStringType('Period'),
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
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
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
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
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
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ASGCPUUtilization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ASGNetworkIn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ASGNetworkOut'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALBRequestCount'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PredefinedMetricType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceLabel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ASGAverageCPUUtilization'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ASGAverageNetworkIn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ASGAverageNetworkOut'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALBRequestCountPerTarget'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PredefinedMetricType'),
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
                                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
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
                                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
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
                                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
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
                            new \PHPStan\Type\Constant\ConstantStringType('ForecastAndScale'),
                            new \PHPStan\Type\Constant\ConstantStringType('ForecastOnly'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HonorMaxCapacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncreaseMaxCapacity'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeScalingActivities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Activities'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActivityId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cause'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Progress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Details'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupState'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PendingSpotBidPlacement'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForSpotInstanceRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForSpotInstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForInstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreInService'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForELBConnectionDraining'),
                        new \PHPStan\Type\Constant\ConstantStringType('MidLifecycleAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForInstanceWarmup'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForConnectionDraining'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeScalingProcessTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Processes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProcessName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeScheduledActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScheduledUpdateGroupActions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduledActionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduledActionARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Time'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Recurrence'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeZone'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('PropagateAtLaunch'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeTerminationPolicyTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TerminationPolicyTypes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeTrafficSources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrafficSources'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeWarmPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WarmPoolConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('Instances'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MaxGroupPreparedCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoolState'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceReusePolicy'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Running'),
                        new \PHPStan\Type\Constant\ConstantStringType('Hibernated'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingDelete'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReuseOnScaleIn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('LifecycleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectedFromScaleIn'),
                    new \PHPStan\Type\Constant\ConstantStringType('WeightedCapacity'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending:Wait'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending:Proceed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quarantined'),
                        new \PHPStan\Type\Constant\ConstantStringType('InService'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terminating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terminating:Wait'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terminating:Proceed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terminated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Detaching'),
                        new \PHPStan\Type\Constant\ConstantStringType('Detached'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnteringStandby'),
                        new \PHPStan\Type\Constant\ConstantStringType('Standby'),
                        new \PHPStan\Type\Constant\ConstantStringType('Warmed:Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Warmed:Pending:Wait'),
                        new \PHPStan\Type\Constant\ConstantStringType('Warmed:Pending:Proceed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Warmed:Terminating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Warmed:Terminating:Wait'),
                        new \PHPStan\Type\Constant\ConstantStringType('Warmed:Terminating:Proceed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Warmed:Terminated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Warmed:Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Warmed:Running'),
                        new \PHPStan\Type\Constant\ConstantStringType('Warmed:Hibernated'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function detachInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Activities'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActivityId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cause'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Progress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Details'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupState'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PendingSpotBidPlacement'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForSpotInstanceRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForSpotInstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForInstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreInService'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForELBConnectionDraining'),
                        new \PHPStan\Type\Constant\ConstantStringType('MidLifecycleAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForInstanceWarmup'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForConnectionDraining'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function detachLoadBalancerTargetGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function detachLoadBalancers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function detachTrafficSources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disableMetricsCollection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function enableMetricsCollection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function enterStandby(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Activities'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActivityId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cause'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Progress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Details'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupState'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PendingSpotBidPlacement'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForSpotInstanceRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForSpotInstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForInstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreInService'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForELBConnectionDraining'),
                        new \PHPStan\Type\Constant\ConstantStringType('MidLifecycleAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForInstanceWarmup'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForConnectionDraining'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function executePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function exitStandby(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Activities'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActivityId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cause'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Progress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Details'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupState'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PendingSpotBidPlacement'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForSpotInstanceRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForSpotInstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForInstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreInService'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForELBConnectionDraining'),
                        new \PHPStan\Type\Constant\ConstantStringType('MidLifecycleAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForInstanceWarmup'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForConnectionDraining'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
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
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ASGCPUUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('ASGNetworkIn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ASGNetworkOut'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALBRequestCount'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PredefinedMetricType'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceLabel'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ASGAverageCPUUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('ASGAverageNetworkIn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ASGAverageNetworkOut'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALBRequestCountPerTarget'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PredefinedMetricType'),
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
                                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
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
                                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
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
                                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
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
    private function putLifecycleHook(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putNotificationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
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
    private function putScheduledUpdateGroupAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putWarmPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function recordLifecycleActionHeartbeat(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function resumeProcesses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function rollbackInstanceRefresh(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceRefreshId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function setDesiredCapacity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function setInstanceHealth(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function setInstanceProtection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startInstanceRefresh(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceRefreshId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function suspendProcesses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function terminateInstanceInAutoScalingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Activity'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActivityId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cause'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Progress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Details'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupState'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PendingSpotBidPlacement'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForSpotInstanceRequestId'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForSpotInstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForInstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreInService'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForELBConnectionDraining'),
                        new \PHPStan\Type\Constant\ConstantStringType('MidLifecycleAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForInstanceWarmup'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('WaitingForConnectionDraining'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateAutoScalingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}