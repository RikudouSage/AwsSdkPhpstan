<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SmsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Sms\SmsClient>
     */
    public function getClass(): string
    {
        return \Aws\Sms\SmsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createApp',
            'createReplicationJob',
            'deleteApp',
            'deleteAppLaunchConfiguration',
            'deleteAppReplicationConfiguration',
            'deleteAppValidationConfiguration',
            'deleteReplicationJob',
            'deleteServerCatalog',
            'disassociateConnector',
            'generateChangeSet',
            'generateTemplate',
            'getApp',
            'getAppLaunchConfiguration',
            'getAppReplicationConfiguration',
            'getAppValidationConfiguration',
            'getAppValidationOutput',
            'getConnectors',
            'getReplicationJobs',
            'getReplicationRuns',
            'getServers',
            'importAppCatalog',
            'importServerCatalog',
            'launchApp',
            'listApps',
            'notifyAppValidationOutput',
            'putAppLaunchConfiguration',
            'putAppReplicationConfiguration',
            'putAppValidationConfiguration',
            'startAppReplication',
            'startOnDemandAppReplication',
            'startOnDemandReplicationRun',
            'stopAppReplication',
            'terminateApp',
            'updateApp',
            'updateReplicationJob',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createApp' => $this->createApp(),
            'createReplicationJob' => $this->createReplicationJob(),
            'deleteApp' => $this->deleteApp(),
            'deleteAppLaunchConfiguration' => $this->deleteAppLaunchConfiguration(),
            'deleteAppReplicationConfiguration' => $this->deleteAppReplicationConfiguration(),
            'deleteAppValidationConfiguration' => $this->deleteAppValidationConfiguration(),
            'deleteReplicationJob' => $this->deleteReplicationJob(),
            'deleteServerCatalog' => $this->deleteServerCatalog(),
            'disassociateConnector' => $this->disassociateConnector(),
            'generateChangeSet' => $this->generateChangeSet(),
            'generateTemplate' => $this->generateTemplate(),
            'getApp' => $this->getApp(),
            'getAppLaunchConfiguration' => $this->getAppLaunchConfiguration(),
            'getAppReplicationConfiguration' => $this->getAppReplicationConfiguration(),
            'getAppValidationConfiguration' => $this->getAppValidationConfiguration(),
            'getAppValidationOutput' => $this->getAppValidationOutput(),
            'getConnectors' => $this->getConnectors(),
            'getReplicationJobs' => $this->getReplicationJobs(),
            'getReplicationRuns' => $this->getReplicationRuns(),
            'getServers' => $this->getServers(),
            'importAppCatalog' => $this->importAppCatalog(),
            'importServerCatalog' => $this->importServerCatalog(),
            'launchApp' => $this->launchApp(),
            'listApps' => $this->listApps(),
            'notifyAppValidationOutput' => $this->notifyAppValidationOutput(),
            'putAppLaunchConfiguration' => $this->putAppLaunchConfiguration(),
            'putAppReplicationConfiguration' => $this->putAppReplicationConfiguration(),
            'putAppValidationConfiguration' => $this->putAppValidationConfiguration(),
            'startAppReplication' => $this->startAppReplication(),
            'startOnDemandAppReplication' => $this->startOnDemandAppReplication(),
            'startOnDemandReplicationRun' => $this->startOnDemandReplicationRun(),
            'stopAppReplication' => $this->stopAppReplication(),
            'terminateApp' => $this->terminateApp(),
            'updateApp' => $this->updateApp(),
            'updateReplicationJob' => $this->updateReplicationJob(),
        };
    }
    private function createApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('serverGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appId'),
                    new \PHPStan\Type\Constant\ConstantStringType('importedAppId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationConfigurationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('latestReplicationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchConfigurationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalServerGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalServers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CONFIGURED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CONFIGURATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_INVALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_REPLICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_REPLICATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_REPLICATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_REPLICATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_REPLICATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_STOP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CONFIGURED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CONFIGURATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_INVALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_LAUNCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_LAUNCHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_LAUNCH_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_LAUNCH_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('latestLaunchTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('stackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('stackId'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('serverGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serverId'),
                        new \PHPStan\Type\Constant\ConstantStringType('serverType'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicationJobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicationJobTerminated'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('VIRTUAL_MACHINE'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vmServerAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmName'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmManagerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmManagerType'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('vmManagerId'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VSPHERE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCVMM'),
                                new \PHPStan\Type\Constant\ConstantStringType('HYPERV-MANAGER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
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
        ]);
    }
    private function createReplicationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('replicationJobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAppLaunchConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAppReplicationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAppValidationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteReplicationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteServerCatalog(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function generateChangeSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function generateTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('serverGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appId'),
                    new \PHPStan\Type\Constant\ConstantStringType('importedAppId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationConfigurationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('latestReplicationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchConfigurationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalServerGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalServers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CONFIGURED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CONFIGURATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_INVALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_REPLICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_REPLICATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_REPLICATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_REPLICATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_REPLICATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_STOP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CONFIGURED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CONFIGURATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_INVALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_LAUNCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_LAUNCHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_LAUNCH_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_LAUNCH_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('latestLaunchTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('stackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('stackId'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('serverGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serverId'),
                        new \PHPStan\Type\Constant\ConstantStringType('serverType'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicationJobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicationJobTerminated'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('VIRTUAL_MACHINE'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vmServerAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmName'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmManagerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmManagerType'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('vmManagerId'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VSPHERE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCVMM'),
                                new \PHPStan\Type\Constant\ConstantStringType('HYPERV-MANAGER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
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
        ]);
    }
    private function getAppLaunchConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appId'),
                new \PHPStan\Type\Constant\ConstantStringType('roleName'),
                new \PHPStan\Type\Constant\ConstantStringType('autoLaunch'),
                new \PHPStan\Type\Constant\ConstantStringType('serverGroupLaunchConfigurations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('serverGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchOrder'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverLaunchConfigurations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('server'),
                        new \PHPStan\Type\Constant\ConstantStringType('logicalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpc'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnet'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2KeyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('userData'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('associatePublicIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('iamInstanceProfileName'),
                        new \PHPStan\Type\Constant\ConstantStringType('configureScript'),
                        new \PHPStan\Type\Constant\ConstantStringType('configureScriptType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serverId'),
                            new \PHPStan\Type\Constant\ConstantStringType('serverType'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmServer'),
                            new \PHPStan\Type\Constant\ConstantStringType('replicationJobId'),
                            new \PHPStan\Type\Constant\ConstantStringType('replicationJobTerminated'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('VIRTUAL_MACHINE'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('vmServerAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmName'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmManagerName'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmManagerType'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('vmManagerId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('vmId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VSPHERE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SCVMM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HYPERV-MANAGER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SHELL_SCRIPT'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWERSHELL_SCRIPT'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getAppReplicationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serverGroupReplicationConfigurations'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('serverGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverReplicationConfigurations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('server'),
                        new \PHPStan\Type\Constant\ConstantStringType('serverReplicationParameters'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serverId'),
                            new \PHPStan\Type\Constant\ConstantStringType('serverType'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmServer'),
                            new \PHPStan\Type\Constant\ConstantStringType('replicationJobId'),
                            new \PHPStan\Type\Constant\ConstantStringType('replicationJobTerminated'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('VIRTUAL_MACHINE'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('vmServerAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmName'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmManagerName'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmManagerType'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('vmManagerId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('vmId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VSPHERE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SCVMM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HYPERV-MANAGER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('seedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                            new \PHPStan\Type\Constant\ConstantStringType('runOnce'),
                            new \PHPStan\Type\Constant\ConstantStringType('licenseType'),
                            new \PHPStan\Type\Constant\ConstantStringType('numberOfRecentAmisToKeep'),
                            new \PHPStan\Type\Constant\ConstantStringType('encrypted'),
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                new \PHPStan\Type\Constant\ConstantStringType('BYOL'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getAppValidationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appValidationConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('serverGroupValidationConfigurations'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('validationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('appValidationStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('ssmValidationParameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('SSM'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('scriptType'),
                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionTimeoutSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputS3BucketName'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SHELL_SCRIPT'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWERSHELL_SCRIPT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('serverGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverValidationConfigurations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('server'),
                        new \PHPStan\Type\Constant\ConstantStringType('validationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('serverValidationStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('userDataValidationParameters'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serverId'),
                            new \PHPStan\Type\Constant\ConstantStringType('serverType'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmServer'),
                            new \PHPStan\Type\Constant\ConstantStringType('replicationJobId'),
                            new \PHPStan\Type\Constant\ConstantStringType('replicationJobTerminated'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('VIRTUAL_MACHINE'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('vmServerAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmName'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmManagerName'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmManagerType'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('vmManagerId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('vmId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VSPHERE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SCVMM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HYPERV-MANAGER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('USERDATA'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('scriptType'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SHELL_SCRIPT'),
                                new \PHPStan\Type\Constant\ConstantStringType('POWERSHELL_SCRIPT'),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getAppValidationOutput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('validationOutputList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('validationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('latestValidationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('appValidationOutput'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverValidationOutput'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ssmOutput'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('server'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serverId'),
                            new \PHPStan\Type\Constant\ConstantStringType('serverType'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmServer'),
                            new \PHPStan\Type\Constant\ConstantStringType('replicationJobId'),
                            new \PHPStan\Type\Constant\ConstantStringType('replicationJobTerminated'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('VIRTUAL_MACHINE'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('vmServerAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmName'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmManagerName'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmManagerType'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('vmManagerId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('vmId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VSPHERE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SCVMM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HYPERV-MANAGER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getConnectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectorList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('capabilityList'),
                    new \PHPStan\Type\Constant\ConstantStringType('vmManagerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vmManagerType'),
                    new \PHPStan\Type\Constant\ConstantStringType('vmManagerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedOn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VSPHERE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCVMM'),
                        new \PHPStan\Type\Constant\ConstantStringType('HYPERV-MANAGER'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT_BATCHING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMS_OPTIMIZED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VSPHERE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCVMM'),
                        new \PHPStan\Type\Constant\ConstantStringType('HYPERV-MANAGER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getReplicationJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('replicationJobList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('replicationJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverId'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverType'),
                    new \PHPStan\Type\Constant\ConstantStringType('vmServer'),
                    new \PHPStan\Type\Constant\ConstantStringType('seedReplicationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                    new \PHPStan\Type\Constant\ConstantStringType('runOnce'),
                    new \PHPStan\Type\Constant\ConstantStringType('nextReplicationRunStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('latestAmiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('numberOfRecentAmisToKeep'),
                    new \PHPStan\Type\Constant\ConstantStringType('encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationRunList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('VIRTUAL_MACHINE'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vmServerAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmName'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmManagerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmManagerType'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vmManagerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VSPHERE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCVMM'),
                            new \PHPStan\Type\Constant\ConstantStringType('HYPERV-MANAGER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('BYOL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAUSED_ON_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('replicationRunId'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('stageDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('amiId'),
                        new \PHPStan\Type\Constant\ConstantStringType('scheduledStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('completedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('encrypted'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MISSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('stage'),
                            new \PHPStan\Type\Constant\ConstantStringType('stageProgress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getReplicationRuns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('replicationJob'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationRunList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('replicationJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverId'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverType'),
                    new \PHPStan\Type\Constant\ConstantStringType('vmServer'),
                    new \PHPStan\Type\Constant\ConstantStringType('seedReplicationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('frequency'),
                    new \PHPStan\Type\Constant\ConstantStringType('runOnce'),
                    new \PHPStan\Type\Constant\ConstantStringType('nextReplicationRunStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('latestAmiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('numberOfRecentAmisToKeep'),
                    new \PHPStan\Type\Constant\ConstantStringType('encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationRunList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('VIRTUAL_MACHINE'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vmServerAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmName'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmManagerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmManagerType'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vmManagerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VSPHERE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCVMM'),
                            new \PHPStan\Type\Constant\ConstantStringType('HYPERV-MANAGER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('BYOL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAUSED_ON_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('replicationRunId'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('stageDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('amiId'),
                        new \PHPStan\Type\Constant\ConstantStringType('scheduledStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('completedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('encrypted'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MISSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('stage'),
                            new \PHPStan\Type\Constant\ConstantStringType('stageProgress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('replicationRunId'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('stageDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('amiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('scheduledStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('completedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stage'),
                        new \PHPStan\Type\Constant\ConstantStringType('stageProgress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getServers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedOn'),
                new \PHPStan\Type\Constant\ConstantStringType('serverCatalogStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('serverList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_IMPORTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('serverId'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverType'),
                    new \PHPStan\Type\Constant\ConstantStringType('vmServer'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationJobTerminated'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('VIRTUAL_MACHINE'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vmServerAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmName'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmManagerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmManagerType'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vmManagerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VSPHERE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCVMM'),
                            new \PHPStan\Type\Constant\ConstantStringType('HYPERV-MANAGER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function importAppCatalog(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function importServerCatalog(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function launchApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function listApps(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('apps'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appId'),
                    new \PHPStan\Type\Constant\ConstantStringType('importedAppId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationConfigurationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('latestReplicationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchConfigurationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalServerGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalServers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CONFIGURED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CONFIGURATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_INVALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_REPLICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_REPLICATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_REPLICATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_REPLICATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_REPLICATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_STOP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CONFIGURED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CONFIGURATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_INVALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_LAUNCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_LAUNCHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_LAUNCH_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_LAUNCH_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('latestLaunchTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('stackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('stackId'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function notifyAppValidationOutput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putAppLaunchConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putAppReplicationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putAppValidationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startAppReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startOnDemandAppReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startOnDemandReplicationRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('replicationRunId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopAppReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function terminateApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('serverGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appId'),
                    new \PHPStan\Type\Constant\ConstantStringType('importedAppId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationConfigurationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('latestReplicationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchConfigurationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalServerGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalServers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CONFIGURED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CONFIGURATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_INVALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_REPLICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_REPLICATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_REPLICATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_REPLICATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_REPLICATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_STOP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CONFIGURED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CONFIGURATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_INVALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_LAUNCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_LAUNCHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_LAUNCH_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELTA_LAUNCH_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('latestLaunchTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('stackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('stackId'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('serverGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serverId'),
                        new \PHPStan\Type\Constant\ConstantStringType('serverType'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicationJobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicationJobTerminated'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('VIRTUAL_MACHINE'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vmServerAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmName'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmManagerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmManagerType'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('vmManagerId'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VSPHERE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCVMM'),
                                new \PHPStan\Type\Constant\ConstantStringType('HYPERV-MANAGER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
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
        ]);
    }
    private function updateReplicationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}