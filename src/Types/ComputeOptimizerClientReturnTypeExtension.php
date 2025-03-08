<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ComputeOptimizerClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ComputeOptimizer\ComputeOptimizerClient>
     */
    public function getClass(): string
    {
        return \Aws\ComputeOptimizer\ComputeOptimizerClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'deleteRecommendationPreferences',
            'describeRecommendationExportJobs',
            'exportAutoScalingGroupRecommendations',
            'exportEBSVolumeRecommendations',
            'exportEC2InstanceRecommendations',
            'exportECSServiceRecommendations',
            'exportIdleRecommendations',
            'exportLambdaFunctionRecommendations',
            'exportLicenseRecommendations',
            'exportRDSDatabaseRecommendations',
            'getAutoScalingGroupRecommendations',
            'getEBSVolumeRecommendations',
            'getEC2InstanceRecommendations',
            'getEC2RecommendationProjectedMetrics',
            'getECSServiceRecommendationProjectedMetrics',
            'getECSServiceRecommendations',
            'getEffectiveRecommendationPreferences',
            'getEnrollmentStatus',
            'getEnrollmentStatusesForOrganization',
            'getIdleRecommendations',
            'getLambdaFunctionRecommendations',
            'getLicenseRecommendations',
            'getRDSDatabaseRecommendationProjectedMetrics',
            'getRDSDatabaseRecommendations',
            'getRecommendationPreferences',
            'getRecommendationSummaries',
            'putRecommendationPreferences',
            'updateEnrollmentStatus',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'deleteRecommendationPreferences' => $this->deleteRecommendationPreferences(),
            'describeRecommendationExportJobs' => $this->describeRecommendationExportJobs(),
            'exportAutoScalingGroupRecommendations' => $this->exportAutoScalingGroupRecommendations(),
            'exportEBSVolumeRecommendations' => $this->exportEBSVolumeRecommendations(),
            'exportEC2InstanceRecommendations' => $this->exportEC2InstanceRecommendations(),
            'exportECSServiceRecommendations' => $this->exportECSServiceRecommendations(),
            'exportIdleRecommendations' => $this->exportIdleRecommendations(),
            'exportLambdaFunctionRecommendations' => $this->exportLambdaFunctionRecommendations(),
            'exportLicenseRecommendations' => $this->exportLicenseRecommendations(),
            'exportRDSDatabaseRecommendations' => $this->exportRDSDatabaseRecommendations(),
            'getAutoScalingGroupRecommendations' => $this->getAutoScalingGroupRecommendations(),
            'getEBSVolumeRecommendations' => $this->getEBSVolumeRecommendations(),
            'getEC2InstanceRecommendations' => $this->getEC2InstanceRecommendations(),
            'getEC2RecommendationProjectedMetrics' => $this->getEC2RecommendationProjectedMetrics(),
            'getECSServiceRecommendationProjectedMetrics' => $this->getECSServiceRecommendationProjectedMetrics(),
            'getECSServiceRecommendations' => $this->getECSServiceRecommendations(),
            'getEffectiveRecommendationPreferences' => $this->getEffectiveRecommendationPreferences(),
            'getEnrollmentStatus' => $this->getEnrollmentStatus(),
            'getEnrollmentStatusesForOrganization' => $this->getEnrollmentStatusesForOrganization(),
            'getIdleRecommendations' => $this->getIdleRecommendations(),
            'getLambdaFunctionRecommendations' => $this->getLambdaFunctionRecommendations(),
            'getLicenseRecommendations' => $this->getLicenseRecommendations(),
            'getRDSDatabaseRecommendationProjectedMetrics' => $this->getRDSDatabaseRecommendationProjectedMetrics(),
            'getRDSDatabaseRecommendations' => $this->getRDSDatabaseRecommendations(),
            'getRecommendationPreferences' => $this->getRecommendationPreferences(),
            'getRecommendationSummaries' => $this->getRecommendationSummaries(),
            'putRecommendationPreferences' => $this->putRecommendationPreferences(),
            'updateEnrollmentStatus' => $this->updateEnrollmentStatus(),
        };
    }
    private function deleteRecommendationPreferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeRecommendationExportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('recommendationExportJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('destination'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('metadataKey'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Ec2Instance'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('EbsVolume'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunction'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                        new \PHPStan\Type\Constant\ConstantStringType('EcsService'),
                        new \PHPStan\Type\Constant\ConstantStringType('License'),
                        new \PHPStan\Type\Constant\ConstantStringType('RdsDBInstance'),
                        new \PHPStan\Type\Constant\ConstantStringType('Idle'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Queued'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function exportAutoScalingGroupRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('s3Destination'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadataKey'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function exportEBSVolumeRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('s3Destination'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadataKey'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function exportEC2InstanceRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('s3Destination'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadataKey'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function exportECSServiceRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('s3Destination'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadataKey'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function exportIdleRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('s3Destination'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadataKey'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function exportLambdaFunctionRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('s3Destination'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadataKey'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function exportLicenseRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('s3Destination'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadataKey'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function exportRDSDatabaseRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('s3Destination'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadataKey'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getAutoScalingGroupRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroupRecommendations'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('finding'),
                    new \PHPStan\Type\Constant\ConstantStringType('utilizationMetrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('lookBackPeriodInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentInstanceGpuInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRefreshTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentPerformanceRisk'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveRecommendationPreferences'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferredWorkloadTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Underprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('Overprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('Optimized'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotOptimized'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('statistic'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBS_READ_OPS_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBS_WRITE_OPS_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBS_READ_BYTES_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBS_WRITE_BYTES_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISK_READ_OPS_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISK_WRITE_OPS_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISK_READ_BYTES_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISK_WRITE_BYTES_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_IN_BYTES_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_OUT_BYTES_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_PACKETS_IN_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_PACKETS_OUT_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('GPU_PERCENTAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GPU_MEMORY_PERCENTAGE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Average'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('desiredCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('minSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('allocationStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedInstanceHourReductionPercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('mixedInstanceTypes'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Prioritized'),
                            new \PHPStan\Type\Constant\ConstantStringType('LowestPrice'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SingleInstanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('MixedInstanceTypes'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('gpus'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('gpuCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('gpuMemorySizeInMiB'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceGpuInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('projectedUtilizationMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('performanceRisk'),
                        new \PHPStan\Type\Constant\ConstantStringType('rank'),
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunity'),
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityAfterDiscounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('migrationEffort'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('desiredCapacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('minSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('allocationStrategy'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedInstanceHourReductionPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('mixedInstanceTypes'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Prioritized'),
                                new \PHPStan\Type\Constant\ConstantStringType('LowestPrice'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SingleInstanceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('MixedInstanceTypes'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('gpus'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('gpuCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('gpuMemorySizeInMiB'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('statistic'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                                new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                                new \PHPStan\Type\Constant\ConstantStringType('EBS_READ_OPS_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('EBS_WRITE_OPS_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('EBS_READ_BYTES_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('EBS_WRITE_BYTES_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISK_READ_OPS_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISK_WRITE_OPS_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISK_READ_BYTES_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISK_WRITE_BYTES_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('NETWORK_IN_BYTES_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('NETWORK_OUT_BYTES_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('NETWORK_PACKETS_IN_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('NETWORK_PACKETS_OUT_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('GPU_PERCENTAGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GPU_MEMORY_PERCENTAGE'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                                new \PHPStan\Type\Constant\ConstantStringType('Average'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('currency'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('currency'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VeryLow'),
                            new \PHPStan\Type\Constant\ConstantStringType('Low'),
                            new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                            new \PHPStan\Type\Constant\ConstantStringType('High'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VeryLow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Low'),
                        new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                        new \PHPStan\Type\Constant\ConstantStringType('High'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cpuVendorArchitectures'),
                        new \PHPStan\Type\Constant\ConstantStringType('enhancedInfrastructureMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('inferredWorkloadTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalMetricsPreference'),
                        new \PHPStan\Type\Constant\ConstantStringType('lookBackPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('utilizationPreferences'),
                        new \PHPStan\Type\Constant\ConstantStringType('preferredResources'),
                        new \PHPStan\Type\Constant\ConstantStringType('savingsEstimationMode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_ARM64'),
                            new \PHPStan\Type\Constant\ConstantStringType('CURRENT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                                new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                                new \PHPStan\Type\Constant\ConstantStringType('NewRelic'),
                                new \PHPStan\Type\Constant\ConstantStringType('Instana'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS_14'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS_32'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS_93'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('metricName'),
                            new \PHPStan\Type\Constant\ConstantStringType('metricParameters'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CpuUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('MemoryUtilization'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('threshold'),
                                new \PHPStan\Type\Constant\ConstantStringType('headroom'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('P90'),
                                    new \PHPStan\Type\Constant\ConstantStringType('P95'),
                                    new \PHPStan\Type\Constant\ConstantStringType('P99_5'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PERCENT_30'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PERCENT_20'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PERCENT_10'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PERCENT_0'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('includeList'),
                            new \PHPStan\Type\Constant\ConstantStringType('effectiveIncludeList'),
                            new \PHPStan\Type\Constant\ConstantStringType('excludeList'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('Ec2InstanceTypes'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PublicPricing'),
                                new \PHPStan\Type\Constant\ConstantStringType('CostExplorerRightsizing'),
                                new \PHPStan\Type\Constant\ConstantStringType('CostOptimizationHub'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AmazonEmr'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApacheCassandra'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApacheHadoop'),
                        new \PHPStan\Type\Constant\ConstantStringType('Memcached'),
                        new \PHPStan\Type\Constant\ConstantStringType('Nginx'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostgreSql'),
                        new \PHPStan\Type\Constant\ConstantStringType('Redis'),
                        new \PHPStan\Type\Constant\ConstantStringType('Kafka'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQLServer'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getEBSVolumeRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('volumeRecommendations'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('volumeArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('finding'),
                    new \PHPStan\Type\Constant\ConstantStringType('utilizationMetrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('lookBackPeriodInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumeRecommendationOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRefreshTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentPerformanceRisk'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveRecommendationPreferences'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumeSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumeBaselineIOPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumeBurstIOPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumeBaselineThroughput'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumeBurstThroughput'),
                        new \PHPStan\Type\Constant\ConstantStringType('rootVolume'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Optimized'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotOptimized'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('statistic'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VolumeReadOpsPerSecond'),
                            new \PHPStan\Type\Constant\ConstantStringType('VolumeWriteOpsPerSecond'),
                            new \PHPStan\Type\Constant\ConstantStringType('VolumeReadBytesPerSecond'),
                            new \PHPStan\Type\Constant\ConstantStringType('VolumeWriteBytesPerSecond'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Average'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('performanceRisk'),
                        new \PHPStan\Type\Constant\ConstantStringType('rank'),
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunity'),
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityAfterDiscounts'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeBaselineIOPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeBurstIOPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeBaselineThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeBurstThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('rootVolume'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('currency'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('currency'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VeryLow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Low'),
                        new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                        new \PHPStan\Type\Constant\ConstantStringType('High'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('savingsEstimationMode'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PublicPricing'),
                                new \PHPStan\Type\Constant\ConstantStringType('CostExplorerRightsizing'),
                                new \PHPStan\Type\Constant\ConstantStringType('CostOptimizationHub'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getEC2InstanceRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('instanceRecommendations'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentInstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('finding'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingReasonCodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('utilizationMetrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('lookBackPeriodInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRefreshTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentPerformanceRisk'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveRecommendationPreferences'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferredWorkloadTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceState'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalMetricStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentInstanceGpuInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('idle'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Underprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('Overprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('Optimized'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotOptimized'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CPUOverprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('CPUUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('MemoryOverprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('MemoryUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('EBSThroughputOverprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('EBSThroughputUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('EBSIOPSOverprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('EBSIOPSUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkBandwidthOverprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkBandwidthUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkPPSOverprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkPPSUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('DiskIOPSOverprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('DiskIOPSUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('DiskThroughputOverprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('DiskThroughputUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('GPUUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('GPUOverprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('GPUMemoryUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('GPUMemoryOverprovisioned'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('statistic'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBS_READ_OPS_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBS_WRITE_OPS_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBS_READ_BYTES_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBS_WRITE_BYTES_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISK_READ_OPS_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISK_WRITE_OPS_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISK_READ_BYTES_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISK_WRITE_BYTES_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_IN_BYTES_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_OUT_BYTES_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_PACKETS_IN_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_PACKETS_OUT_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('GPU_PERCENTAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GPU_MEMORY_PERCENTAGE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Average'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceGpuInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('projectedUtilizationMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('platformDifferences'),
                        new \PHPStan\Type\Constant\ConstantStringType('performanceRisk'),
                        new \PHPStan\Type\Constant\ConstantStringType('rank'),
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunity'),
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityAfterDiscounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('migrationEffort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('gpus'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('gpuCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('gpuMemorySizeInMiB'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('statistic'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                                new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                                new \PHPStan\Type\Constant\ConstantStringType('EBS_READ_OPS_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('EBS_WRITE_OPS_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('EBS_READ_BYTES_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('EBS_WRITE_BYTES_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISK_READ_OPS_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISK_WRITE_OPS_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISK_READ_BYTES_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISK_WRITE_BYTES_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('NETWORK_IN_BYTES_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('NETWORK_OUT_BYTES_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('NETWORK_PACKETS_IN_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('NETWORK_PACKETS_OUT_PER_SECOND'),
                                new \PHPStan\Type\Constant\ConstantStringType('GPU_PERCENTAGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GPU_MEMORY_PERCENTAGE'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                                new \PHPStan\Type\Constant\ConstantStringType('Average'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Hypervisor'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkInterface'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageInterface'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceStoreAvailability'),
                            new \PHPStan\Type\Constant\ConstantStringType('VirtualizationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Architecture'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('currency'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('currency'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VeryLow'),
                            new \PHPStan\Type\Constant\ConstantStringType('Low'),
                            new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                            new \PHPStan\Type\Constant\ConstantStringType('High'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('recommendationSourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('recommendationSourceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Ec2Instance'),
                            new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('EbsVolume'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunction'),
                            new \PHPStan\Type\Constant\ConstantStringType('EcsService'),
                            new \PHPStan\Type\Constant\ConstantStringType('License'),
                            new \PHPStan\Type\Constant\ConstantStringType('RdsDBInstance'),
                            new \PHPStan\Type\Constant\ConstantStringType('RdsDBInstanceStorage'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VeryLow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Low'),
                        new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                        new \PHPStan\Type\Constant\ConstantStringType('High'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cpuVendorArchitectures'),
                        new \PHPStan\Type\Constant\ConstantStringType('enhancedInfrastructureMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('inferredWorkloadTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalMetricsPreference'),
                        new \PHPStan\Type\Constant\ConstantStringType('lookBackPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('utilizationPreferences'),
                        new \PHPStan\Type\Constant\ConstantStringType('preferredResources'),
                        new \PHPStan\Type\Constant\ConstantStringType('savingsEstimationMode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_ARM64'),
                            new \PHPStan\Type\Constant\ConstantStringType('CURRENT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                                new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                                new \PHPStan\Type\Constant\ConstantStringType('NewRelic'),
                                new \PHPStan\Type\Constant\ConstantStringType('Instana'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS_14'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS_32'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS_93'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('metricName'),
                            new \PHPStan\Type\Constant\ConstantStringType('metricParameters'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CpuUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('MemoryUtilization'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('threshold'),
                                new \PHPStan\Type\Constant\ConstantStringType('headroom'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('P90'),
                                    new \PHPStan\Type\Constant\ConstantStringType('P95'),
                                    new \PHPStan\Type\Constant\ConstantStringType('P99_5'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PERCENT_30'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PERCENT_20'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PERCENT_10'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PERCENT_0'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('includeList'),
                            new \PHPStan\Type\Constant\ConstantStringType('effectiveIncludeList'),
                            new \PHPStan\Type\Constant\ConstantStringType('excludeList'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('Ec2InstanceTypes'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PublicPricing'),
                                new \PHPStan\Type\Constant\ConstantStringType('CostExplorerRightsizing'),
                                new \PHPStan\Type\Constant\ConstantStringType('CostOptimizationHub'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AmazonEmr'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApacheCassandra'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApacheHadoop'),
                        new \PHPStan\Type\Constant\ConstantStringType('Memcached'),
                        new \PHPStan\Type\Constant\ConstantStringType('Nginx'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostgreSql'),
                        new \PHPStan\Type\Constant\ConstantStringType('Redis'),
                        new \PHPStan\Type\Constant\ConstantStringType('Kafka'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQLServer'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('running'),
                        new \PHPStan\Type\Constant\ConstantStringType('shutting-down'),
                        new \PHPStan\Type\Constant\ConstantStringType('terminated'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_EXTERNAL_METRIC_SET'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGRATION_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATADOG_INTEGRATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DYNATRACE_INTEGRATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEWRELIC_INTEGRATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANA_INTEGRATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_DATADOG_METRICS'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_DYNATRACE_METRICS'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_NEWRELIC_METRICS'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_INSTANA_METRICS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('gpus'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('gpuCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('gpuMemorySizeInMiB'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('True'),
                        new \PHPStan\Type\Constant\ConstantStringType('False'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getEC2RecommendationProjectedMetrics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('recommendedOptionProjectedMetrics'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedInstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('rank'),
                    new \PHPStan\Type\Constant\ConstantStringType('projectedMetrics'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('timestamps'),
                        new \PHPStan\Type\Constant\ConstantStringType('values'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBS_READ_OPS_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBS_WRITE_OPS_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBS_READ_BYTES_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBS_WRITE_BYTES_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISK_READ_OPS_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISK_WRITE_OPS_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISK_READ_BYTES_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISK_WRITE_BYTES_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_IN_BYTES_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_OUT_BYTES_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_PACKETS_IN_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_PACKETS_OUT_PER_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('GPU_PERCENTAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GPU_MEMORY_PERCENTAGE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getECSServiceRecommendationProjectedMetrics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('recommendedOptionProjectedMetrics'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedCpuUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedMemorySize'),
                    new \PHPStan\Type\Constant\ConstantStringType('projectedMetrics'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('timestamps'),
                        new \PHPStan\Type\Constant\ConstantStringType('upperBoundValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('lowerBoundValues'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getECSServiceRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ecsServiceRecommendations'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentServiceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('utilizationMetrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('lookbackPeriodInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRefreshTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('finding'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingReasonCodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRecommendationOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentPerformanceRisk'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveRecommendationPreferences'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoScalingConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskDefinitionArn'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('memorySizeConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('memory'),
                                new \PHPStan\Type\Constant\ConstantStringType('memoryReservation'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScalingCpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetTrackingScalingMemory'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('statistic'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Average'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('Fargate'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Optimized'),
                        new \PHPStan\Type\Constant\ConstantStringType('Underprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('Overprovisioned'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MemoryOverprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('MemoryUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('CPUOverprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('CPUUnderprovisioned'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunity'),
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityAfterDiscounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('projectedUtilizationMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerRecommendations'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('currency'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('currency'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('statistic'),
                            new \PHPStan\Type\Constant\ConstantStringType('lowerBoundValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('upperBoundValue'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                                new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                                new \PHPStan\Type\Constant\ConstantStringType('Average'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('memorySizeConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('memory'),
                                new \PHPStan\Type\Constant\ConstantStringType('memoryReservation'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VeryLow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Low'),
                        new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                        new \PHPStan\Type\Constant\ConstantStringType('High'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('savingsEstimationMode'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PublicPricing'),
                                new \PHPStan\Type\Constant\ConstantStringType('CostExplorerRightsizing'),
                                new \PHPStan\Type\Constant\ConstantStringType('CostOptimizationHub'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getEffectiveRecommendationPreferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('enhancedInfrastructureMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('externalMetricsPreference'),
                new \PHPStan\Type\Constant\ConstantStringType('lookBackPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('utilizationPreferences'),
                new \PHPStan\Type\Constant\ConstantStringType('preferredResources'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewRelic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Instana'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DAYS_14'),
                    new \PHPStan\Type\Constant\ConstantStringType('DAYS_32'),
                    new \PHPStan\Type\Constant\ConstantStringType('DAYS_93'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('metricName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metricParameters'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CpuUtilization'),
                        new \PHPStan\Type\Constant\ConstantStringType('MemoryUtilization'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('threshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('headroom'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('P90'),
                            new \PHPStan\Type\Constant\ConstantStringType('P95'),
                            new \PHPStan\Type\Constant\ConstantStringType('P99_5'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PERCENT_30'),
                            new \PHPStan\Type\Constant\ConstantStringType('PERCENT_20'),
                            new \PHPStan\Type\Constant\ConstantStringType('PERCENT_10'),
                            new \PHPStan\Type\Constant\ConstantStringType('PERCENT_0'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('includeList'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveIncludeList'),
                    new \PHPStan\Type\Constant\ConstantStringType('excludeList'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('Ec2InstanceTypes'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getEnrollmentStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('memberAccountsEnrolled'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('numberOfMemberAccountsOptedIn'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getEnrollmentStatusesForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accountEnrollmentStatuses'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getIdleRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('idleRecommendations'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('finding'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunity'),
                    new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityAfterDiscounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('utilizationMetrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('lookBackPeriodInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRefreshTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2Instance'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('EBSVolume'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECSService'),
                        new \PHPStan\Type\Constant\ConstantStringType('RDSDBInstance'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Idle'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unattached'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('statistic'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CPU'),
                            new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkOutBytesPerSecond'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkInBytesPerSecond'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseConnections'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeReadIOPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeWriteIOPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('VolumeReadOpsPerSecond'),
                            new \PHPStan\Type\Constant\ConstantStringType('VolumeWriteOpsPerSecond'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Average'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2Instance'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('EBSVolume'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECSService'),
                        new \PHPStan\Type\Constant\ConstantStringType('RDSDBInstance'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getLambdaFunctionRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionRecommendations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('functionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('functionVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentMemorySize'),
                    new \PHPStan\Type\Constant\ConstantStringType('numberOfInvocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('utilizationMetrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('lookbackPeriodInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRefreshTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('finding'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingReasonCodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('memorySizeRecommendationOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentPerformanceRisk'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveRecommendationPreferences'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('statistic'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                            new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Average'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Optimized'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotOptimized'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unavailable'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MemoryOverprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('MemoryUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsufficientData'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inconclusive'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('rank'),
                        new \PHPStan\Type\Constant\ConstantStringType('memorySize'),
                        new \PHPStan\Type\Constant\ConstantStringType('projectedUtilizationMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunity'),
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityAfterDiscounts'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('statistic'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LowerBound'),
                                new \PHPStan\Type\Constant\ConstantStringType('UpperBound'),
                                new \PHPStan\Type\Constant\ConstantStringType('Expected'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('currency'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('currency'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VeryLow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Low'),
                        new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                        new \PHPStan\Type\Constant\ConstantStringType('High'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('savingsEstimationMode'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PublicPricing'),
                                new \PHPStan\Type\Constant\ConstantStringType('CostExplorerRightsizing'),
                                new \PHPStan\Type\Constant\ConstantStringType('CostOptimizationHub'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getLicenseRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('licenseRecommendations'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentLicenseConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('lookbackPeriodInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRefreshTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('finding'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingReasonCodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseRecommendationOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfCores'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('operatingSystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('licenseEdition'),
                        new \PHPStan\Type\Constant\ConstantStringType('licenseName'),
                        new \PHPStan\Type\Constant\ConstantStringType('licenseModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('licenseVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('metricsSource'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enterprise'),
                            new \PHPStan\Type\Constant\ConstantStringType('Standard'),
                            new \PHPStan\Type\Constant\ConstantStringType('Free'),
                            new \PHPStan\Type\Constant\ConstantStringType('NoLicenseEditionFound'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('SQLServer'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LicenseIncluded'),
                            new \PHPStan\Type\Constant\ConstantStringType('BringYourOwnLicense'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('provider'),
                            new \PHPStan\Type\Constant\ConstantStringType('providerArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchApplicationInsights'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InsufficientMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Optimized'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotOptimized'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidCloudWatchApplicationInsightsSetup'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchApplicationInsightsError'),
                        new \PHPStan\Type\Constant\ConstantStringType('LicenseOverprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('Optimized'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('rank'),
                        new \PHPStan\Type\Constant\ConstantStringType('operatingSystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('licenseEdition'),
                        new \PHPStan\Type\Constant\ConstantStringType('licenseModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunity'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enterprise'),
                            new \PHPStan\Type\Constant\ConstantStringType('Standard'),
                            new \PHPStan\Type\Constant\ConstantStringType('Free'),
                            new \PHPStan\Type\Constant\ConstantStringType('NoLicenseEditionFound'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LicenseIncluded'),
                            new \PHPStan\Type\Constant\ConstantStringType('BringYourOwnLicense'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('currency'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getRDSDatabaseRecommendationProjectedMetrics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('recommendedOptionProjectedMetrics'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedDBInstanceClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('rank'),
                    new \PHPStan\Type\Constant\ConstantStringType('projectedMetrics'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('timestamps'),
                        new \PHPStan\Type\Constant\ConstantStringType('values'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CPU'),
                            new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeStorageSpaceUtilization'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkReceiveThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkTransmitThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeReadIOPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeWriteIOPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeReadThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeWriteThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseConnections'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageNetworkReceiveThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageNetworkTransmitThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuroraMemoryHealthState'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuroraMemoryNumDeclinedSql'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuroraMemoryNumKillConnTotal'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuroraMemoryNumKillQueryTotal'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadIOPSEphemeralStorage'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteIOPSEphemeralStorage'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getRDSDatabaseRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('rdsDBRecommendations'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('engine'),
                    new \PHPStan\Type\Constant\ConstantStringType('engineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('promotionTier'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentDBInstanceClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentStorageConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('dbClusterIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('idle'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceFinding'),
                    new \PHPStan\Type\Constant\ConstantStringType('storageFinding'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceFindingReasonCodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentInstancePerformanceRisk'),
                    new \PHPStan\Type\Constant\ConstantStringType('storageFindingReasonCodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceRecommendationOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('storageRecommendationOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('utilizationMetrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveRecommendationPreferences'),
                    new \PHPStan\Type\Constant\ConstantStringType('lookbackPeriodInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRefreshTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('storageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('allocatedStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('iops'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxAllocatedStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageThroughput'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('True'),
                        new \PHPStan\Type\Constant\ConstantStringType('False'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Optimized'),
                        new \PHPStan\Type\Constant\ConstantStringType('Underprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('Overprovisioned'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Optimized'),
                        new \PHPStan\Type\Constant\ConstantStringType('Underprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('Overprovisioned'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CPUOverprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkBandwidthOverprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('EBSIOPSOverprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('EBSIOPSUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('EBSThroughputOverprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('CPUUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkBandwidthUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('EBSThroughputUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewGenerationDBInstanceClassAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewEngineVersionAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('DBClusterWriterUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('MemoryUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceStorageReadIOPSUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceStorageWriteIOPSUnderprovisioned'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VeryLow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Low'),
                        new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                        new \PHPStan\Type\Constant\ConstantStringType('High'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeAllocatedStorageUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeThroughputUnderprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeIOPSOverprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeThroughputOverprovisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewGenerationStorageTypeAvailable'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('dbInstanceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('projectedUtilizationMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('performanceRisk'),
                        new \PHPStan\Type\Constant\ConstantStringType('rank'),
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunity'),
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityAfterDiscounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('statistic'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CPU'),
                                new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                                new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeStorageSpaceUtilization'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkReceiveThroughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkTransmitThroughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeReadIOPS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeWriteIOPS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeReadThroughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeWriteThroughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseConnections'),
                                new \PHPStan\Type\Constant\ConstantStringType('StorageNetworkReceiveThroughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('StorageNetworkTransmitThroughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('AuroraMemoryHealthState'),
                                new \PHPStan\Type\Constant\ConstantStringType('AuroraMemoryNumDeclinedSql'),
                                new \PHPStan\Type\Constant\ConstantStringType('AuroraMemoryNumKillConnTotal'),
                                new \PHPStan\Type\Constant\ConstantStringType('AuroraMemoryNumKillQueryTotal'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReadIOPSEphemeralStorage'),
                                new \PHPStan\Type\Constant\ConstantStringType('WriteIOPSEphemeralStorage'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                                new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                                new \PHPStan\Type\Constant\ConstantStringType('Average'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('currency'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('currency'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('storageConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('rank'),
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunity'),
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityAfterDiscounts'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('storageType'),
                            new \PHPStan\Type\Constant\ConstantStringType('allocatedStorage'),
                            new \PHPStan\Type\Constant\ConstantStringType('iops'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxAllocatedStorage'),
                            new \PHPStan\Type\Constant\ConstantStringType('storageThroughput'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('currency'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('currency'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('statistic'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CPU'),
                            new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeStorageSpaceUtilization'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkReceiveThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkTransmitThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeReadIOPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeWriteIOPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeReadThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('EBSVolumeWriteThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseConnections'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageNetworkReceiveThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageNetworkTransmitThroughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuroraMemoryHealthState'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuroraMemoryNumDeclinedSql'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuroraMemoryNumKillConnTotal'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuroraMemoryNumKillQueryTotal'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadIOPSEphemeralStorage'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteIOPSEphemeralStorage'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Average'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cpuVendorArchitectures'),
                        new \PHPStan\Type\Constant\ConstantStringType('enhancedInfrastructureMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('lookBackPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('savingsEstimationMode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_ARM64'),
                            new \PHPStan\Type\Constant\ConstantStringType('CURRENT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS_14'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS_32'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS_93'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PublicPricing'),
                                new \PHPStan\Type\Constant\ConstantStringType('CostExplorerRightsizing'),
                                new \PHPStan\Type\Constant\ConstantStringType('CostOptimizationHub'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getRecommendationPreferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('recommendationPreferencesDetails'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('scope'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('enhancedInfrastructureMetrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferredWorkloadTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalMetricsPreference'),
                    new \PHPStan\Type\Constant\ConstantStringType('lookBackPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('utilizationPreferences'),
                    new \PHPStan\Type\Constant\ConstantStringType('preferredResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('savingsEstimationMode'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Organization'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Ec2Instance'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('EbsVolume'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunction'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotApplicable'),
                        new \PHPStan\Type\Constant\ConstantStringType('EcsService'),
                        new \PHPStan\Type\Constant\ConstantStringType('License'),
                        new \PHPStan\Type\Constant\ConstantStringType('RdsDBInstance'),
                        new \PHPStan\Type\Constant\ConstantStringType('Idle'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Datadog'),
                            new \PHPStan\Type\Constant\ConstantStringType('Dynatrace'),
                            new \PHPStan\Type\Constant\ConstantStringType('NewRelic'),
                            new \PHPStan\Type\Constant\ConstantStringType('Instana'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DAYS_14'),
                        new \PHPStan\Type\Constant\ConstantStringType('DAYS_32'),
                        new \PHPStan\Type\Constant\ConstantStringType('DAYS_93'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('metricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('metricParameters'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CpuUtilization'),
                            new \PHPStan\Type\Constant\ConstantStringType('MemoryUtilization'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('threshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('headroom'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('P90'),
                                new \PHPStan\Type\Constant\ConstantStringType('P95'),
                                new \PHPStan\Type\Constant\ConstantStringType('P99_5'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PERCENT_30'),
                                new \PHPStan\Type\Constant\ConstantStringType('PERCENT_20'),
                                new \PHPStan\Type\Constant\ConstantStringType('PERCENT_10'),
                                new \PHPStan\Type\Constant\ConstantStringType('PERCENT_0'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('includeList'),
                        new \PHPStan\Type\Constant\ConstantStringType('effectiveIncludeList'),
                        new \PHPStan\Type\Constant\ConstantStringType('excludeList'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('Ec2InstanceTypes'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AfterDiscounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('BeforeDiscounts'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getRecommendationSummaries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('recommendationSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('summaries'),
                    new \PHPStan\Type\Constant\ConstantStringType('idleSummaries'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunity'),
                    new \PHPStan\Type\Constant\ConstantStringType('idleSavingsOpportunity'),
                    new \PHPStan\Type\Constant\ConstantStringType('aggregatedSavingsOpportunity'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentPerformanceRiskRatings'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferredWorkloadSavings'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('reasonCodeSummaries'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Underprovisioned'),
                            new \PHPStan\Type\Constant\ConstantStringType('Overprovisioned'),
                            new \PHPStan\Type\Constant\ConstantStringType('Optimized'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotOptimized'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MemoryOverprovisioned'),
                                new \PHPStan\Type\Constant\ConstantStringType('MemoryUnderprovisioned'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Idle'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unattached'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Ec2Instance'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('EbsVolume'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunction'),
                        new \PHPStan\Type\Constant\ConstantStringType('EcsService'),
                        new \PHPStan\Type\Constant\ConstantStringType('License'),
                        new \PHPStan\Type\Constant\ConstantStringType('RdsDBInstance'),
                        new \PHPStan\Type\Constant\ConstantStringType('RdsDBInstanceStorage'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('savingsOpportunityPercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('high'),
                        new \PHPStan\Type\Constant\ConstantStringType('medium'),
                        new \PHPStan\Type\Constant\ConstantStringType('low'),
                        new \PHPStan\Type\Constant\ConstantStringType('veryLow'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('inferredWorkloadTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('estimatedMonthlySavings'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AmazonEmr'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApacheCassandra'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApacheHadoop'),
                            new \PHPStan\Type\Constant\ConstantStringType('Memcached'),
                            new \PHPStan\Type\Constant\ConstantStringType('Nginx'),
                            new \PHPStan\Type\Constant\ConstantStringType('PostgreSql'),
                            new \PHPStan\Type\Constant\ConstantStringType('Redis'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kafka'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQLServer'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('currency'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('USD'),
                                new \PHPStan\Type\Constant\ConstantStringType('CNY'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function putRecommendationPreferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateEnrollmentStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}