<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class BatchClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Batch\BatchClient>
     */
    public function getClass(): string
    {
        return \Aws\Batch\BatchClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelJob',
            'createComputeEnvironment',
            'createConsumableResource',
            'createJobQueue',
            'createSchedulingPolicy',
            'deleteComputeEnvironment',
            'deleteConsumableResource',
            'deleteJobQueue',
            'deleteSchedulingPolicy',
            'deregisterJobDefinition',
            'describeComputeEnvironments',
            'describeConsumableResource',
            'describeJobDefinitions',
            'describeJobQueues',
            'describeJobs',
            'describeSchedulingPolicies',
            'getJobQueueSnapshot',
            'listConsumableResources',
            'listJobs',
            'listJobsByConsumableResource',
            'listSchedulingPolicies',
            'listTagsForResource',
            'registerJobDefinition',
            'submitJob',
            'tagResource',
            'terminateJob',
            'untagResource',
            'updateComputeEnvironment',
            'updateConsumableResource',
            'updateJobQueue',
            'updateSchedulingPolicy',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelJob' => $this->cancelJob(),
            'createComputeEnvironment' => $this->createComputeEnvironment(),
            'createConsumableResource' => $this->createConsumableResource(),
            'createJobQueue' => $this->createJobQueue(),
            'createSchedulingPolicy' => $this->createSchedulingPolicy(),
            'deleteComputeEnvironment' => $this->deleteComputeEnvironment(),
            'deleteConsumableResource' => $this->deleteConsumableResource(),
            'deleteJobQueue' => $this->deleteJobQueue(),
            'deleteSchedulingPolicy' => $this->deleteSchedulingPolicy(),
            'deregisterJobDefinition' => $this->deregisterJobDefinition(),
            'describeComputeEnvironments' => $this->describeComputeEnvironments(),
            'describeConsumableResource' => $this->describeConsumableResource(),
            'describeJobDefinitions' => $this->describeJobDefinitions(),
            'describeJobQueues' => $this->describeJobQueues(),
            'describeJobs' => $this->describeJobs(),
            'describeSchedulingPolicies' => $this->describeSchedulingPolicies(),
            'getJobQueueSnapshot' => $this->getJobQueueSnapshot(),
            'listConsumableResources' => $this->listConsumableResources(),
            'listJobs' => $this->listJobs(),
            'listJobsByConsumableResource' => $this->listJobsByConsumableResource(),
            'listSchedulingPolicies' => $this->listSchedulingPolicies(),
            'listTagsForResource' => $this->listTagsForResource(),
            'registerJobDefinition' => $this->registerJobDefinition(),
            'submitJob' => $this->submitJob(),
            'tagResource' => $this->tagResource(),
            'terminateJob' => $this->terminateJob(),
            'untagResource' => $this->untagResource(),
            'updateComputeEnvironment' => $this->updateComputeEnvironment(),
            'updateConsumableResource' => $this->updateConsumableResource(),
            'updateJobQueue' => $this->updateJobQueue(),
            'updateSchedulingPolicy' => $this->updateSchedulingPolicy(),
        };
    }
    private function cancelJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createComputeEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('computeEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('computeEnvironmentArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createConsumableResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('consumableResourceName'),
                new \PHPStan\Type\Constant\ConstantStringType('consumableResourceArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createJobQueue(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobQueueName'),
                new \PHPStan\Type\Constant\ConstantStringType('jobQueueArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSchedulingPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteComputeEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteConsumableResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteJobQueue(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSchedulingPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterJobDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeComputeEnvironments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('computeEnvironments'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('computeEnvironmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeEnvironmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('unmanagedvCpus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ecsClusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatePolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('eksConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('containerOrchestrationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('uuid'),
                    new \PHPStan\Type\Constant\ConstantStringType('context'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNMANAGED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('allocationStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('minvCpus'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxvCpus'),
                        new \PHPStan\Type\Constant\ConstantStringType('desiredvCpus'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('imageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2KeyPair'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('placementGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('bidPercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('spotIamFleetRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchTemplate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2Configuration'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPOT'),
                            new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FARGATE_SPOT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BEST_FIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('BEST_FIT_PROGRESSIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPOT_CAPACITY_OPTIMIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPOT_PRICE_CAPACITY_OPTIMIZED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('launchTemplateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('launchTemplateName'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                            new \PHPStan\Type\Constant\ConstantStringType('overrides'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('launchTemplateId'),
                                new \PHPStan\Type\Constant\ConstantStringType('launchTemplateName'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetInstanceTypes'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('imageType'),
                            new \PHPStan\Type\Constant\ConstantStringType('imageIdOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('imageKubernetesVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('terminateJobsOnUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobExecutionTimeoutMinutes'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eksClusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('kubernetesNamespace'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeConsumableResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('consumableResourceName'),
                new \PHPStan\Type\Constant\ConstantStringType('consumableResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('totalQuantity'),
                new \PHPStan\Type\Constant\ConstantStringType('inUseQuantity'),
                new \PHPStan\Type\Constant\ConstantStringType('availableQuantity'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeJobDefinitions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobDefinitions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobDefinitionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobDefinitionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('schedulingPriority'),
                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('retryStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('containerProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodeProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('propagateTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformCapabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('ecsProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('eksProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('containerOrchestrationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('consumableResourceProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attempts'),
                        new \PHPStan\Type\Constant\ConstantStringType('evaluateOnExit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('onStatusReason'),
                            new \PHPStan\Type\Constant\ConstantStringType('onReason'),
                            new \PHPStan\Type\Constant\ConstantStringType('onExitCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                                new \PHPStan\Type\Constant\ConstantStringType('EXIT'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('vcpus'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumes'),
                        new \PHPStan\Type\Constant\ConstantStringType('environment'),
                        new \PHPStan\Type\Constant\ConstantStringType('mountPoints'),
                        new \PHPStan\Type\Constant\ConstantStringType('readonlyRootFilesystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                        new \PHPStan\Type\Constant\ConstantStringType('ulimits'),
                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceRequirements'),
                        new \PHPStan\Type\Constant\ConstantStringType('linuxParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('secrets'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('fargatePlatformConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtimePlatform'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryCredentials'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('host'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('efsVolumeConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sourcePath'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fileSystemId'),
                                new \PHPStan\Type\Constant\ConstantStringType('rootDirectory'),
                                new \PHPStan\Type\Constant\ConstantStringType('transitEncryption'),
                                new \PHPStan\Type\Constant\ConstantStringType('transitEncryptionPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('authorizationConfig'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('accessPointId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('iam'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                            new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceVolume'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('hardLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('softLimit'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GPU'),
                                new \PHPStan\Type\Constant\ConstantStringType('VCPU'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEMORY'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('devices'),
                            new \PHPStan\Type\Constant\ConstantStringType('initProcessEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('sharedMemorySize'),
                            new \PHPStan\Type\Constant\ConstantStringType('tmpfs'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxSwap'),
                            new \PHPStan\Type\Constant\ConstantStringType('swappiness'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('hostPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('permissions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('READ'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WRITE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MKNOD'),
                                ])),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('size'),
                                new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('logDriver'),
                            new \PHPStan\Type\Constant\ConstantStringType('options'),
                            new \PHPStan\Type\Constant\ConstantStringType('secretOptions'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('json-file'),
                                new \PHPStan\Type\Constant\ConstantStringType('syslog'),
                                new \PHPStan\Type\Constant\ConstantStringType('journald'),
                                new \PHPStan\Type\Constant\ConstantStringType('gelf'),
                                new \PHPStan\Type\Constant\ConstantStringType('fluentd'),
                                new \PHPStan\Type\Constant\ConstantStringType('awslogs'),
                                new \PHPStan\Type\Constant\ConstantStringType('splunk'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('operatingSystemFamily'),
                            new \PHPStan\Type\Constant\ConstantStringType('cpuArchitecture'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsParameter'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attemptDurationSeconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('numNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('mainNode'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodeRangeProperties'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetNodes'),
                            new \PHPStan\Type\Constant\ConstantStringType('container'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceTypes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ecsProperties'),
                            new \PHPStan\Type\Constant\ConstantStringType('eksProperties'),
                            new \PHPStan\Type\Constant\ConstantStringType('consumableResourceProperties'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('image'),
                                new \PHPStan\Type\Constant\ConstantStringType('vcpus'),
                                new \PHPStan\Type\Constant\ConstantStringType('memory'),
                                new \PHPStan\Type\Constant\ConstantStringType('command'),
                                new \PHPStan\Type\Constant\ConstantStringType('jobRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('volumes'),
                                new \PHPStan\Type\Constant\ConstantStringType('environment'),
                                new \PHPStan\Type\Constant\ConstantStringType('mountPoints'),
                                new \PHPStan\Type\Constant\ConstantStringType('readonlyRootFilesystem'),
                                new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                                new \PHPStan\Type\Constant\ConstantStringType('ulimits'),
                                new \PHPStan\Type\Constant\ConstantStringType('user'),
                                new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('resourceRequirements'),
                                new \PHPStan\Type\Constant\ConstantStringType('linuxParameters'),
                                new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('secrets'),
                                new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('fargatePlatformConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                                new \PHPStan\Type\Constant\ConstantStringType('runtimePlatform'),
                                new \PHPStan\Type\Constant\ConstantStringType('repositoryCredentials'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('host'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('efsVolumeConfiguration'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('sourcePath'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('fileSystemId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('rootDirectory'),
                                        new \PHPStan\Type\Constant\ConstantStringType('transitEncryption'),
                                        new \PHPStan\Type\Constant\ConstantStringType('transitEncryptionPort'),
                                        new \PHPStan\Type\Constant\ConstantStringType('authorizationConfig'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('accessPointId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('iam'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                            ]),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sourceVolume'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('hardLimit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('softLimit'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GPU'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VCPU'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MEMORY'),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('devices'),
                                    new \PHPStan\Type\Constant\ConstantStringType('initProcessEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sharedMemorySize'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tmpfs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('maxSwap'),
                                    new \PHPStan\Type\Constant\ConstantStringType('swappiness'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('hostPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('permissions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('READ'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WRITE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MKNOD'),
                                        ])),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('size'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ])),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('logDriver'),
                                    new \PHPStan\Type\Constant\ConstantStringType('options'),
                                    new \PHPStan\Type\Constant\ConstantStringType('secretOptions'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('json-file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('syslog'),
                                        new \PHPStan\Type\Constant\ConstantStringType('journald'),
                                        new \PHPStan\Type\Constant\ConstantStringType('gelf'),
                                        new \PHPStan\Type\Constant\ConstantStringType('fluentd'),
                                        new \PHPStan\Type\Constant\ConstantStringType('awslogs'),
                                        new \PHPStan\Type\Constant\ConstantStringType('splunk'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('operatingSystemFamily'),
                                    new \PHPStan\Type\Constant\ConstantStringType('cpuArchitecture'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('credentialsParameter'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('taskProperties'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('containers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ipcMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('taskRoleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('pidMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('runtimePlatform'),
                                    new \PHPStan\Type\Constant\ConstantStringType('volumes'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dependsOn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('environment'),
                                        new \PHPStan\Type\Constant\ConstantStringType('essential'),
                                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                                        new \PHPStan\Type\Constant\ConstantStringType('linuxParameters'),
                                        new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mountPoints'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                                        new \PHPStan\Type\Constant\ConstantStringType('readonlyRootFilesystem'),
                                        new \PHPStan\Type\Constant\ConstantStringType('repositoryCredentials'),
                                        new \PHPStan\Type\Constant\ConstantStringType('resourceRequirements'),
                                        new \PHPStan\Type\Constant\ConstantStringType('secrets'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ulimits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('condition'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('devices'),
                                            new \PHPStan\Type\Constant\ConstantStringType('initProcessEnabled'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sharedMemorySize'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tmpfs'),
                                            new \PHPStan\Type\Constant\ConstantStringType('maxSwap'),
                                            new \PHPStan\Type\Constant\ConstantStringType('swappiness'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('hostPath'),
                                                new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                                new \PHPStan\Type\Constant\ConstantStringType('permissions'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('READ'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('WRITE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('MKNOD'),
                                                ])),
                                            ])),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                                new \PHPStan\Type\Constant\ConstantStringType('size'),
                                                new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                            ])),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('logDriver'),
                                            new \PHPStan\Type\Constant\ConstantStringType('options'),
                                            new \PHPStan\Type\Constant\ConstantStringType('secretOptions'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('json-file'),
                                                new \PHPStan\Type\Constant\ConstantStringType('syslog'),
                                                new \PHPStan\Type\Constant\ConstantStringType('journald'),
                                                new \PHPStan\Type\Constant\ConstantStringType('gelf'),
                                                new \PHPStan\Type\Constant\ConstantStringType('fluentd'),
                                                new \PHPStan\Type\Constant\ConstantStringType('awslogs'),
                                                new \PHPStan\Type\Constant\ConstantStringType('splunk'),
                                            ]),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                            new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceVolume'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('credentialsParameter'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('GPU'),
                                                new \PHPStan\Type\Constant\ConstantStringType('VCPU'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MEMORY'),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('hardLimit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('softLimit'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('operatingSystemFamily'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cpuArchitecture'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('efsVolumeConfiguration'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('sourcePath'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('fileSystemId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('rootDirectory'),
                                            new \PHPStan\Type\Constant\ConstantStringType('transitEncryption'),
                                            new \PHPStan\Type\Constant\ConstantStringType('transitEncryptionPort'),
                                            new \PHPStan\Type\Constant\ConstantStringType('authorizationConfig'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('accessPointId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('iam'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                                ]),
                                            ]),
                                        ]),
                                    ])),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('podProperties'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('serviceAccountName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('hostNetwork'),
                                    new \PHPStan\Type\Constant\ConstantStringType('dnsPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('imagePullSecrets'),
                                    new \PHPStan\Type\Constant\ConstantStringType('containers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('initContainers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('volumes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                    new \PHPStan\Type\Constant\ConstantStringType('shareProcessNamespace'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                                        new \PHPStan\Type\Constant\ConstantStringType('imagePullPolicy'),
                                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                                        new \PHPStan\Type\Constant\ConstantStringType('args'),
                                        new \PHPStan\Type\Constant\ConstantStringType('env'),
                                        new \PHPStan\Type\Constant\ConstantStringType('resources'),
                                        new \PHPStan\Type\Constant\ConstantStringType('volumeMounts'),
                                        new \PHPStan\Type\Constant\ConstantStringType('securityContext'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('limits'),
                                            new \PHPStan\Type\Constant\ConstantStringType('requests'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('mountPath'),
                                            new \PHPStan\Type\Constant\ConstantStringType('subPath'),
                                            new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('runAsUser'),
                                            new \PHPStan\Type\Constant\ConstantStringType('runAsGroup'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                                            new \PHPStan\Type\Constant\ConstantStringType('allowPrivilegeEscalation'),
                                            new \PHPStan\Type\Constant\ConstantStringType('readOnlyRootFilesystem'),
                                            new \PHPStan\Type\Constant\ConstantStringType('runAsNonRoot'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                                        new \PHPStan\Type\Constant\ConstantStringType('imagePullPolicy'),
                                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                                        new \PHPStan\Type\Constant\ConstantStringType('args'),
                                        new \PHPStan\Type\Constant\ConstantStringType('env'),
                                        new \PHPStan\Type\Constant\ConstantStringType('resources'),
                                        new \PHPStan\Type\Constant\ConstantStringType('volumeMounts'),
                                        new \PHPStan\Type\Constant\ConstantStringType('securityContext'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('limits'),
                                            new \PHPStan\Type\Constant\ConstantStringType('requests'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('mountPath'),
                                            new \PHPStan\Type\Constant\ConstantStringType('subPath'),
                                            new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('runAsUser'),
                                            new \PHPStan\Type\Constant\ConstantStringType('runAsGroup'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                                            new \PHPStan\Type\Constant\ConstantStringType('allowPrivilegeEscalation'),
                                            new \PHPStan\Type\Constant\ConstantStringType('readOnlyRootFilesystem'),
                                            new \PHPStan\Type\Constant\ConstantStringType('runAsNonRoot'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('hostPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('emptyDir'),
                                        new \PHPStan\Type\Constant\ConstantStringType('secret'),
                                        new \PHPStan\Type\Constant\ConstantStringType('persistentVolumeClaim'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('medium'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sizeLimit'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('optional'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('claimName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('labels'),
                                        new \PHPStan\Type\Constant\ConstantStringType('annotations'),
                                        new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('consumableResourceList'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('consumableResource'),
                                    new \PHPStan\Type\Constant\ConstantStringType('quantity'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('taskProperties'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containers'),
                            new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipcMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('pidMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('runtimePlatform'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumes'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('command'),
                                new \PHPStan\Type\Constant\ConstantStringType('dependsOn'),
                                new \PHPStan\Type\Constant\ConstantStringType('environment'),
                                new \PHPStan\Type\Constant\ConstantStringType('essential'),
                                new \PHPStan\Type\Constant\ConstantStringType('image'),
                                new \PHPStan\Type\Constant\ConstantStringType('linuxParameters'),
                                new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('mountPoints'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                                new \PHPStan\Type\Constant\ConstantStringType('readonlyRootFilesystem'),
                                new \PHPStan\Type\Constant\ConstantStringType('repositoryCredentials'),
                                new \PHPStan\Type\Constant\ConstantStringType('resourceRequirements'),
                                new \PHPStan\Type\Constant\ConstantStringType('secrets'),
                                new \PHPStan\Type\Constant\ConstantStringType('ulimits'),
                                new \PHPStan\Type\Constant\ConstantStringType('user'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('condition'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('devices'),
                                    new \PHPStan\Type\Constant\ConstantStringType('initProcessEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sharedMemorySize'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tmpfs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('maxSwap'),
                                    new \PHPStan\Type\Constant\ConstantStringType('swappiness'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('hostPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('permissions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('READ'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WRITE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MKNOD'),
                                        ])),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('size'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ])),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('logDriver'),
                                    new \PHPStan\Type\Constant\ConstantStringType('options'),
                                    new \PHPStan\Type\Constant\ConstantStringType('secretOptions'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('json-file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('syslog'),
                                        new \PHPStan\Type\Constant\ConstantStringType('journald'),
                                        new \PHPStan\Type\Constant\ConstantStringType('gelf'),
                                        new \PHPStan\Type\Constant\ConstantStringType('fluentd'),
                                        new \PHPStan\Type\Constant\ConstantStringType('awslogs'),
                                        new \PHPStan\Type\Constant\ConstantStringType('splunk'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sourceVolume'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('credentialsParameter'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GPU'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VCPU'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MEMORY'),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('hardLimit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('softLimit'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('operatingSystemFamily'),
                                new \PHPStan\Type\Constant\ConstantStringType('cpuArchitecture'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('host'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('efsVolumeConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('sourcePath'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('fileSystemId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rootDirectory'),
                                    new \PHPStan\Type\Constant\ConstantStringType('transitEncryption'),
                                    new \PHPStan\Type\Constant\ConstantStringType('transitEncryptionPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('authorizationConfig'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('accessPointId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iam'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                    ]),
                                ]),
                            ])),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('podProperties'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serviceAccountName'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostNetwork'),
                            new \PHPStan\Type\Constant\ConstantStringType('dnsPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('imagePullSecrets'),
                            new \PHPStan\Type\Constant\ConstantStringType('containers'),
                            new \PHPStan\Type\Constant\ConstantStringType('initContainers'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumes'),
                            new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                            new \PHPStan\Type\Constant\ConstantStringType('shareProcessNamespace'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('image'),
                                new \PHPStan\Type\Constant\ConstantStringType('imagePullPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('command'),
                                new \PHPStan\Type\Constant\ConstantStringType('args'),
                                new \PHPStan\Type\Constant\ConstantStringType('env'),
                                new \PHPStan\Type\Constant\ConstantStringType('resources'),
                                new \PHPStan\Type\Constant\ConstantStringType('volumeMounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityContext'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('limits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('requests'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mountPath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('subPath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('runAsUser'),
                                    new \PHPStan\Type\Constant\ConstantStringType('runAsGroup'),
                                    new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                                    new \PHPStan\Type\Constant\ConstantStringType('allowPrivilegeEscalation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('readOnlyRootFilesystem'),
                                    new \PHPStan\Type\Constant\ConstantStringType('runAsNonRoot'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('image'),
                                new \PHPStan\Type\Constant\ConstantStringType('imagePullPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('command'),
                                new \PHPStan\Type\Constant\ConstantStringType('args'),
                                new \PHPStan\Type\Constant\ConstantStringType('env'),
                                new \PHPStan\Type\Constant\ConstantStringType('resources'),
                                new \PHPStan\Type\Constant\ConstantStringType('volumeMounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityContext'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('limits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('requests'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mountPath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('subPath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('runAsUser'),
                                    new \PHPStan\Type\Constant\ConstantStringType('runAsGroup'),
                                    new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                                    new \PHPStan\Type\Constant\ConstantStringType('allowPrivilegeEscalation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('readOnlyRootFilesystem'),
                                    new \PHPStan\Type\Constant\ConstantStringType('runAsNonRoot'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('emptyDir'),
                                new \PHPStan\Type\Constant\ConstantStringType('secret'),
                                new \PHPStan\Type\Constant\ConstantStringType('persistentVolumeClaim'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('medium'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sizeLimit'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('optional'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('claimName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('labels'),
                                new \PHPStan\Type\Constant\ConstantStringType('annotations'),
                                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('consumableResourceList'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('consumableResource'),
                            new \PHPStan\Type\Constant\ConstantStringType('quantity'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeJobQueues(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobQueues'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobQueueName'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobQueueArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('schedulingPolicyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('priority'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeEnvironmentOrder'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobStateTimeLimitActions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('order'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeEnvironment'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxTimeSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNABLE'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL'),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobs'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobQueue'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('shareIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('schedulingPriority'),
                    new \PHPStan\Type\Constant\ConstantStringType('attempts'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('retryStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('stoppedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('dependsOn'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobDefinition'),
                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('container'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodeDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodeProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('arrayProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('propagateTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformCapabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('eksProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('eksAttempts'),
                    new \PHPStan\Type\Constant\ConstantStringType('ecsProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('isCancelled'),
                    new \PHPStan\Type\Constant\ConstantStringType('isTerminated'),
                    new \PHPStan\Type\Constant\ConstantStringType('consumableResourceProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('container'),
                        new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('stoppedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskProperties'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containerInstanceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('exitCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('logStreamName'),
                            new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipv6Address'),
                                new \PHPStan\Type\Constant\ConstantStringType('privateIpv4Address'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containerInstanceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('containers'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('exitCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('reason'),
                                new \PHPStan\Type\Constant\ConstantStringType('logStreamName'),
                                new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ipv6Address'),
                                    new \PHPStan\Type\Constant\ConstantStringType('privateIpv4Address'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ])),
                        ])),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attempts'),
                        new \PHPStan\Type\Constant\ConstantStringType('evaluateOnExit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('onStatusReason'),
                            new \PHPStan\Type\Constant\ConstantStringType('onReason'),
                            new \PHPStan\Type\Constant\ConstantStringType('onExitCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                                new \PHPStan\Type\Constant\ConstantStringType('EXIT'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('N_TO_N'),
                            new \PHPStan\Type\Constant\ConstantStringType('SEQUENTIAL'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('vcpus'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumes'),
                        new \PHPStan\Type\Constant\ConstantStringType('environment'),
                        new \PHPStan\Type\Constant\ConstantStringType('mountPoints'),
                        new \PHPStan\Type\Constant\ConstantStringType('readonlyRootFilesystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('ulimits'),
                        new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                        new \PHPStan\Type\Constant\ConstantStringType('exitCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerInstanceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('logStreamName'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceRequirements'),
                        new \PHPStan\Type\Constant\ConstantStringType('linuxParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('secrets'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('fargatePlatformConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtimePlatform'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryCredentials'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('host'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('efsVolumeConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sourcePath'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fileSystemId'),
                                new \PHPStan\Type\Constant\ConstantStringType('rootDirectory'),
                                new \PHPStan\Type\Constant\ConstantStringType('transitEncryption'),
                                new \PHPStan\Type\Constant\ConstantStringType('transitEncryptionPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('authorizationConfig'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('accessPointId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('iam'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                            new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceVolume'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('hardLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('softLimit'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipv6Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('privateIpv4Address'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GPU'),
                                new \PHPStan\Type\Constant\ConstantStringType('VCPU'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEMORY'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('devices'),
                            new \PHPStan\Type\Constant\ConstantStringType('initProcessEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('sharedMemorySize'),
                            new \PHPStan\Type\Constant\ConstantStringType('tmpfs'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxSwap'),
                            new \PHPStan\Type\Constant\ConstantStringType('swappiness'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('hostPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('permissions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('READ'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WRITE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MKNOD'),
                                ])),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('size'),
                                new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('logDriver'),
                            new \PHPStan\Type\Constant\ConstantStringType('options'),
                            new \PHPStan\Type\Constant\ConstantStringType('secretOptions'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('json-file'),
                                new \PHPStan\Type\Constant\ConstantStringType('syslog'),
                                new \PHPStan\Type\Constant\ConstantStringType('journald'),
                                new \PHPStan\Type\Constant\ConstantStringType('gelf'),
                                new \PHPStan\Type\Constant\ConstantStringType('fluentd'),
                                new \PHPStan\Type\Constant\ConstantStringType('awslogs'),
                                new \PHPStan\Type\Constant\ConstantStringType('splunk'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('operatingSystemFamily'),
                            new \PHPStan\Type\Constant\ConstantStringType('cpuArchitecture'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsParameter'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('nodeIndex'),
                        new \PHPStan\Type\Constant\ConstantStringType('isMainNode'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('numNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('mainNode'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodeRangeProperties'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetNodes'),
                            new \PHPStan\Type\Constant\ConstantStringType('container'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceTypes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ecsProperties'),
                            new \PHPStan\Type\Constant\ConstantStringType('eksProperties'),
                            new \PHPStan\Type\Constant\ConstantStringType('consumableResourceProperties'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('image'),
                                new \PHPStan\Type\Constant\ConstantStringType('vcpus'),
                                new \PHPStan\Type\Constant\ConstantStringType('memory'),
                                new \PHPStan\Type\Constant\ConstantStringType('command'),
                                new \PHPStan\Type\Constant\ConstantStringType('jobRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('volumes'),
                                new \PHPStan\Type\Constant\ConstantStringType('environment'),
                                new \PHPStan\Type\Constant\ConstantStringType('mountPoints'),
                                new \PHPStan\Type\Constant\ConstantStringType('readonlyRootFilesystem'),
                                new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                                new \PHPStan\Type\Constant\ConstantStringType('ulimits'),
                                new \PHPStan\Type\Constant\ConstantStringType('user'),
                                new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('resourceRequirements'),
                                new \PHPStan\Type\Constant\ConstantStringType('linuxParameters'),
                                new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('secrets'),
                                new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('fargatePlatformConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                                new \PHPStan\Type\Constant\ConstantStringType('runtimePlatform'),
                                new \PHPStan\Type\Constant\ConstantStringType('repositoryCredentials'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('host'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('efsVolumeConfiguration'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('sourcePath'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('fileSystemId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('rootDirectory'),
                                        new \PHPStan\Type\Constant\ConstantStringType('transitEncryption'),
                                        new \PHPStan\Type\Constant\ConstantStringType('transitEncryptionPort'),
                                        new \PHPStan\Type\Constant\ConstantStringType('authorizationConfig'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('accessPointId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('iam'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                            ]),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sourceVolume'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('hardLimit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('softLimit'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GPU'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VCPU'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MEMORY'),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('devices'),
                                    new \PHPStan\Type\Constant\ConstantStringType('initProcessEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sharedMemorySize'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tmpfs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('maxSwap'),
                                    new \PHPStan\Type\Constant\ConstantStringType('swappiness'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('hostPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('permissions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('READ'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WRITE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MKNOD'),
                                        ])),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('size'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ])),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('logDriver'),
                                    new \PHPStan\Type\Constant\ConstantStringType('options'),
                                    new \PHPStan\Type\Constant\ConstantStringType('secretOptions'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('json-file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('syslog'),
                                        new \PHPStan\Type\Constant\ConstantStringType('journald'),
                                        new \PHPStan\Type\Constant\ConstantStringType('gelf'),
                                        new \PHPStan\Type\Constant\ConstantStringType('fluentd'),
                                        new \PHPStan\Type\Constant\ConstantStringType('awslogs'),
                                        new \PHPStan\Type\Constant\ConstantStringType('splunk'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('operatingSystemFamily'),
                                    new \PHPStan\Type\Constant\ConstantStringType('cpuArchitecture'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('credentialsParameter'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('taskProperties'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('containers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ipcMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('taskRoleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('pidMode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('runtimePlatform'),
                                    new \PHPStan\Type\Constant\ConstantStringType('volumes'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dependsOn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('environment'),
                                        new \PHPStan\Type\Constant\ConstantStringType('essential'),
                                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                                        new \PHPStan\Type\Constant\ConstantStringType('linuxParameters'),
                                        new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mountPoints'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                                        new \PHPStan\Type\Constant\ConstantStringType('readonlyRootFilesystem'),
                                        new \PHPStan\Type\Constant\ConstantStringType('repositoryCredentials'),
                                        new \PHPStan\Type\Constant\ConstantStringType('resourceRequirements'),
                                        new \PHPStan\Type\Constant\ConstantStringType('secrets'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ulimits'),
                                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('condition'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('devices'),
                                            new \PHPStan\Type\Constant\ConstantStringType('initProcessEnabled'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sharedMemorySize'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tmpfs'),
                                            new \PHPStan\Type\Constant\ConstantStringType('maxSwap'),
                                            new \PHPStan\Type\Constant\ConstantStringType('swappiness'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('hostPath'),
                                                new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                                new \PHPStan\Type\Constant\ConstantStringType('permissions'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('READ'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('WRITE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('MKNOD'),
                                                ])),
                                            ])),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                                new \PHPStan\Type\Constant\ConstantStringType('size'),
                                                new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                            ])),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('logDriver'),
                                            new \PHPStan\Type\Constant\ConstantStringType('options'),
                                            new \PHPStan\Type\Constant\ConstantStringType('secretOptions'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('json-file'),
                                                new \PHPStan\Type\Constant\ConstantStringType('syslog'),
                                                new \PHPStan\Type\Constant\ConstantStringType('journald'),
                                                new \PHPStan\Type\Constant\ConstantStringType('gelf'),
                                                new \PHPStan\Type\Constant\ConstantStringType('fluentd'),
                                                new \PHPStan\Type\Constant\ConstantStringType('awslogs'),
                                                new \PHPStan\Type\Constant\ConstantStringType('splunk'),
                                            ]),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                            new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sourceVolume'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('credentialsParameter'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('GPU'),
                                                new \PHPStan\Type\Constant\ConstantStringType('VCPU'),
                                                new \PHPStan\Type\Constant\ConstantStringType('MEMORY'),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('hardLimit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('softLimit'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('operatingSystemFamily'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cpuArchitecture'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('efsVolumeConfiguration'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('sourcePath'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('fileSystemId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('rootDirectory'),
                                            new \PHPStan\Type\Constant\ConstantStringType('transitEncryption'),
                                            new \PHPStan\Type\Constant\ConstantStringType('transitEncryptionPort'),
                                            new \PHPStan\Type\Constant\ConstantStringType('authorizationConfig'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('accessPointId'),
                                                new \PHPStan\Type\Constant\ConstantStringType('iam'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                                ]),
                                            ]),
                                        ]),
                                    ])),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('podProperties'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('serviceAccountName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('hostNetwork'),
                                    new \PHPStan\Type\Constant\ConstantStringType('dnsPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('imagePullSecrets'),
                                    new \PHPStan\Type\Constant\ConstantStringType('containers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('initContainers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('volumes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                    new \PHPStan\Type\Constant\ConstantStringType('shareProcessNamespace'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                                        new \PHPStan\Type\Constant\ConstantStringType('imagePullPolicy'),
                                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                                        new \PHPStan\Type\Constant\ConstantStringType('args'),
                                        new \PHPStan\Type\Constant\ConstantStringType('env'),
                                        new \PHPStan\Type\Constant\ConstantStringType('resources'),
                                        new \PHPStan\Type\Constant\ConstantStringType('volumeMounts'),
                                        new \PHPStan\Type\Constant\ConstantStringType('securityContext'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('limits'),
                                            new \PHPStan\Type\Constant\ConstantStringType('requests'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('mountPath'),
                                            new \PHPStan\Type\Constant\ConstantStringType('subPath'),
                                            new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('runAsUser'),
                                            new \PHPStan\Type\Constant\ConstantStringType('runAsGroup'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                                            new \PHPStan\Type\Constant\ConstantStringType('allowPrivilegeEscalation'),
                                            new \PHPStan\Type\Constant\ConstantStringType('readOnlyRootFilesystem'),
                                            new \PHPStan\Type\Constant\ConstantStringType('runAsNonRoot'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                                        new \PHPStan\Type\Constant\ConstantStringType('imagePullPolicy'),
                                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                                        new \PHPStan\Type\Constant\ConstantStringType('args'),
                                        new \PHPStan\Type\Constant\ConstantStringType('env'),
                                        new \PHPStan\Type\Constant\ConstantStringType('resources'),
                                        new \PHPStan\Type\Constant\ConstantStringType('volumeMounts'),
                                        new \PHPStan\Type\Constant\ConstantStringType('securityContext'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('limits'),
                                            new \PHPStan\Type\Constant\ConstantStringType('requests'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('mountPath'),
                                            new \PHPStan\Type\Constant\ConstantStringType('subPath'),
                                            new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                        ])),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('runAsUser'),
                                            new \PHPStan\Type\Constant\ConstantStringType('runAsGroup'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                                            new \PHPStan\Type\Constant\ConstantStringType('allowPrivilegeEscalation'),
                                            new \PHPStan\Type\Constant\ConstantStringType('readOnlyRootFilesystem'),
                                            new \PHPStan\Type\Constant\ConstantStringType('runAsNonRoot'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('hostPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('emptyDir'),
                                        new \PHPStan\Type\Constant\ConstantStringType('secret'),
                                        new \PHPStan\Type\Constant\ConstantStringType('persistentVolumeClaim'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('medium'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sizeLimit'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('optional'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('claimName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('labels'),
                                        new \PHPStan\Type\Constant\ConstantStringType('annotations'),
                                        new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('consumableResourceList'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('consumableResource'),
                                    new \PHPStan\Type\Constant\ConstantStringType('quantity'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('statusSummary'),
                        new \PHPStan\Type\Constant\ConstantStringType('size'),
                        new \PHPStan\Type\Constant\ConstantStringType('index'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attemptDurationSeconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('podProperties'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serviceAccountName'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostNetwork'),
                            new \PHPStan\Type\Constant\ConstantStringType('dnsPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('imagePullSecrets'),
                            new \PHPStan\Type\Constant\ConstantStringType('containers'),
                            new \PHPStan\Type\Constant\ConstantStringType('initContainers'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumes'),
                            new \PHPStan\Type\Constant\ConstantStringType('podName'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                            new \PHPStan\Type\Constant\ConstantStringType('shareProcessNamespace'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('image'),
                                new \PHPStan\Type\Constant\ConstantStringType('imagePullPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('command'),
                                new \PHPStan\Type\Constant\ConstantStringType('args'),
                                new \PHPStan\Type\Constant\ConstantStringType('env'),
                                new \PHPStan\Type\Constant\ConstantStringType('resources'),
                                new \PHPStan\Type\Constant\ConstantStringType('exitCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('reason'),
                                new \PHPStan\Type\Constant\ConstantStringType('volumeMounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityContext'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('limits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('requests'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mountPath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('subPath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('runAsUser'),
                                    new \PHPStan\Type\Constant\ConstantStringType('runAsGroup'),
                                    new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                                    new \PHPStan\Type\Constant\ConstantStringType('allowPrivilegeEscalation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('readOnlyRootFilesystem'),
                                    new \PHPStan\Type\Constant\ConstantStringType('runAsNonRoot'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('image'),
                                new \PHPStan\Type\Constant\ConstantStringType('imagePullPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('command'),
                                new \PHPStan\Type\Constant\ConstantStringType('args'),
                                new \PHPStan\Type\Constant\ConstantStringType('env'),
                                new \PHPStan\Type\Constant\ConstantStringType('resources'),
                                new \PHPStan\Type\Constant\ConstantStringType('exitCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('reason'),
                                new \PHPStan\Type\Constant\ConstantStringType('volumeMounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityContext'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('limits'),
                                    new \PHPStan\Type\Constant\ConstantStringType('requests'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mountPath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('subPath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('runAsUser'),
                                    new \PHPStan\Type\Constant\ConstantStringType('runAsGroup'),
                                    new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                                    new \PHPStan\Type\Constant\ConstantStringType('allowPrivilegeEscalation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('readOnlyRootFilesystem'),
                                    new \PHPStan\Type\Constant\ConstantStringType('runAsNonRoot'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('emptyDir'),
                                new \PHPStan\Type\Constant\ConstantStringType('secret'),
                                new \PHPStan\Type\Constant\ConstantStringType('persistentVolumeClaim'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('medium'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sizeLimit'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('optional'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('claimName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('labels'),
                                new \PHPStan\Type\Constant\ConstantStringType('annotations'),
                                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('containers'),
                        new \PHPStan\Type\Constant\ConstantStringType('initContainers'),
                        new \PHPStan\Type\Constant\ConstantStringType('eksClusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('podName'),
                        new \PHPStan\Type\Constant\ConstantStringType('podNamespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('stoppedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerID'),
                            new \PHPStan\Type\Constant\ConstantStringType('exitCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerID'),
                            new \PHPStan\Type\Constant\ConstantStringType('exitCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('taskProperties'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containers'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerInstanceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                            new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipcMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('pidMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('runtimePlatform'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumes'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('command'),
                                new \PHPStan\Type\Constant\ConstantStringType('dependsOn'),
                                new \PHPStan\Type\Constant\ConstantStringType('environment'),
                                new \PHPStan\Type\Constant\ConstantStringType('essential'),
                                new \PHPStan\Type\Constant\ConstantStringType('image'),
                                new \PHPStan\Type\Constant\ConstantStringType('linuxParameters'),
                                new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('mountPoints'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                                new \PHPStan\Type\Constant\ConstantStringType('readonlyRootFilesystem'),
                                new \PHPStan\Type\Constant\ConstantStringType('repositoryCredentials'),
                                new \PHPStan\Type\Constant\ConstantStringType('resourceRequirements'),
                                new \PHPStan\Type\Constant\ConstantStringType('secrets'),
                                new \PHPStan\Type\Constant\ConstantStringType('ulimits'),
                                new \PHPStan\Type\Constant\ConstantStringType('user'),
                                new \PHPStan\Type\Constant\ConstantStringType('exitCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('reason'),
                                new \PHPStan\Type\Constant\ConstantStringType('logStreamName'),
                                new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('condition'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('devices'),
                                    new \PHPStan\Type\Constant\ConstantStringType('initProcessEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sharedMemorySize'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tmpfs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('maxSwap'),
                                    new \PHPStan\Type\Constant\ConstantStringType('swappiness'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('hostPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('permissions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('READ'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WRITE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MKNOD'),
                                        ])),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                        new \PHPStan\Type\Constant\ConstantStringType('size'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ])),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('logDriver'),
                                    new \PHPStan\Type\Constant\ConstantStringType('options'),
                                    new \PHPStan\Type\Constant\ConstantStringType('secretOptions'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('json-file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('syslog'),
                                        new \PHPStan\Type\Constant\ConstantStringType('journald'),
                                        new \PHPStan\Type\Constant\ConstantStringType('gelf'),
                                        new \PHPStan\Type\Constant\ConstantStringType('fluentd'),
                                        new \PHPStan\Type\Constant\ConstantStringType('awslogs'),
                                        new \PHPStan\Type\Constant\ConstantStringType('splunk'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                    new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sourceVolume'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('credentialsParameter'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GPU'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VCPU'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MEMORY'),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('hardLimit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('softLimit'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ipv6Address'),
                                    new \PHPStan\Type\Constant\ConstantStringType('privateIpv4Address'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('operatingSystemFamily'),
                                new \PHPStan\Type\Constant\ConstantStringType('cpuArchitecture'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('host'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('efsVolumeConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('sourcePath'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('fileSystemId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rootDirectory'),
                                    new \PHPStan\Type\Constant\ConstantStringType('transitEncryption'),
                                    new \PHPStan\Type\Constant\ConstantStringType('transitEncryptionPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('authorizationConfig'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('accessPointId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iam'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                    ]),
                                ]),
                            ])),
                        ])),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('consumableResourceList'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('consumableResource'),
                            new \PHPStan\Type\Constant\ConstantStringType('quantity'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeSchedulingPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('schedulingPolicies'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('fairsharePolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('shareDecaySeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeReservation'),
                        new \PHPStan\Type\Constant\ConstantStringType('shareDistribution'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('shareIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('weightFactor'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
            ]),
        ]);
    }
    private function getJobQueueSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('frontOfQueue'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobs'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('earliestTimeAtPosition'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function listConsumableResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('consumableResources'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('consumableResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('consumableResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalQuantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('inUseQuantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('stoppedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('container'),
                    new \PHPStan\Type\Constant\ConstantStringType('arrayProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodeProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobDefinition'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('exitCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('size'),
                        new \PHPStan\Type\Constant\ConstantStringType('index'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('isMainNode'),
                        new \PHPStan\Type\Constant\ConstantStringType('numNodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodeIndex'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listJobsByConsumableResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobs'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobQueueArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobDefinitionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('shareIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('consumableResourceProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('consumableResourceList'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('consumableResource'),
                            new \PHPStan\Type\Constant\ConstantStringType('quantity'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSchedulingPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('schedulingPolicies'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                ], [
                    new \PHPStan\Type\StringType(),
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
    private function registerJobDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobDefinitionName'),
                new \PHPStan\Type\Constant\ConstantStringType('jobDefinitionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('revision'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function submitJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
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
    private function terminateJob(): ?\PHPStan\Type\Type
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
    private function updateComputeEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('computeEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('computeEnvironmentArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateConsumableResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('consumableResourceName'),
                new \PHPStan\Type\Constant\ConstantStringType('consumableResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('totalQuantity'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function updateJobQueue(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobQueueName'),
                new \PHPStan\Type\Constant\ConstantStringType('jobQueueArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateSchedulingPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}