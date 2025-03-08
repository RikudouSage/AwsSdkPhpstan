<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class EcsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Ecs\EcsClient>
     */
    public function getClass(): string
    {
        return \Aws\Ecs\EcsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createCapacityProvider',
            'createCluster',
            'createService',
            'createTaskSet',
            'deleteAccountSetting',
            'deleteAttributes',
            'deleteCapacityProvider',
            'deleteCluster',
            'deleteService',
            'deleteTaskDefinitions',
            'deleteTaskSet',
            'deregisterContainerInstance',
            'deregisterTaskDefinition',
            'describeCapacityProviders',
            'describeClusters',
            'describeContainerInstances',
            'describeServiceDeployments',
            'describeServiceRevisions',
            'describeServices',
            'describeTaskDefinition',
            'describeTaskSets',
            'describeTasks',
            'discoverPollEndpoint',
            'executeCommand',
            'getTaskProtection',
            'listAccountSettings',
            'listAttributes',
            'listClusters',
            'listContainerInstances',
            'listServiceDeployments',
            'listServices',
            'listServicesByNamespace',
            'listTagsForResource',
            'listTaskDefinitionFamilies',
            'listTaskDefinitions',
            'listTasks',
            'putAccountSetting',
            'putAccountSettingDefault',
            'putAttributes',
            'putClusterCapacityProviders',
            'registerContainerInstance',
            'registerTaskDefinition',
            'runTask',
            'startTask',
            'stopTask',
            'submitAttachmentStateChanges',
            'submitContainerStateChange',
            'submitTaskStateChange',
            'tagResource',
            'untagResource',
            'updateCapacityProvider',
            'updateCluster',
            'updateClusterSettings',
            'updateContainerAgent',
            'updateContainerInstancesState',
            'updateService',
            'updateServicePrimaryTaskSet',
            'updateTaskProtection',
            'updateTaskSet',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createCapacityProvider' => $this->createCapacityProvider(),
            'createCluster' => $this->createCluster(),
            'createService' => $this->createService(),
            'createTaskSet' => $this->createTaskSet(),
            'deleteAccountSetting' => $this->deleteAccountSetting(),
            'deleteAttributes' => $this->deleteAttributes(),
            'deleteCapacityProvider' => $this->deleteCapacityProvider(),
            'deleteCluster' => $this->deleteCluster(),
            'deleteService' => $this->deleteService(),
            'deleteTaskDefinitions' => $this->deleteTaskDefinitions(),
            'deleteTaskSet' => $this->deleteTaskSet(),
            'deregisterContainerInstance' => $this->deregisterContainerInstance(),
            'deregisterTaskDefinition' => $this->deregisterTaskDefinition(),
            'describeCapacityProviders' => $this->describeCapacityProviders(),
            'describeClusters' => $this->describeClusters(),
            'describeContainerInstances' => $this->describeContainerInstances(),
            'describeServiceDeployments' => $this->describeServiceDeployments(),
            'describeServiceRevisions' => $this->describeServiceRevisions(),
            'describeServices' => $this->describeServices(),
            'describeTaskDefinition' => $this->describeTaskDefinition(),
            'describeTaskSets' => $this->describeTaskSets(),
            'describeTasks' => $this->describeTasks(),
            'discoverPollEndpoint' => $this->discoverPollEndpoint(),
            'executeCommand' => $this->executeCommand(),
            'getTaskProtection' => $this->getTaskProtection(),
            'listAccountSettings' => $this->listAccountSettings(),
            'listAttributes' => $this->listAttributes(),
            'listClusters' => $this->listClusters(),
            'listContainerInstances' => $this->listContainerInstances(),
            'listServiceDeployments' => $this->listServiceDeployments(),
            'listServices' => $this->listServices(),
            'listServicesByNamespace' => $this->listServicesByNamespace(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTaskDefinitionFamilies' => $this->listTaskDefinitionFamilies(),
            'listTaskDefinitions' => $this->listTaskDefinitions(),
            'listTasks' => $this->listTasks(),
            'putAccountSetting' => $this->putAccountSetting(),
            'putAccountSettingDefault' => $this->putAccountSettingDefault(),
            'putAttributes' => $this->putAttributes(),
            'putClusterCapacityProviders' => $this->putClusterCapacityProviders(),
            'registerContainerInstance' => $this->registerContainerInstance(),
            'registerTaskDefinition' => $this->registerTaskDefinition(),
            'runTask' => $this->runTask(),
            'startTask' => $this->startTask(),
            'stopTask' => $this->stopTask(),
            'submitAttachmentStateChanges' => $this->submitAttachmentStateChanges(),
            'submitContainerStateChange' => $this->submitContainerStateChange(),
            'submitTaskStateChange' => $this->submitTaskStateChange(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateCapacityProvider' => $this->updateCapacityProvider(),
            'updateCluster' => $this->updateCluster(),
            'updateClusterSettings' => $this->updateClusterSettings(),
            'updateContainerAgent' => $this->updateContainerAgent(),
            'updateContainerInstancesState' => $this->updateContainerInstancesState(),
            'updateService' => $this->updateService(),
            'updateServicePrimaryTaskSet' => $this->updateServicePrimaryTaskSet(),
            'updateTaskProtection' => $this->updateTaskProtection(),
            'updateTaskSet' => $this->updateTaskSet(),
        };
    }
    private function createCapacityProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroupProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateStatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedScaling'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedTerminationProtection'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedDraining'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetCapacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('minimumScalingStepSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('maximumScalingStepSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceWarmupPeriod'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
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
    private function createCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredContainerInstancesCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeServicesCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('statistics'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('settings'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviders'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultCapacityProviderStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachmentsStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceConnectDefaults'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('executeCommandConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedStorageConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('logging'),
                            new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('OVERRIDE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('cloudWatchEncryptionEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3EncryptionEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3KeyPrefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorageKmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('containerInsights'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('service'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('loadBalancers'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRegistries'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('desiredCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskSets'),
                    new \PHPStan\Type\Constant\ConstantStringType('deployments'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('events'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('placementConstraints'),
                    new \PHPStan\Type\Constant\ConstantStringType('placementStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthCheckGracePeriodSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('schedulingStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentController'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableECSManagedTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('propagateTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableExecuteCommand'),
                    new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneRebalancing'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('loadBalancerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('registryArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentCircuitBreaker'),
                        new \PHPStan\Type\Constant\ConstantStringType('maximumPercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('minimumHealthyPercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('alarms'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enable'),
                            new \PHPStan\Type\Constant\ConstantStringType('rollback'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('alarmNames'),
                            new \PHPStan\Type\Constant\ConstantStringType('rollback'),
                            new \PHPStan\Type\Constant\ConstantStringType('enable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskSetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('startedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('computedDesiredCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('pendingCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('runningCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProviderStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('loadBalancers'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceRegistries'),
                        new \PHPStan\Type\Constant\ConstantStringType('scale'),
                        new \PHPStan\Type\Constant\ConstantStringType('stabilityStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('stabilityStatusAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                            new \PHPStan\Type\Constant\ConstantStringType('weight'),
                            new \PHPStan\Type\Constant\ConstantStringType('base'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetGroupArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('loadBalancerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('registryArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('port'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('PERCENT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STEADY_STATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('STABILIZING'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('desiredCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('pendingCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('runningCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('failedTasks'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProviderStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                        new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('rolloutState'),
                        new \PHPStan\Type\Constant\ConstantStringType('rolloutStateReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceConnectConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceConnectResources'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumeConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcLatticeConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                            new \PHPStan\Type\Constant\ConstantStringType('weight'),
                            new \PHPStan\Type\Constant\ConstantStringType('base'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                            new \PHPStan\Type\Constant\ConstantStringType('services'),
                            new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('portName'),
                                new \PHPStan\Type\Constant\ConstantStringType('discoveryName'),
                                new \PHPStan\Type\Constant\ConstantStringType('clientAliases'),
                                new \PHPStan\Type\Constant\ConstantStringType('ingressPortOverride'),
                                new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('dnsName'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('idleTimeoutSeconds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('perRequestTimeoutSeconds'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateAuthority'),
                                    new \PHPStan\Type\Constant\ConstantStringType('kmsKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('awsPcaAuthorityArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
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
                                    new \PHPStan\Type\Constant\ConstantStringType('awsfirelens'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('discoveryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('discoveryArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('managedEBSVolume'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('encrypted'),
                                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                                new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                                new \PHPStan\Type\Constant\ConstantStringType('snapshotId'),
                                new \PHPStan\Type\Constant\ConstantStringType('iops'),
                                new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('tagSpecifications'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('filesystemType'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                                    new \PHPStan\Type\Constant\ConstantStringType('propagateTags'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('volume'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('TASK_DEFINITION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ext3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ext4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('xfs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ntfs'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetGroupArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('portName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('expression'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('distinctInstance'),
                            new \PHPStan\Type\Constant\ConstantStringType('memberOf'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('field'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('random'),
                            new \PHPStan\Type\Constant\ConstantStringType('spread'),
                            new \PHPStan\Type\Constant\ConstantStringType('binpack'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICA'),
                        new \PHPStan\Type\Constant\ConstantStringType('DAEMON'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CODE_DEPLOY'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TASK_DEFINITION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createTaskSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskSetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                    new \PHPStan\Type\Constant\ConstantStringType('computedDesiredCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('loadBalancers'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRegistries'),
                    new \PHPStan\Type\Constant\ConstantStringType('scale'),
                    new \PHPStan\Type\Constant\ConstantStringType('stabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('stabilityStatusAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('loadBalancerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('registryArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantStringType('PERCENT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STEADY_STATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STABILIZING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteAccountSetting(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('setting'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                    new \PHPStan\Type\Constant\ConstantStringType('principalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceLongArnFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskLongArnFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerInstanceLongArnFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsvpcTrunking'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerInsights'),
                        new \PHPStan\Type\Constant\ConstantStringType('fargateFIPSMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('tagResourceAuthorization'),
                        new \PHPStan\Type\Constant\ConstantStringType('fargateTaskRetirementWaitPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('guardDutyActivate'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                        new \PHPStan\Type\Constant\ConstantStringType('aws_managed'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('attributes'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('container-instance'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteCapacityProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroupProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateStatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedScaling'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedTerminationProtection'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedDraining'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetCapacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('minimumScalingStepSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('maximumScalingStepSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceWarmupPeriod'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
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
    private function deleteCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredContainerInstancesCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeServicesCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('statistics'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('settings'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviders'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultCapacityProviderStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachmentsStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceConnectDefaults'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('executeCommandConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedStorageConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('logging'),
                            new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('OVERRIDE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('cloudWatchEncryptionEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3EncryptionEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3KeyPrefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorageKmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('containerInsights'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('service'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('loadBalancers'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRegistries'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('desiredCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskSets'),
                    new \PHPStan\Type\Constant\ConstantStringType('deployments'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('events'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('placementConstraints'),
                    new \PHPStan\Type\Constant\ConstantStringType('placementStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthCheckGracePeriodSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('schedulingStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentController'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableECSManagedTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('propagateTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableExecuteCommand'),
                    new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneRebalancing'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('loadBalancerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('registryArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentCircuitBreaker'),
                        new \PHPStan\Type\Constant\ConstantStringType('maximumPercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('minimumHealthyPercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('alarms'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enable'),
                            new \PHPStan\Type\Constant\ConstantStringType('rollback'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('alarmNames'),
                            new \PHPStan\Type\Constant\ConstantStringType('rollback'),
                            new \PHPStan\Type\Constant\ConstantStringType('enable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskSetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('startedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('computedDesiredCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('pendingCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('runningCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProviderStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('loadBalancers'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceRegistries'),
                        new \PHPStan\Type\Constant\ConstantStringType('scale'),
                        new \PHPStan\Type\Constant\ConstantStringType('stabilityStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('stabilityStatusAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                            new \PHPStan\Type\Constant\ConstantStringType('weight'),
                            new \PHPStan\Type\Constant\ConstantStringType('base'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetGroupArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('loadBalancerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('registryArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('port'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('PERCENT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STEADY_STATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('STABILIZING'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('desiredCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('pendingCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('runningCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('failedTasks'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProviderStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                        new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('rolloutState'),
                        new \PHPStan\Type\Constant\ConstantStringType('rolloutStateReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceConnectConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceConnectResources'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumeConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcLatticeConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                            new \PHPStan\Type\Constant\ConstantStringType('weight'),
                            new \PHPStan\Type\Constant\ConstantStringType('base'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                            new \PHPStan\Type\Constant\ConstantStringType('services'),
                            new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('portName'),
                                new \PHPStan\Type\Constant\ConstantStringType('discoveryName'),
                                new \PHPStan\Type\Constant\ConstantStringType('clientAliases'),
                                new \PHPStan\Type\Constant\ConstantStringType('ingressPortOverride'),
                                new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('dnsName'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('idleTimeoutSeconds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('perRequestTimeoutSeconds'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateAuthority'),
                                    new \PHPStan\Type\Constant\ConstantStringType('kmsKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('awsPcaAuthorityArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
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
                                    new \PHPStan\Type\Constant\ConstantStringType('awsfirelens'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('discoveryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('discoveryArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('managedEBSVolume'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('encrypted'),
                                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                                new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                                new \PHPStan\Type\Constant\ConstantStringType('snapshotId'),
                                new \PHPStan\Type\Constant\ConstantStringType('iops'),
                                new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('tagSpecifications'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('filesystemType'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                                    new \PHPStan\Type\Constant\ConstantStringType('propagateTags'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('volume'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('TASK_DEFINITION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ext3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ext4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('xfs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ntfs'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetGroupArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('portName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('expression'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('distinctInstance'),
                            new \PHPStan\Type\Constant\ConstantStringType('memberOf'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('field'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('random'),
                            new \PHPStan\Type\Constant\ConstantStringType('spread'),
                            new \PHPStan\Type\Constant\ConstantStringType('binpack'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICA'),
                        new \PHPStan\Type\Constant\ConstantStringType('DAEMON'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CODE_DEPLOY'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TASK_DEFINITION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteTaskDefinitions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskDefinitions'),
                new \PHPStan\Type\Constant\ConstantStringType('failures'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('taskDefinitionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('containerDefinitions'),
                    new \PHPStan\Type\Constant\ConstantStringType('family'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumes'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('requiresAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('placementConstraints'),
                    new \PHPStan\Type\Constant\ConstantStringType('compatibilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('runtimePlatform'),
                    new \PHPStan\Type\Constant\ConstantStringType('requiresCompatibilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                    new \PHPStan\Type\Constant\ConstantStringType('memory'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferenceAccelerators'),
                    new \PHPStan\Type\Constant\ConstantStringType('pidMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipcMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('proxyConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deregisteredAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableFaultInjection'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('memoryReservation'),
                        new \PHPStan\Type\Constant\ConstantStringType('links'),
                        new \PHPStan\Type\Constant\ConstantStringType('portMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('essential'),
                        new \PHPStan\Type\Constant\ConstantStringType('restartPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('entryPoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                        new \PHPStan\Type\Constant\ConstantStringType('environment'),
                        new \PHPStan\Type\Constant\ConstantStringType('environmentFiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('mountPoints'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumesFrom'),
                        new \PHPStan\Type\Constant\ConstantStringType('linuxParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('secrets'),
                        new \PHPStan\Type\Constant\ConstantStringType('dependsOn'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('versionConsistency'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                        new \PHPStan\Type\Constant\ConstantStringType('workingDirectory'),
                        new \PHPStan\Type\Constant\ConstantStringType('disableNetworking'),
                        new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                        new \PHPStan\Type\Constant\ConstantStringType('readonlyRootFilesystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('dnsServers'),
                        new \PHPStan\Type\Constant\ConstantStringType('dnsSearchDomains'),
                        new \PHPStan\Type\Constant\ConstantStringType('extraHosts'),
                        new \PHPStan\Type\Constant\ConstantStringType('dockerSecurityOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('interactive'),
                        new \PHPStan\Type\Constant\ConstantStringType('pseudoTerminal'),
                        new \PHPStan\Type\Constant\ConstantStringType('dockerLabels'),
                        new \PHPStan\Type\Constant\ConstantStringType('ulimits'),
                        new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('healthCheck'),
                        new \PHPStan\Type\Constant\ConstantStringType('systemControls'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceRequirements'),
                        new \PHPStan\Type\Constant\ConstantStringType('firelensConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('credentialSpecs'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsParameter'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('appProtocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPortRange'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('http'),
                                new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ignoredExitCodes'),
                            new \PHPStan\Type\Constant\ConstantStringType('restartAttemptPeriod'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('s3'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceVolume'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                            new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceContainer'),
                            new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('capabilities'),
                            new \PHPStan\Type\Constant\ConstantStringType('devices'),
                            new \PHPStan\Type\Constant\ConstantStringType('initProcessEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('sharedMemorySize'),
                            new \PHPStan\Type\Constant\ConstantStringType('tmpfs'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxSwap'),
                            new \PHPStan\Type\Constant\ConstantStringType('swappiness'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('add'),
                                new \PHPStan\Type\Constant\ConstantStringType('drop'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('hostPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('permissions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('read'),
                                    new \PHPStan\Type\Constant\ConstantStringType('write'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mknod'),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('size'),
                                new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('condition'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('START'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('softLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('hardLimit'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('core'),
                                new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                                new \PHPStan\Type\Constant\ConstantStringType('data'),
                                new \PHPStan\Type\Constant\ConstantStringType('fsize'),
                                new \PHPStan\Type\Constant\ConstantStringType('locks'),
                                new \PHPStan\Type\Constant\ConstantStringType('memlock'),
                                new \PHPStan\Type\Constant\ConstantStringType('msgqueue'),
                                new \PHPStan\Type\Constant\ConstantStringType('nice'),
                                new \PHPStan\Type\Constant\ConstantStringType('nofile'),
                                new \PHPStan\Type\Constant\ConstantStringType('nproc'),
                                new \PHPStan\Type\Constant\ConstantStringType('rss'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtprio'),
                                new \PHPStan\Type\Constant\ConstantStringType('rttime'),
                                new \PHPStan\Type\Constant\ConstantStringType('sigpending'),
                                new \PHPStan\Type\Constant\ConstantStringType('stack'),
                            ]),
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
                                new \PHPStan\Type\Constant\ConstantStringType('awsfirelens'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('command'),
                            new \PHPStan\Type\Constant\ConstantStringType('interval'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('retries'),
                            new \PHPStan\Type\Constant\ConstantStringType('startPeriod'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GPU'),
                                new \PHPStan\Type\Constant\ConstantStringType('InferenceAccelerator'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('options'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('fluentd'),
                                new \PHPStan\Type\Constant\ConstantStringType('fluentbit'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('bridge'),
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsvpc'),
                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('dockerVolumeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('efsVolumeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('fsxWindowsFileServerVolumeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('configuredAtLaunch'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourcePath'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('autoprovision'),
                            new \PHPStan\Type\Constant\ConstantStringType('driver'),
                            new \PHPStan\Type\Constant\ConstantStringType('driverOpts'),
                            new \PHPStan\Type\Constant\ConstantStringType('labels'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('task'),
                                new \PHPStan\Type\Constant\ConstantStringType('shared'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
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
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fileSystemId'),
                            new \PHPStan\Type\Constant\ConstantStringType('rootDirectory'),
                            new \PHPStan\Type\Constant\ConstantStringType('authorizationConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('credentialsParameter'),
                                new \PHPStan\Type\Constant\ConstantStringType('domain'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('container-instance'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('expression'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('memberOf'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cpuArchitecture'),
                        new \PHPStan\Type\Constant\ConstantStringType('operatingSystemFamily'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('X86_64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM64'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_FULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016_FULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2004_CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022_CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022_FULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_20H2_CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('task'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('task'),
                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('properties'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('APPMESH'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('detail'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteTaskSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskSetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                    new \PHPStan\Type\Constant\ConstantStringType('computedDesiredCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('loadBalancers'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRegistries'),
                    new \PHPStan\Type\Constant\ConstantStringType('scale'),
                    new \PHPStan\Type\Constant\ConstantStringType('stabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('stabilityStatusAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('loadBalancerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('registryArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantStringType('PERCENT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STEADY_STATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STABILIZING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deregisterContainerInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('containerInstance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('containerInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('remainingResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentConnected'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentUpdateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('agentHash'),
                        new \PHPStan\Type\Constant\ConstantStringType('dockerVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('stringSetValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('stringSetValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STAGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('container-instance'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('overallStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OK'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastStatusChange'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINER_RUNTIME'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('OK'),
                                new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_DATA'),
                                new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deregisterTaskDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('taskDefinitionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('containerDefinitions'),
                    new \PHPStan\Type\Constant\ConstantStringType('family'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumes'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('requiresAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('placementConstraints'),
                    new \PHPStan\Type\Constant\ConstantStringType('compatibilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('runtimePlatform'),
                    new \PHPStan\Type\Constant\ConstantStringType('requiresCompatibilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                    new \PHPStan\Type\Constant\ConstantStringType('memory'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferenceAccelerators'),
                    new \PHPStan\Type\Constant\ConstantStringType('pidMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipcMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('proxyConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deregisteredAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableFaultInjection'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('memoryReservation'),
                        new \PHPStan\Type\Constant\ConstantStringType('links'),
                        new \PHPStan\Type\Constant\ConstantStringType('portMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('essential'),
                        new \PHPStan\Type\Constant\ConstantStringType('restartPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('entryPoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                        new \PHPStan\Type\Constant\ConstantStringType('environment'),
                        new \PHPStan\Type\Constant\ConstantStringType('environmentFiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('mountPoints'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumesFrom'),
                        new \PHPStan\Type\Constant\ConstantStringType('linuxParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('secrets'),
                        new \PHPStan\Type\Constant\ConstantStringType('dependsOn'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('versionConsistency'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                        new \PHPStan\Type\Constant\ConstantStringType('workingDirectory'),
                        new \PHPStan\Type\Constant\ConstantStringType('disableNetworking'),
                        new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                        new \PHPStan\Type\Constant\ConstantStringType('readonlyRootFilesystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('dnsServers'),
                        new \PHPStan\Type\Constant\ConstantStringType('dnsSearchDomains'),
                        new \PHPStan\Type\Constant\ConstantStringType('extraHosts'),
                        new \PHPStan\Type\Constant\ConstantStringType('dockerSecurityOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('interactive'),
                        new \PHPStan\Type\Constant\ConstantStringType('pseudoTerminal'),
                        new \PHPStan\Type\Constant\ConstantStringType('dockerLabels'),
                        new \PHPStan\Type\Constant\ConstantStringType('ulimits'),
                        new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('healthCheck'),
                        new \PHPStan\Type\Constant\ConstantStringType('systemControls'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceRequirements'),
                        new \PHPStan\Type\Constant\ConstantStringType('firelensConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('credentialSpecs'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsParameter'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('appProtocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPortRange'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('http'),
                                new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ignoredExitCodes'),
                            new \PHPStan\Type\Constant\ConstantStringType('restartAttemptPeriod'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('s3'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceVolume'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                            new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceContainer'),
                            new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('capabilities'),
                            new \PHPStan\Type\Constant\ConstantStringType('devices'),
                            new \PHPStan\Type\Constant\ConstantStringType('initProcessEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('sharedMemorySize'),
                            new \PHPStan\Type\Constant\ConstantStringType('tmpfs'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxSwap'),
                            new \PHPStan\Type\Constant\ConstantStringType('swappiness'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('add'),
                                new \PHPStan\Type\Constant\ConstantStringType('drop'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('hostPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('permissions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('read'),
                                    new \PHPStan\Type\Constant\ConstantStringType('write'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mknod'),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('size'),
                                new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('condition'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('START'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('softLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('hardLimit'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('core'),
                                new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                                new \PHPStan\Type\Constant\ConstantStringType('data'),
                                new \PHPStan\Type\Constant\ConstantStringType('fsize'),
                                new \PHPStan\Type\Constant\ConstantStringType('locks'),
                                new \PHPStan\Type\Constant\ConstantStringType('memlock'),
                                new \PHPStan\Type\Constant\ConstantStringType('msgqueue'),
                                new \PHPStan\Type\Constant\ConstantStringType('nice'),
                                new \PHPStan\Type\Constant\ConstantStringType('nofile'),
                                new \PHPStan\Type\Constant\ConstantStringType('nproc'),
                                new \PHPStan\Type\Constant\ConstantStringType('rss'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtprio'),
                                new \PHPStan\Type\Constant\ConstantStringType('rttime'),
                                new \PHPStan\Type\Constant\ConstantStringType('sigpending'),
                                new \PHPStan\Type\Constant\ConstantStringType('stack'),
                            ]),
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
                                new \PHPStan\Type\Constant\ConstantStringType('awsfirelens'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('command'),
                            new \PHPStan\Type\Constant\ConstantStringType('interval'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('retries'),
                            new \PHPStan\Type\Constant\ConstantStringType('startPeriod'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GPU'),
                                new \PHPStan\Type\Constant\ConstantStringType('InferenceAccelerator'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('options'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('fluentd'),
                                new \PHPStan\Type\Constant\ConstantStringType('fluentbit'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('bridge'),
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsvpc'),
                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('dockerVolumeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('efsVolumeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('fsxWindowsFileServerVolumeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('configuredAtLaunch'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourcePath'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('autoprovision'),
                            new \PHPStan\Type\Constant\ConstantStringType('driver'),
                            new \PHPStan\Type\Constant\ConstantStringType('driverOpts'),
                            new \PHPStan\Type\Constant\ConstantStringType('labels'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('task'),
                                new \PHPStan\Type\Constant\ConstantStringType('shared'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
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
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fileSystemId'),
                            new \PHPStan\Type\Constant\ConstantStringType('rootDirectory'),
                            new \PHPStan\Type\Constant\ConstantStringType('authorizationConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('credentialsParameter'),
                                new \PHPStan\Type\Constant\ConstantStringType('domain'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('container-instance'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('expression'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('memberOf'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cpuArchitecture'),
                        new \PHPStan\Type\Constant\ConstantStringType('operatingSystemFamily'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('X86_64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM64'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_FULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016_FULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2004_CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022_CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022_FULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_20H2_CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('task'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('task'),
                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('properties'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('APPMESH'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function describeCapacityProviders(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('capacityProviders'),
                new \PHPStan\Type\Constant\ConstantStringType('failures'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroupProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateStatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedScaling'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedTerminationProtection'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedDraining'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetCapacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('minimumScalingStepSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('maximumScalingStepSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceWarmupPeriod'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('detail'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeClusters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('clusters'),
                new \PHPStan\Type\Constant\ConstantStringType('failures'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredContainerInstancesCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeServicesCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('statistics'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('settings'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviders'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultCapacityProviderStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachmentsStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceConnectDefaults'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('executeCommandConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedStorageConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('logging'),
                            new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('OVERRIDE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('cloudWatchEncryptionEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3EncryptionEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3KeyPrefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorageKmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('containerInsights'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('detail'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeContainerInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('containerInstances'),
                new \PHPStan\Type\Constant\ConstantStringType('failures'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('containerInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('remainingResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentConnected'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentUpdateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('agentHash'),
                        new \PHPStan\Type\Constant\ConstantStringType('dockerVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('stringSetValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('stringSetValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STAGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('container-instance'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('overallStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OK'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastStatusChange'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINER_RUNTIME'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('OK'),
                                new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_DATA'),
                                new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('detail'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeServiceDeployments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceDeployments'),
                new \PHPStan\Type\Constant\ConstantStringType('failures'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('serviceDeploymentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('finishedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('stoppedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceServiceRevisions'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetServiceRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('rollback'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentCircuitBreaker'),
                    new \PHPStan\Type\Constant\ConstantStringType('alarms'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('requestedTaskCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('runningTaskCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('pendingTaskCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('requestedTaskCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('runningTaskCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('pendingTaskCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentCircuitBreaker'),
                        new \PHPStan\Type\Constant\ConstantStringType('maximumPercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('minimumHealthyPercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('alarms'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enable'),
                            new \PHPStan\Type\Constant\ConstantStringType('rollback'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('alarmNames'),
                            new \PHPStan\Type\Constant\ConstantStringType('rollback'),
                            new \PHPStan\Type\Constant\ConstantStringType('enable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceRevisionArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('threshold'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TRIGGERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONITORING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONITORING_COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('alarmNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('triggeredAlarmNames'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TRIGGERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONITORING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONITORING_COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('detail'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeServiceRevisions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceRevisions'),
                new \PHPStan\Type\Constant\ConstantStringType('failures'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRevisionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('loadBalancers'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRegistries'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('containerImages'),
                    new \PHPStan\Type\Constant\ConstantStringType('guardDutyEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceConnectConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumeConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcLatticeConfigurations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('loadBalancerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('registryArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('imageDigest'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('services'),
                        new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('portName'),
                            new \PHPStan\Type\Constant\ConstantStringType('discoveryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('clientAliases'),
                            new \PHPStan\Type\Constant\ConstantStringType('ingressPortOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('tls'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('dnsName'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('idleTimeoutSeconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRequestTimeoutSeconds'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateAuthority'),
                                new \PHPStan\Type\Constant\ConstantStringType('kmsKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('awsPcaAuthorityArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
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
                                new \PHPStan\Type\Constant\ConstantStringType('awsfirelens'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedEBSVolume'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('encrypted'),
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                            new \PHPStan\Type\Constant\ConstantStringType('snapshotId'),
                            new \PHPStan\Type\Constant\ConstantStringType('iops'),
                            new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('tagSpecifications'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('filesystemType'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                                new \PHPStan\Type\Constant\ConstantStringType('propagateTags'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('volume'),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TASK_DEFINITION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ext3'),
                                new \PHPStan\Type\Constant\ConstantStringType('ext4'),
                                new \PHPStan\Type\Constant\ConstantStringType('xfs'),
                                new \PHPStan\Type\Constant\ConstantStringType('ntfs'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('portName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('detail'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeServices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('services'),
                new \PHPStan\Type\Constant\ConstantStringType('failures'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('loadBalancers'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRegistries'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('desiredCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskSets'),
                    new \PHPStan\Type\Constant\ConstantStringType('deployments'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('events'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('placementConstraints'),
                    new \PHPStan\Type\Constant\ConstantStringType('placementStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthCheckGracePeriodSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('schedulingStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentController'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableECSManagedTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('propagateTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableExecuteCommand'),
                    new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneRebalancing'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('loadBalancerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('registryArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentCircuitBreaker'),
                        new \PHPStan\Type\Constant\ConstantStringType('maximumPercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('minimumHealthyPercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('alarms'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enable'),
                            new \PHPStan\Type\Constant\ConstantStringType('rollback'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('alarmNames'),
                            new \PHPStan\Type\Constant\ConstantStringType('rollback'),
                            new \PHPStan\Type\Constant\ConstantStringType('enable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskSetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('startedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('computedDesiredCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('pendingCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('runningCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProviderStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('loadBalancers'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceRegistries'),
                        new \PHPStan\Type\Constant\ConstantStringType('scale'),
                        new \PHPStan\Type\Constant\ConstantStringType('stabilityStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('stabilityStatusAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                            new \PHPStan\Type\Constant\ConstantStringType('weight'),
                            new \PHPStan\Type\Constant\ConstantStringType('base'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetGroupArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('loadBalancerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('registryArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('port'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('PERCENT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STEADY_STATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('STABILIZING'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('desiredCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('pendingCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('runningCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('failedTasks'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProviderStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                        new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('rolloutState'),
                        new \PHPStan\Type\Constant\ConstantStringType('rolloutStateReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceConnectConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceConnectResources'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumeConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcLatticeConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                            new \PHPStan\Type\Constant\ConstantStringType('weight'),
                            new \PHPStan\Type\Constant\ConstantStringType('base'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                            new \PHPStan\Type\Constant\ConstantStringType('services'),
                            new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('portName'),
                                new \PHPStan\Type\Constant\ConstantStringType('discoveryName'),
                                new \PHPStan\Type\Constant\ConstantStringType('clientAliases'),
                                new \PHPStan\Type\Constant\ConstantStringType('ingressPortOverride'),
                                new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('dnsName'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('idleTimeoutSeconds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('perRequestTimeoutSeconds'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateAuthority'),
                                    new \PHPStan\Type\Constant\ConstantStringType('kmsKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('awsPcaAuthorityArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
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
                                    new \PHPStan\Type\Constant\ConstantStringType('awsfirelens'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('discoveryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('discoveryArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('managedEBSVolume'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('encrypted'),
                                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                                new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                                new \PHPStan\Type\Constant\ConstantStringType('snapshotId'),
                                new \PHPStan\Type\Constant\ConstantStringType('iops'),
                                new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('tagSpecifications'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('filesystemType'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                                    new \PHPStan\Type\Constant\ConstantStringType('propagateTags'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('volume'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('TASK_DEFINITION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ext3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ext4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('xfs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ntfs'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetGroupArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('portName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('expression'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('distinctInstance'),
                            new \PHPStan\Type\Constant\ConstantStringType('memberOf'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('field'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('random'),
                            new \PHPStan\Type\Constant\ConstantStringType('spread'),
                            new \PHPStan\Type\Constant\ConstantStringType('binpack'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICA'),
                        new \PHPStan\Type\Constant\ConstantStringType('DAEMON'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CODE_DEPLOY'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TASK_DEFINITION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('detail'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeTaskDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('taskDefinitionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('containerDefinitions'),
                    new \PHPStan\Type\Constant\ConstantStringType('family'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumes'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('requiresAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('placementConstraints'),
                    new \PHPStan\Type\Constant\ConstantStringType('compatibilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('runtimePlatform'),
                    new \PHPStan\Type\Constant\ConstantStringType('requiresCompatibilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                    new \PHPStan\Type\Constant\ConstantStringType('memory'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferenceAccelerators'),
                    new \PHPStan\Type\Constant\ConstantStringType('pidMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipcMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('proxyConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deregisteredAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableFaultInjection'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('memoryReservation'),
                        new \PHPStan\Type\Constant\ConstantStringType('links'),
                        new \PHPStan\Type\Constant\ConstantStringType('portMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('essential'),
                        new \PHPStan\Type\Constant\ConstantStringType('restartPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('entryPoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                        new \PHPStan\Type\Constant\ConstantStringType('environment'),
                        new \PHPStan\Type\Constant\ConstantStringType('environmentFiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('mountPoints'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumesFrom'),
                        new \PHPStan\Type\Constant\ConstantStringType('linuxParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('secrets'),
                        new \PHPStan\Type\Constant\ConstantStringType('dependsOn'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('versionConsistency'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                        new \PHPStan\Type\Constant\ConstantStringType('workingDirectory'),
                        new \PHPStan\Type\Constant\ConstantStringType('disableNetworking'),
                        new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                        new \PHPStan\Type\Constant\ConstantStringType('readonlyRootFilesystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('dnsServers'),
                        new \PHPStan\Type\Constant\ConstantStringType('dnsSearchDomains'),
                        new \PHPStan\Type\Constant\ConstantStringType('extraHosts'),
                        new \PHPStan\Type\Constant\ConstantStringType('dockerSecurityOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('interactive'),
                        new \PHPStan\Type\Constant\ConstantStringType('pseudoTerminal'),
                        new \PHPStan\Type\Constant\ConstantStringType('dockerLabels'),
                        new \PHPStan\Type\Constant\ConstantStringType('ulimits'),
                        new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('healthCheck'),
                        new \PHPStan\Type\Constant\ConstantStringType('systemControls'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceRequirements'),
                        new \PHPStan\Type\Constant\ConstantStringType('firelensConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('credentialSpecs'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsParameter'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('appProtocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPortRange'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('http'),
                                new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ignoredExitCodes'),
                            new \PHPStan\Type\Constant\ConstantStringType('restartAttemptPeriod'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('s3'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceVolume'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                            new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceContainer'),
                            new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('capabilities'),
                            new \PHPStan\Type\Constant\ConstantStringType('devices'),
                            new \PHPStan\Type\Constant\ConstantStringType('initProcessEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('sharedMemorySize'),
                            new \PHPStan\Type\Constant\ConstantStringType('tmpfs'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxSwap'),
                            new \PHPStan\Type\Constant\ConstantStringType('swappiness'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('add'),
                                new \PHPStan\Type\Constant\ConstantStringType('drop'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('hostPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('permissions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('read'),
                                    new \PHPStan\Type\Constant\ConstantStringType('write'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mknod'),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('size'),
                                new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('condition'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('START'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('softLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('hardLimit'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('core'),
                                new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                                new \PHPStan\Type\Constant\ConstantStringType('data'),
                                new \PHPStan\Type\Constant\ConstantStringType('fsize'),
                                new \PHPStan\Type\Constant\ConstantStringType('locks'),
                                new \PHPStan\Type\Constant\ConstantStringType('memlock'),
                                new \PHPStan\Type\Constant\ConstantStringType('msgqueue'),
                                new \PHPStan\Type\Constant\ConstantStringType('nice'),
                                new \PHPStan\Type\Constant\ConstantStringType('nofile'),
                                new \PHPStan\Type\Constant\ConstantStringType('nproc'),
                                new \PHPStan\Type\Constant\ConstantStringType('rss'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtprio'),
                                new \PHPStan\Type\Constant\ConstantStringType('rttime'),
                                new \PHPStan\Type\Constant\ConstantStringType('sigpending'),
                                new \PHPStan\Type\Constant\ConstantStringType('stack'),
                            ]),
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
                                new \PHPStan\Type\Constant\ConstantStringType('awsfirelens'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('command'),
                            new \PHPStan\Type\Constant\ConstantStringType('interval'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('retries'),
                            new \PHPStan\Type\Constant\ConstantStringType('startPeriod'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GPU'),
                                new \PHPStan\Type\Constant\ConstantStringType('InferenceAccelerator'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('options'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('fluentd'),
                                new \PHPStan\Type\Constant\ConstantStringType('fluentbit'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('bridge'),
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsvpc'),
                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('dockerVolumeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('efsVolumeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('fsxWindowsFileServerVolumeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('configuredAtLaunch'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourcePath'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('autoprovision'),
                            new \PHPStan\Type\Constant\ConstantStringType('driver'),
                            new \PHPStan\Type\Constant\ConstantStringType('driverOpts'),
                            new \PHPStan\Type\Constant\ConstantStringType('labels'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('task'),
                                new \PHPStan\Type\Constant\ConstantStringType('shared'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
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
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fileSystemId'),
                            new \PHPStan\Type\Constant\ConstantStringType('rootDirectory'),
                            new \PHPStan\Type\Constant\ConstantStringType('authorizationConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('credentialsParameter'),
                                new \PHPStan\Type\Constant\ConstantStringType('domain'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('container-instance'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('expression'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('memberOf'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cpuArchitecture'),
                        new \PHPStan\Type\Constant\ConstantStringType('operatingSystemFamily'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('X86_64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM64'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_FULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016_FULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2004_CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022_CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022_FULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_20H2_CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('task'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('task'),
                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('properties'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('APPMESH'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeTaskSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskSets'),
                new \PHPStan\Type\Constant\ConstantStringType('failures'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskSetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                    new \PHPStan\Type\Constant\ConstantStringType('computedDesiredCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('loadBalancers'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRegistries'),
                    new \PHPStan\Type\Constant\ConstantStringType('scale'),
                    new \PHPStan\Type\Constant\ConstantStringType('stabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('stabilityStatusAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('loadBalancerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('registryArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantStringType('PERCENT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STEADY_STATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STABILIZING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('detail'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tasks'),
                new \PHPStan\Type\Constant\ConstantStringType('failures'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectivity'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectivityAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('containerInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('containers'),
                    new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('desiredStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableExecuteCommand'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionStoppedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('group'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferenceAccelerators'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                    new \PHPStan\Type\Constant\ConstantStringType('memory'),
                    new \PHPStan\Type\Constant\ConstantStringType('overrides'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullStartedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullStoppedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('stoppedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('stoppedReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('stoppingAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskDefinitionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorage'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('container-instance'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('containerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('imageDigest'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtimeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('exitCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkBindings'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedAgents'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('memoryReservation'),
                        new \PHPStan\Type\Constant\ConstantStringType('gpuIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bindIP'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPortRange'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostPortRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('privateIpv4Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipv6Address'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lastStartedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastStatus'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExecuteCommandAgent'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('containerOverrides'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('inferenceAcceleratorOverrides'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('command'),
                            new \PHPStan\Type\Constant\ConstantStringType('environment'),
                            new \PHPStan\Type\Constant\ConstantStringType('environmentFiles'),
                            new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('memoryReservation'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceRequirements'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GPU'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InferenceAccelerator'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TaskFailedToStart'),
                        new \PHPStan\Type\Constant\ConstantStringType('EssentialContainerExited'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserInitiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceSchedulerInitiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpotInterruption'),
                        new \PHPStan\Type\Constant\ConstantStringType('TerminationNotice'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('detail'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function discoverPollEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('telemetryEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceConnectEndpoint'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function executeCommand(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('containerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                new \PHPStan\Type\Constant\ConstantStringType('interactive'),
                new \PHPStan\Type\Constant\ConstantStringType('session'),
                new \PHPStan\Type\Constant\ConstantStringType('taskArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('streamUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('tokenValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTaskProtection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('protectedTasks'),
                new \PHPStan\Type\Constant\ConstantStringType('failures'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('taskArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('protectionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('expirationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('detail'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listAccountSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('settings'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                    new \PHPStan\Type\Constant\ConstantStringType('principalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceLongArnFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskLongArnFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerInstanceLongArnFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsvpcTrunking'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerInsights'),
                        new \PHPStan\Type\Constant\ConstantStringType('fargateFIPSMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('tagResourceAuthorization'),
                        new \PHPStan\Type\Constant\ConstantStringType('fargateTaskRetirementWaitPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('guardDutyActivate'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                        new \PHPStan\Type\Constant\ConstantStringType('aws_managed'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('container-instance'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listClusters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('clusterArns'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listContainerInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('containerInstanceArns'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServiceDeployments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceDeployments'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('serviceDeploymentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('finishedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetServiceRevisionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceArns'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServicesByNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceArns'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listTaskDefinitionFamilies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('families'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTaskDefinitions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskDefinitionArns'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskArns'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putAccountSetting(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('setting'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                    new \PHPStan\Type\Constant\ConstantStringType('principalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceLongArnFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskLongArnFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerInstanceLongArnFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsvpcTrunking'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerInsights'),
                        new \PHPStan\Type\Constant\ConstantStringType('fargateFIPSMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('tagResourceAuthorization'),
                        new \PHPStan\Type\Constant\ConstantStringType('fargateTaskRetirementWaitPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('guardDutyActivate'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                        new \PHPStan\Type\Constant\ConstantStringType('aws_managed'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function putAccountSettingDefault(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('setting'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                    new \PHPStan\Type\Constant\ConstantStringType('principalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceLongArnFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskLongArnFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerInstanceLongArnFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsvpcTrunking'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerInsights'),
                        new \PHPStan\Type\Constant\ConstantStringType('fargateFIPSMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('tagResourceAuthorization'),
                        new \PHPStan\Type\Constant\ConstantStringType('fargateTaskRetirementWaitPeriod'),
                        new \PHPStan\Type\Constant\ConstantStringType('guardDutyActivate'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                        new \PHPStan\Type\Constant\ConstantStringType('aws_managed'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function putAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('attributes'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('container-instance'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function putClusterCapacityProviders(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredContainerInstancesCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeServicesCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('statistics'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('settings'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviders'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultCapacityProviderStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachmentsStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceConnectDefaults'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('executeCommandConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedStorageConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('logging'),
                            new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('OVERRIDE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('cloudWatchEncryptionEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3EncryptionEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3KeyPrefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorageKmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('containerInsights'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function registerContainerInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('containerInstance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('containerInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('remainingResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentConnected'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentUpdateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('agentHash'),
                        new \PHPStan\Type\Constant\ConstantStringType('dockerVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('stringSetValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('stringSetValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STAGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('container-instance'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('overallStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OK'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastStatusChange'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINER_RUNTIME'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('OK'),
                                new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_DATA'),
                                new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function registerTaskDefinition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('taskDefinitionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('containerDefinitions'),
                    new \PHPStan\Type\Constant\ConstantStringType('family'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumes'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('requiresAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('placementConstraints'),
                    new \PHPStan\Type\Constant\ConstantStringType('compatibilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('runtimePlatform'),
                    new \PHPStan\Type\Constant\ConstantStringType('requiresCompatibilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                    new \PHPStan\Type\Constant\ConstantStringType('memory'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferenceAccelerators'),
                    new \PHPStan\Type\Constant\ConstantStringType('pidMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipcMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('proxyConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deregisteredAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableFaultInjection'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('memoryReservation'),
                        new \PHPStan\Type\Constant\ConstantStringType('links'),
                        new \PHPStan\Type\Constant\ConstantStringType('portMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('essential'),
                        new \PHPStan\Type\Constant\ConstantStringType('restartPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('entryPoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                        new \PHPStan\Type\Constant\ConstantStringType('environment'),
                        new \PHPStan\Type\Constant\ConstantStringType('environmentFiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('mountPoints'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumesFrom'),
                        new \PHPStan\Type\Constant\ConstantStringType('linuxParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('secrets'),
                        new \PHPStan\Type\Constant\ConstantStringType('dependsOn'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('stopTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('versionConsistency'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                        new \PHPStan\Type\Constant\ConstantStringType('workingDirectory'),
                        new \PHPStan\Type\Constant\ConstantStringType('disableNetworking'),
                        new \PHPStan\Type\Constant\ConstantStringType('privileged'),
                        new \PHPStan\Type\Constant\ConstantStringType('readonlyRootFilesystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('dnsServers'),
                        new \PHPStan\Type\Constant\ConstantStringType('dnsSearchDomains'),
                        new \PHPStan\Type\Constant\ConstantStringType('extraHosts'),
                        new \PHPStan\Type\Constant\ConstantStringType('dockerSecurityOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('interactive'),
                        new \PHPStan\Type\Constant\ConstantStringType('pseudoTerminal'),
                        new \PHPStan\Type\Constant\ConstantStringType('dockerLabels'),
                        new \PHPStan\Type\Constant\ConstantStringType('ulimits'),
                        new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('healthCheck'),
                        new \PHPStan\Type\Constant\ConstantStringType('systemControls'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceRequirements'),
                        new \PHPStan\Type\Constant\ConstantStringType('firelensConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('credentialSpecs'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsParameter'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('appProtocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPortRange'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('http'),
                                new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ignoredExitCodes'),
                            new \PHPStan\Type\Constant\ConstantStringType('restartAttemptPeriod'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('s3'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceVolume'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                            new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceContainer'),
                            new \PHPStan\Type\Constant\ConstantStringType('readOnly'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('capabilities'),
                            new \PHPStan\Type\Constant\ConstantStringType('devices'),
                            new \PHPStan\Type\Constant\ConstantStringType('initProcessEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('sharedMemorySize'),
                            new \PHPStan\Type\Constant\ConstantStringType('tmpfs'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxSwap'),
                            new \PHPStan\Type\Constant\ConstantStringType('swappiness'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('add'),
                                new \PHPStan\Type\Constant\ConstantStringType('drop'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('hostPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('permissions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('read'),
                                    new \PHPStan\Type\Constant\ConstantStringType('write'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mknod'),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('containerPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('size'),
                                new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('condition'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('START'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('disabled'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('softLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('hardLimit'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('core'),
                                new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                                new \PHPStan\Type\Constant\ConstantStringType('data'),
                                new \PHPStan\Type\Constant\ConstantStringType('fsize'),
                                new \PHPStan\Type\Constant\ConstantStringType('locks'),
                                new \PHPStan\Type\Constant\ConstantStringType('memlock'),
                                new \PHPStan\Type\Constant\ConstantStringType('msgqueue'),
                                new \PHPStan\Type\Constant\ConstantStringType('nice'),
                                new \PHPStan\Type\Constant\ConstantStringType('nofile'),
                                new \PHPStan\Type\Constant\ConstantStringType('nproc'),
                                new \PHPStan\Type\Constant\ConstantStringType('rss'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtprio'),
                                new \PHPStan\Type\Constant\ConstantStringType('rttime'),
                                new \PHPStan\Type\Constant\ConstantStringType('sigpending'),
                                new \PHPStan\Type\Constant\ConstantStringType('stack'),
                            ]),
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
                                new \PHPStan\Type\Constant\ConstantStringType('awsfirelens'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('command'),
                            new \PHPStan\Type\Constant\ConstantStringType('interval'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('retries'),
                            new \PHPStan\Type\Constant\ConstantStringType('startPeriod'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GPU'),
                                new \PHPStan\Type\Constant\ConstantStringType('InferenceAccelerator'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('options'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('fluentd'),
                                new \PHPStan\Type\Constant\ConstantStringType('fluentbit'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('bridge'),
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsvpc'),
                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('dockerVolumeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('efsVolumeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('fsxWindowsFileServerVolumeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('configuredAtLaunch'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourcePath'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('autoprovision'),
                            new \PHPStan\Type\Constant\ConstantStringType('driver'),
                            new \PHPStan\Type\Constant\ConstantStringType('driverOpts'),
                            new \PHPStan\Type\Constant\ConstantStringType('labels'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('task'),
                                new \PHPStan\Type\Constant\ConstantStringType('shared'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
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
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fileSystemId'),
                            new \PHPStan\Type\Constant\ConstantStringType('rootDirectory'),
                            new \PHPStan\Type\Constant\ConstantStringType('authorizationConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('credentialsParameter'),
                                new \PHPStan\Type\Constant\ConstantStringType('domain'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('container-instance'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('expression'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('memberOf'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cpuArchitecture'),
                        new \PHPStan\Type\Constant\ConstantStringType('operatingSystemFamily'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('X86_64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM64'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_FULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016_FULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2004_CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022_CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022_FULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_20H2_CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('task'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('host'),
                        new \PHPStan\Type\Constant\ConstantStringType('task'),
                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('properties'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('APPMESH'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function runTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tasks'),
                new \PHPStan\Type\Constant\ConstantStringType('failures'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectivity'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectivityAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('containerInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('containers'),
                    new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('desiredStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableExecuteCommand'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionStoppedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('group'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferenceAccelerators'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                    new \PHPStan\Type\Constant\ConstantStringType('memory'),
                    new \PHPStan\Type\Constant\ConstantStringType('overrides'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullStartedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullStoppedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('stoppedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('stoppedReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('stoppingAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskDefinitionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorage'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('container-instance'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('containerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('imageDigest'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtimeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('exitCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkBindings'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedAgents'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('memoryReservation'),
                        new \PHPStan\Type\Constant\ConstantStringType('gpuIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bindIP'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPortRange'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostPortRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('privateIpv4Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipv6Address'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lastStartedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastStatus'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExecuteCommandAgent'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('containerOverrides'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('inferenceAcceleratorOverrides'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('command'),
                            new \PHPStan\Type\Constant\ConstantStringType('environment'),
                            new \PHPStan\Type\Constant\ConstantStringType('environmentFiles'),
                            new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('memoryReservation'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceRequirements'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GPU'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InferenceAccelerator'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TaskFailedToStart'),
                        new \PHPStan\Type\Constant\ConstantStringType('EssentialContainerExited'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserInitiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceSchedulerInitiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpotInterruption'),
                        new \PHPStan\Type\Constant\ConstantStringType('TerminationNotice'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('detail'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function startTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tasks'),
                new \PHPStan\Type\Constant\ConstantStringType('failures'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectivity'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectivityAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('containerInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('containers'),
                    new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('desiredStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableExecuteCommand'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionStoppedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('group'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferenceAccelerators'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                    new \PHPStan\Type\Constant\ConstantStringType('memory'),
                    new \PHPStan\Type\Constant\ConstantStringType('overrides'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullStartedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullStoppedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('stoppedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('stoppedReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('stoppingAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskDefinitionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorage'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('container-instance'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('containerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('imageDigest'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtimeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('exitCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkBindings'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedAgents'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('memoryReservation'),
                        new \PHPStan\Type\Constant\ConstantStringType('gpuIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bindIP'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPortRange'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostPortRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('privateIpv4Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipv6Address'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lastStartedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastStatus'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExecuteCommandAgent'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('containerOverrides'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('inferenceAcceleratorOverrides'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('command'),
                            new \PHPStan\Type\Constant\ConstantStringType('environment'),
                            new \PHPStan\Type\Constant\ConstantStringType('environmentFiles'),
                            new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('memoryReservation'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceRequirements'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GPU'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InferenceAccelerator'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TaskFailedToStart'),
                        new \PHPStan\Type\Constant\ConstantStringType('EssentialContainerExited'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserInitiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceSchedulerInitiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpotInterruption'),
                        new \PHPStan\Type\Constant\ConstantStringType('TerminationNotice'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('detail'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function stopTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('task'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectivity'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectivityAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('containerInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('containers'),
                    new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('desiredStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableExecuteCommand'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionStoppedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('group'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('inferenceAccelerators'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                    new \PHPStan\Type\Constant\ConstantStringType('memory'),
                    new \PHPStan\Type\Constant\ConstantStringType('overrides'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullStartedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullStoppedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('stoppedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('stoppedReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('stoppingAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskDefinitionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorage'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('container-instance'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('containerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('imageDigest'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtimeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('exitCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkBindings'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedAgents'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('memoryReservation'),
                        new \PHPStan\Type\Constant\ConstantStringType('gpuIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bindIP'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPortRange'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostPortRange'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('privateIpv4Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipv6Address'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lastStartedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastStatus'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExecuteCommandAgent'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('containerOverrides'),
                        new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('inferenceAcceleratorOverrides'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ephemeralStorage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('command'),
                            new \PHPStan\Type\Constant\ConstantStringType('environment'),
                            new \PHPStan\Type\Constant\ConstantStringType('environmentFiles'),
                            new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('memoryReservation'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceRequirements'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GPU'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InferenceAccelerator'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TaskFailedToStart'),
                        new \PHPStan\Type\Constant\ConstantStringType('EssentialContainerExited'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserInitiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceSchedulerInitiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('SpotInterruption'),
                        new \PHPStan\Type\Constant\ConstantStringType('TerminationNotice'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function submitAttachmentStateChanges(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('acknowledgment'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function submitContainerStateChange(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('acknowledgment'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function submitTaskStateChange(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('acknowledgment'),
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
    private function updateCapacityProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroupProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateStatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedScaling'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedTerminationProtection'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedDraining'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetCapacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('minimumScalingStepSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('maximumScalingStepSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceWarmupPeriod'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
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
    private function updateCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredContainerInstancesCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeServicesCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('statistics'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('settings'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviders'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultCapacityProviderStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachmentsStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceConnectDefaults'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('executeCommandConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedStorageConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('logging'),
                            new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('OVERRIDE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('cloudWatchEncryptionEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3EncryptionEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3KeyPrefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorageKmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('containerInsights'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateClusterSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredContainerInstancesCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeServicesCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('statistics'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('settings'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviders'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultCapacityProviderStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachmentsStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceConnectDefaults'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('executeCommandConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedStorageConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('logging'),
                            new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('OVERRIDE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('cloudWatchEncryptionEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3EncryptionEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3KeyPrefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorageKmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('containerInsights'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateContainerAgent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('containerInstance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('containerInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('remainingResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentConnected'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentUpdateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('agentHash'),
                        new \PHPStan\Type\Constant\ConstantStringType('dockerVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('stringSetValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('stringSetValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STAGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('container-instance'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('overallStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OK'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastStatusChange'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINER_RUNTIME'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('OK'),
                                new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_DATA'),
                                new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateContainerInstancesState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('containerInstances'),
                new \PHPStan\Type\Constant\ConstantStringType('failures'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('containerInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('remainingResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentConnected'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingTasksCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('agentUpdateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachments'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('agentHash'),
                        new \PHPStan\Type\Constant\ConstantStringType('dockerVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('stringSetValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('stringSetValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STAGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('container-instance'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('overallStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OK'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUpdated'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastStatusChange'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINER_RUNTIME'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('OK'),
                                new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_DATA'),
                                new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('detail'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('service'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('loadBalancers'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRegistries'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('desiredCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskSets'),
                    new \PHPStan\Type\Constant\ConstantStringType('deployments'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('events'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('placementConstraints'),
                    new \PHPStan\Type\Constant\ConstantStringType('placementStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthCheckGracePeriodSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('schedulingStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentController'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableECSManagedTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('propagateTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableExecuteCommand'),
                    new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneRebalancing'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('loadBalancerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('registryArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentCircuitBreaker'),
                        new \PHPStan\Type\Constant\ConstantStringType('maximumPercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('minimumHealthyPercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('alarms'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enable'),
                            new \PHPStan\Type\Constant\ConstantStringType('rollback'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('alarmNames'),
                            new \PHPStan\Type\Constant\ConstantStringType('rollback'),
                            new \PHPStan\Type\Constant\ConstantStringType('enable'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskSetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('startedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('computedDesiredCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('pendingCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('runningCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProviderStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('loadBalancers'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceRegistries'),
                        new \PHPStan\Type\Constant\ConstantStringType('scale'),
                        new \PHPStan\Type\Constant\ConstantStringType('stabilityStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('stabilityStatusAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                            new \PHPStan\Type\Constant\ConstantStringType('weight'),
                            new \PHPStan\Type\Constant\ConstantStringType('base'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetGroupArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('loadBalancerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('registryArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('port'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantStringType('PERCENT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STEADY_STATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('STABILIZING'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('desiredCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('pendingCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('runningCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('failedTasks'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProviderStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                        new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('rolloutState'),
                        new \PHPStan\Type\Constant\ConstantStringType('rolloutStateReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceConnectConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceConnectResources'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumeConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorage'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcLatticeConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                            new \PHPStan\Type\Constant\ConstantStringType('weight'),
                            new \PHPStan\Type\Constant\ConstantStringType('base'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                            new \PHPStan\Type\Constant\ConstantStringType('services'),
                            new \PHPStan\Type\Constant\ConstantStringType('logConfiguration'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('portName'),
                                new \PHPStan\Type\Constant\ConstantStringType('discoveryName'),
                                new \PHPStan\Type\Constant\ConstantStringType('clientAliases'),
                                new \PHPStan\Type\Constant\ConstantStringType('ingressPortOverride'),
                                new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('dnsName'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('idleTimeoutSeconds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('perRequestTimeoutSeconds'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('issuerCertificateAuthority'),
                                    new \PHPStan\Type\Constant\ConstantStringType('kmsKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('awsPcaAuthorityArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
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
                                    new \PHPStan\Type\Constant\ConstantStringType('awsfirelens'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('valueFrom'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('discoveryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('discoveryArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('managedEBSVolume'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('encrypted'),
                                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                                new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                                new \PHPStan\Type\Constant\ConstantStringType('snapshotId'),
                                new \PHPStan\Type\Constant\ConstantStringType('iops'),
                                new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                                new \PHPStan\Type\Constant\ConstantStringType('tagSpecifications'),
                                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('filesystemType'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                                    new \PHPStan\Type\Constant\ConstantStringType('propagateTags'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('volume'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('TASK_DEFINITION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ext3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ext4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('xfs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ntfs'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetGroupArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('portName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('expression'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('distinctInstance'),
                            new \PHPStan\Type\Constant\ConstantStringType('memberOf'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('field'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('random'),
                            new \PHPStan\Type\Constant\ConstantStringType('spread'),
                            new \PHPStan\Type\Constant\ConstantStringType('binpack'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICA'),
                        new \PHPStan\Type\Constant\ConstantStringType('DAEMON'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CODE_DEPLOY'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TASK_DEFINITION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateServicePrimaryTaskSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskSetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                    new \PHPStan\Type\Constant\ConstantStringType('computedDesiredCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('loadBalancers'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRegistries'),
                    new \PHPStan\Type\Constant\ConstantStringType('scale'),
                    new \PHPStan\Type\Constant\ConstantStringType('stabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('stabilityStatusAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('loadBalancerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('registryArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantStringType('PERCENT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STEADY_STATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STABILIZING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateTaskProtection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('protectedTasks'),
                new \PHPStan\Type\Constant\ConstantStringType('failures'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('taskArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('protectionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('expirationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('detail'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateTaskSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('taskSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskSetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('taskDefinition'),
                    new \PHPStan\Type\Constant\ConstantStringType('computedDesiredCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('runningCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchType'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityProviderStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('loadBalancers'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRegistries'),
                    new \PHPStan\Type\Constant\ConstantStringType('scale'),
                    new \PHPStan\Type\Constant\ConstantStringType('stabilityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('stabilityStatusAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('fargateEphemeralStorage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('base'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('loadBalancerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('registryArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerPort'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantStringType('PERCENT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STEADY_STATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STABILIZING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
}