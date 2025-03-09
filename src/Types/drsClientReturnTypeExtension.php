<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class drsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\drs\drsClient>
     */
    public function getClass(): string
    {
        return \Aws\drs\drsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateSourceNetworkStack',
            'createExtendedSourceServer',
            'createLaunchConfigurationTemplate',
            'createReplicationConfigurationTemplate',
            'createSourceNetwork',
            'deleteJob',
            'deleteLaunchAction',
            'deleteLaunchConfigurationTemplate',
            'deleteRecoveryInstance',
            'deleteReplicationConfigurationTemplate',
            'deleteSourceNetwork',
            'deleteSourceServer',
            'describeJobLogItems',
            'describeJobs',
            'describeLaunchConfigurationTemplates',
            'describeRecoveryInstances',
            'describeRecoverySnapshots',
            'describeReplicationConfigurationTemplates',
            'describeSourceNetworks',
            'describeSourceServers',
            'disconnectRecoveryInstance',
            'disconnectSourceServer',
            'exportSourceNetworkCfnTemplate',
            'getFailbackReplicationConfiguration',
            'getLaunchConfiguration',
            'getReplicationConfiguration',
            'initializeService',
            'listExtensibleSourceServers',
            'listLaunchActions',
            'listStagingAccounts',
            'listTagsForResource',
            'putLaunchAction',
            'retryDataReplication',
            'reverseReplication',
            'startFailbackLaunch',
            'startRecovery',
            'startReplication',
            'startSourceNetworkRecovery',
            'startSourceNetworkReplication',
            'stopFailback',
            'stopReplication',
            'stopSourceNetworkReplication',
            'tagResource',
            'terminateRecoveryInstances',
            'untagResource',
            'updateFailbackReplicationConfiguration',
            'updateLaunchConfiguration',
            'updateLaunchConfigurationTemplate',
            'updateReplicationConfiguration',
            'updateReplicationConfigurationTemplate',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateSourceNetworkStack' => $this->associateSourceNetworkStack(),
            'createExtendedSourceServer' => $this->createExtendedSourceServer(),
            'createLaunchConfigurationTemplate' => $this->createLaunchConfigurationTemplate(),
            'createReplicationConfigurationTemplate' => $this->createReplicationConfigurationTemplate(),
            'createSourceNetwork' => $this->createSourceNetwork(),
            'deleteJob' => $this->deleteJob(),
            'deleteLaunchAction' => $this->deleteLaunchAction(),
            'deleteLaunchConfigurationTemplate' => $this->deleteLaunchConfigurationTemplate(),
            'deleteRecoveryInstance' => $this->deleteRecoveryInstance(),
            'deleteReplicationConfigurationTemplate' => $this->deleteReplicationConfigurationTemplate(),
            'deleteSourceNetwork' => $this->deleteSourceNetwork(),
            'deleteSourceServer' => $this->deleteSourceServer(),
            'describeJobLogItems' => $this->describeJobLogItems(),
            'describeJobs' => $this->describeJobs(),
            'describeLaunchConfigurationTemplates' => $this->describeLaunchConfigurationTemplates(),
            'describeRecoveryInstances' => $this->describeRecoveryInstances(),
            'describeRecoverySnapshots' => $this->describeRecoverySnapshots(),
            'describeReplicationConfigurationTemplates' => $this->describeReplicationConfigurationTemplates(),
            'describeSourceNetworks' => $this->describeSourceNetworks(),
            'describeSourceServers' => $this->describeSourceServers(),
            'disconnectRecoveryInstance' => $this->disconnectRecoveryInstance(),
            'disconnectSourceServer' => $this->disconnectSourceServer(),
            'exportSourceNetworkCfnTemplate' => $this->exportSourceNetworkCfnTemplate(),
            'getFailbackReplicationConfiguration' => $this->getFailbackReplicationConfiguration(),
            'getLaunchConfiguration' => $this->getLaunchConfiguration(),
            'getReplicationConfiguration' => $this->getReplicationConfiguration(),
            'initializeService' => $this->initializeService(),
            'listExtensibleSourceServers' => $this->listExtensibleSourceServers(),
            'listLaunchActions' => $this->listLaunchActions(),
            'listStagingAccounts' => $this->listStagingAccounts(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putLaunchAction' => $this->putLaunchAction(),
            'retryDataReplication' => $this->retryDataReplication(),
            'reverseReplication' => $this->reverseReplication(),
            'startFailbackLaunch' => $this->startFailbackLaunch(),
            'startRecovery' => $this->startRecovery(),
            'startReplication' => $this->startReplication(),
            'startSourceNetworkRecovery' => $this->startSourceNetworkRecovery(),
            'startSourceNetworkReplication' => $this->startSourceNetworkReplication(),
            'stopFailback' => $this->stopFailback(),
            'stopReplication' => $this->stopReplication(),
            'stopSourceNetworkReplication' => $this->stopSourceNetworkReplication(),
            'tagResource' => $this->tagResource(),
            'terminateRecoveryInstances' => $this->terminateRecoveryInstances(),
            'untagResource' => $this->untagResource(),
            'updateFailbackReplicationConfiguration' => $this->updateFailbackReplicationConfiguration(),
            'updateLaunchConfiguration' => $this->updateLaunchConfiguration(),
            'updateLaunchConfigurationTemplate' => $this->updateLaunchConfigurationTemplate(),
            'updateReplicationConfiguration' => $this->updateReplicationConfiguration(),
            'updateReplicationConfigurationTemplate' => $this->updateReplicationConfigurationTemplate(),
        };
    }
    private function associateSourceNetworkStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('job'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('initiatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                    new \PHPStan\Type\Constant\ConstantStringType('participatingResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('participatingServers'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('START_RECOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_DRILL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILBACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSTIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_RECOVERY_INSTANCES'),
                        new \PHPStan\Type\Constant\ConstantStringType('TARGET_ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_NETWORK_RECOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NETWORK_RECOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE_NETWORK_RECOVERY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('participatingResourceID'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceNetworkID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('launchActionsStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('recoveryInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('runs'),
                            new \PHPStan\Type\Constant\ConstantStringType('ssmAgentDiscoveryDatetime'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('actionCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('active'),
                                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('optional'),
                                    new \PHPStan\Type\Constant\ConstantStringType('order'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MONITORING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SECURITY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SSM_STORE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SSM_AUTOMATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SSM_COMMAND'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_CONVERTED_SNAPSHOT'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createExtendedSourceServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sourceServer'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastLaunchResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('lifeCycle'),
                    new \PHPStan\Type\Constant\ConstantStringType('recoveryInstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationDirection'),
                    new \PHPStan\Type\Constant\ConstantStringType('reversedDirectionSourceServerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceCloudProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceNetworkID'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                    new \PHPStan\Type\Constant\ConstantStringType('stagingArea'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('dataReplicationError'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInitiation'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataReplicationState'),
                        new \PHPStan\Type\Constant\ConstantStringType('etaDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lagDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingOutpostArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                            new \PHPStan\Type\Constant\ConstantStringType('rawError'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AGENT_NOT_SEEN'),
                                new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOTS_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONVERGING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNSTABLE_NETWORK'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CREATE_SECURITY_GROUP'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_LAUNCH_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_BOOT_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_AUTHENTICATE_WITH_SERVICE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CREATE_STAGING_DISKS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_ATTACH_STAGING_DISKS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_START_DATA_TRANSFER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('nextAttemptDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('startDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('steps'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('WAIT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_SECURITY_GROUP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_REPLICATION_SERVER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BOOT_REPLICATION_SERVER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTHENTICATE_WITH_SERVICE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOWNLOAD_REPLICATION_SOFTWARE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_STAGING_DISKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ATTACH_STAGING_DISKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PAIR_REPLICATION_SERVER_WITH_AGENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT_AGENT_TO_REPLICATION_SERVER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('START_DATA_TRANSFER'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INITIATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INITIAL_SYNC'),
                            new \PHPStan\Type\Constant\ConstantStringType('BACKLOG'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING_SNAPSHOT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTINUOUS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESCAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('STALLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('backloggedStorageBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('replicatedStorageBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('rescannedStorageBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('totalStorageBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeStatus'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('REGULAR'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS_MARKETPLACE_PRODUCT_CODES'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISSING_VOLUME_ATTRIBUTES'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('addedToServiceDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('elapsedReplicationDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('firstByteDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastLaunch'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastSeenByServiceDateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RECOVERY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DRILL'),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILBACK'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('originAccountID'),
                        new \PHPStan\Type\Constant\ConstantStringType('originAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('originRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceOutpostArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                        new \PHPStan\Type\Constant\ConstantStringType('disks'),
                        new \PHPStan\Type\Constant\ConstantStringType('identificationHints'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('os'),
                        new \PHPStan\Type\Constant\ConstantStringType('ramBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('recommendedInstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('supportsNitroInstances'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cores'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsInstanceID'),
                            new \PHPStan\Type\Constant\ConstantStringType('fqdn'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmWareUuid'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ips'),
                            new \PHPStan\Type\Constant\ConstantStringType('isPrimary'),
                            new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fullString'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingAccountID'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingSourceServerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXTENDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTENSION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EXTENDED'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function createLaunchConfigurationTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('launchConfigurationTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('copyPrivateIp'),
                    new \PHPStan\Type\Constant\ConstantStringType('copyTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('exportBucketArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchConfigurationTemplateID'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchDisposition'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchIntoSourceInstance'),
                    new \PHPStan\Type\Constant\ConstantStringType('licensing'),
                    new \PHPStan\Type\Constant\ConstantStringType('postLaunchEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetInstanceTypeRightSizingMethod'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('osByol'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_AWS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createReplicationConfigurationTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('associateDefaultSecurityGroup'),
                new \PHPStan\Type\Constant\ConstantStringType('autoReplicateNewDisks'),
                new \PHPStan\Type\Constant\ConstantStringType('bandwidthThrottling'),
                new \PHPStan\Type\Constant\ConstantStringType('createPublicIP'),
                new \PHPStan\Type\Constant\ConstantStringType('dataPlaneRouting'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultLargeStagingDiskType'),
                new \PHPStan\Type\Constant\ConstantStringType('ebsEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('ebsEncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('pitPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationConfigurationTemplateID'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationServerInstanceType'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationServersSecurityGroupsIDs'),
                new \PHPStan\Type\Constant\ConstantStringType('stagingAreaSubnetId'),
                new \PHPStan\Type\Constant\ConstantStringType('stagingAreaTags'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('useDedicatedReplicationServer'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_IP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_IP'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('GP2'),
                    new \PHPStan\Type\Constant\ConstantStringType('GP3'),
                    new \PHPStan\Type\Constant\ConstantStringType('ST1'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('interval'),
                    new \PHPStan\Type\Constant\ConstantStringType('retentionDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleID'),
                    new \PHPStan\Type\Constant\ConstantStringType('units'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function createSourceNetwork(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sourceNetworkID'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteLaunchAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteLaunchConfigurationTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteRecoveryInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteReplicationConfigurationTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSourceNetwork(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSourceServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeJobLogItems(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('event'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventData'),
                    new \PHPStan\Type\Constant\ConstantStringType('logDateTime'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('JOB_START'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVER_SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLEANUP_START'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLEANUP_END'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLEANUP_FAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT_START'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT_END'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT_FAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('USING_PREVIOUS_SNAPSHOT'),
                        new \PHPStan\Type\Constant\ConstantStringType('USING_PREVIOUS_SNAPSHOT_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONVERSION_START'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONVERSION_END'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONVERSION_FAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_START'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('JOB_CANCEL'),
                        new \PHPStan\Type\Constant\ConstantStringType('JOB_END'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOY_NETWORK_CONFIGURATION_START'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOY_NETWORK_CONFIGURATION_END'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOY_NETWORK_CONFIGURATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NETWORK_CONFIGURATION_START'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NETWORK_CONFIGURATION_END'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NETWORK_CONFIGURATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_LAUNCH_TEMPLATE_START'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_LAUNCH_TEMPLATE_END'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_LAUNCH_TEMPLATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NETWORK_RECOVERY_FAIL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('conversionProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('conversionServerID'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventResourceData'),
                        new \PHPStan\Type\Constant\ConstantStringType('rawError'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetInstanceID'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dataTimestamp'),
                            new \PHPStan\Type\Constant\ConstantStringType('forceUefi'),
                            new \PHPStan\Type\Constant\ConstantStringType('rootVolumeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeToConversionMap'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeToProductCodes'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeToVolumeSize'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('productCodeId'),
                                new \PHPStan\Type\Constant\ConstantStringType('productCodeMode'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]))),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceNetworkData'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sourceNetworkID'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceVpc'),
                                new \PHPStan\Type\Constant\ConstantStringType('stackName'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetVpc'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('initiatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                    new \PHPStan\Type\Constant\ConstantStringType('participatingResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('participatingServers'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('START_RECOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_DRILL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILBACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSTIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_RECOVERY_INSTANCES'),
                        new \PHPStan\Type\Constant\ConstantStringType('TARGET_ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_NETWORK_RECOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NETWORK_RECOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE_NETWORK_RECOVERY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('participatingResourceID'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceNetworkID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('launchActionsStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('recoveryInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('runs'),
                            new \PHPStan\Type\Constant\ConstantStringType('ssmAgentDiscoveryDatetime'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('actionCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('active'),
                                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('optional'),
                                    new \PHPStan\Type\Constant\ConstantStringType('order'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MONITORING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SECURITY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SSM_STORE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SSM_AUTOMATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SSM_COMMAND'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_CONVERTED_SNAPSHOT'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeLaunchConfigurationTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('copyPrivateIp'),
                    new \PHPStan\Type\Constant\ConstantStringType('copyTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('exportBucketArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchConfigurationTemplateID'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchDisposition'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchIntoSourceInstance'),
                    new \PHPStan\Type\Constant\ConstantStringType('licensing'),
                    new \PHPStan\Type\Constant\ConstantStringType('postLaunchEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetInstanceTypeRightSizingMethod'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('osByol'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_AWS'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRecoveryInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceID'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceState'),
                    new \PHPStan\Type\Constant\ConstantStringType('failback'),
                    new \PHPStan\Type\Constant\ConstantStringType('isDrill'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                    new \PHPStan\Type\Constant\ConstantStringType('originAvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('originEnvironment'),
                    new \PHPStan\Type\Constant\ConstantStringType('pointInTimeSnapshotDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('recoveryInstanceID'),
                    new \PHPStan\Type\Constant\ConstantStringType('recoveryInstanceProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceOutpostArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('dataReplicationError'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInitiation'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataReplicationState'),
                        new \PHPStan\Type\Constant\ConstantStringType('etaDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lagDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingOutpostArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                            new \PHPStan\Type\Constant\ConstantStringType('rawError'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AGENT_NOT_SEEN'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILBACK_CLIENT_NOT_SEEN'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONVERGING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNSTABLE_NETWORK'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_ESTABLISH_RECOVERY_INSTANCE_COMMUNICATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE_TO_FAILBACK_CLIENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CONFIGURE_REPLICATION_SOFTWARE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_PAIR_AGENT_WITH_REPLICATION_SOFTWARE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_ESTABLISH_AGENT_REPLICATOR_SOFTWARE_COMMUNICATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_GETTING_REPLICATION_STATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOTS_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CREATE_SECURITY_GROUP'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_LAUNCH_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_BOOT_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_AUTHENTICATE_WITH_SERVICE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CREATE_STAGING_DISKS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_ATTACH_STAGING_DISKS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_START_DATA_TRANSFER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('startDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('steps'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LINK_FAILBACK_CLIENT_WITH_RECOVERY_INSTANCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE_VOLUME_MAPPING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ESTABLISH_RECOVERY_INSTANCE_COMMUNICATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOWNLOAD_REPLICATION_SOFTWARE_TO_FAILBACK_CLIENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONFIGURE_REPLICATION_SOFTWARE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PAIR_AGENT_WITH_REPLICATION_SOFTWARE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ESTABLISH_AGENT_REPLICATOR_SOFTWARE_COMMUNICATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WAIT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_SECURITY_GROUP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_REPLICATION_SERVER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BOOT_REPLICATION_SERVER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTHENTICATE_WITH_SERVICE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOWNLOAD_REPLICATION_SOFTWARE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_STAGING_DISKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ATTACH_STAGING_DISKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PAIR_REPLICATION_SERVER_WITH_AGENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT_AGENT_TO_REPLICATION_SERVER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('START_DATA_TRANSFER'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INITIATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INITIAL_SYNC'),
                            new \PHPStan\Type\Constant\ConstantStringType('BACKLOG'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING_SNAPSHOT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTINUOUS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESCAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('STALLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REPLICATION_STATE_NOT_AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('backloggedStorageBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('replicatedStorageBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('rescannedStorageBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('totalStorageBytes'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHUTTING-DOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agentLastSeenByServiceDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('elapsedReplicationDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('failbackClientID'),
                        new \PHPStan\Type\Constant\ConstantStringType('failbackClientLastSeenByServiceDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('failbackInitiationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('failbackJobID'),
                        new \PHPStan\Type\Constant\ConstantStringType('failbackLaunchType'),
                        new \PHPStan\Type\Constant\ConstantStringType('failbackToOriginalServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('firstByteDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RECOVERY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DRILL'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FAILBACK_NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILBACK_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILBACK_READY_FOR_LAUNCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILBACK_COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILBACK_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILBACK_NOT_READY_FOR_LAUNCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILBACK_LAUNCH_STATE_NOT_AVAILABLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ON_PREMISES'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                        new \PHPStan\Type\Constant\ConstantStringType('disks'),
                        new \PHPStan\Type\Constant\ConstantStringType('identificationHints'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('os'),
                        new \PHPStan\Type\Constant\ConstantStringType('ramBytes'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cores'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ebsVolumeID'),
                            new \PHPStan\Type\Constant\ConstantStringType('internalDeviceName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsInstanceID'),
                            new \PHPStan\Type\Constant\ConstantStringType('fqdn'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmWareUuid'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ips'),
                            new \PHPStan\Type\Constant\ConstantStringType('isPrimary'),
                            new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fullString'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRecoverySnapshots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ebsSnapshots'),
                    new \PHPStan\Type\Constant\ConstantStringType('expectedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshotID'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                    new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeReplicationConfigurationTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('associateDefaultSecurityGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoReplicateNewDisks'),
                    new \PHPStan\Type\Constant\ConstantStringType('bandwidthThrottling'),
                    new \PHPStan\Type\Constant\ConstantStringType('createPublicIP'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataPlaneRouting'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultLargeStagingDiskType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ebsEncryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('ebsEncryptionKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('pitPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationConfigurationTemplateID'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationServerInstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationServersSecurityGroupsIDs'),
                    new \PHPStan\Type\Constant\ConstantStringType('stagingAreaSubnetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('stagingAreaTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('useDedicatedReplicationServer'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_IP'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_IP'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GP2'),
                        new \PHPStan\Type\Constant\ConstantStringType('GP3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ST1'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('interval'),
                        new \PHPStan\Type\Constant\ConstantStringType('retentionDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleID'),
                        new \PHPStan\Type\Constant\ConstantStringType('units'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeSourceNetworks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('cfnStackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRecovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchedVpcID'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationStatusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceAccountID'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceNetworkID'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceVpcID'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastRecoveryResult'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE_FAIL'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROTECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeSourceServers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastLaunchResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('lifeCycle'),
                    new \PHPStan\Type\Constant\ConstantStringType('recoveryInstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationDirection'),
                    new \PHPStan\Type\Constant\ConstantStringType('reversedDirectionSourceServerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceCloudProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceNetworkID'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                    new \PHPStan\Type\Constant\ConstantStringType('stagingArea'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('dataReplicationError'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInitiation'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataReplicationState'),
                        new \PHPStan\Type\Constant\ConstantStringType('etaDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lagDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingOutpostArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                            new \PHPStan\Type\Constant\ConstantStringType('rawError'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AGENT_NOT_SEEN'),
                                new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOTS_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONVERGING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNSTABLE_NETWORK'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CREATE_SECURITY_GROUP'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_LAUNCH_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_BOOT_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_AUTHENTICATE_WITH_SERVICE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CREATE_STAGING_DISKS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_ATTACH_STAGING_DISKS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_START_DATA_TRANSFER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('nextAttemptDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('startDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('steps'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('WAIT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_SECURITY_GROUP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_REPLICATION_SERVER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BOOT_REPLICATION_SERVER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTHENTICATE_WITH_SERVICE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOWNLOAD_REPLICATION_SOFTWARE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_STAGING_DISKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ATTACH_STAGING_DISKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PAIR_REPLICATION_SERVER_WITH_AGENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT_AGENT_TO_REPLICATION_SERVER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('START_DATA_TRANSFER'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INITIATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INITIAL_SYNC'),
                            new \PHPStan\Type\Constant\ConstantStringType('BACKLOG'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING_SNAPSHOT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTINUOUS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESCAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('STALLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('backloggedStorageBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('replicatedStorageBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('rescannedStorageBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('totalStorageBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeStatus'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('REGULAR'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS_MARKETPLACE_PRODUCT_CODES'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISSING_VOLUME_ATTRIBUTES'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('addedToServiceDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('elapsedReplicationDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('firstByteDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastLaunch'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastSeenByServiceDateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RECOVERY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DRILL'),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILBACK'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('originAccountID'),
                        new \PHPStan\Type\Constant\ConstantStringType('originAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('originRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceOutpostArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                        new \PHPStan\Type\Constant\ConstantStringType('disks'),
                        new \PHPStan\Type\Constant\ConstantStringType('identificationHints'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('os'),
                        new \PHPStan\Type\Constant\ConstantStringType('ramBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('recommendedInstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('supportsNitroInstances'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cores'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsInstanceID'),
                            new \PHPStan\Type\Constant\ConstantStringType('fqdn'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmWareUuid'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ips'),
                            new \PHPStan\Type\Constant\ConstantStringType('isPrimary'),
                            new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fullString'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingAccountID'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingSourceServerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXTENDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTENSION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EXTENDED'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disconnectRecoveryInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disconnectSourceServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('lastLaunchResult'),
                new \PHPStan\Type\Constant\ConstantStringType('lifeCycle'),
                new \PHPStan\Type\Constant\ConstantStringType('recoveryInstanceId'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationDirection'),
                new \PHPStan\Type\Constant\ConstantStringType('reversedDirectionSourceServerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceCloudProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceNetworkID'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('stagingArea'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationError'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInitiation'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('etaDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
                    new \PHPStan\Type\Constant\ConstantStringType('stagingAvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('stagingOutpostArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('rawError'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AGENT_NOT_SEEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOTS_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CONVERGING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSTABLE_NETWORK'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CREATE_SECURITY_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_LAUNCH_REPLICATION_SERVER'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_BOOT_REPLICATION_SERVER'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_AUTHENTICATE_WITH_SERVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CREATE_STAGING_DISKS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_ATTACH_STAGING_DISKS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_START_DATA_TRANSFER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('nextAttemptDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('startDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('steps'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('WAIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATE_SECURITY_GROUP'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOT_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('AUTHENTICATE_WITH_SERVICE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOWNLOAD_REPLICATION_SOFTWARE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATE_STAGING_DISKS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ATTACH_STAGING_DISKS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PAIR_REPLICATION_SERVER_WITH_AGENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONNECT_AGENT_TO_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('START_DATA_TRANSFER'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INITIATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INITIAL_SYNC'),
                        new \PHPStan\Type\Constant\ConstantStringType('BACKLOG'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING_SNAPSHOT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTINUOUS'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESCAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STALLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('backloggedStorageBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicatedStorageBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('rescannedStorageBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalStorageBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumeStatus'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGULAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS_MARKETPLACE_PRODUCT_CODES'),
                            new \PHPStan\Type\Constant\ConstantStringType('MISSING_VOLUME_ATTRIBUTES'),
                            new \PHPStan\Type\Constant\ConstantStringType('MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('addedToServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsedReplicationDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstByteDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastLaunch'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSeenByServiceDateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RECOVERY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DRILL'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FAILOVER'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILBACK'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('originAccountID'),
                    new \PHPStan\Type\Constant\ConstantStringType('originAvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('originRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceOutpostArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                    new \PHPStan\Type\Constant\ConstantStringType('disks'),
                    new \PHPStan\Type\Constant\ConstantStringType('identificationHints'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                    new \PHPStan\Type\Constant\ConstantStringType('os'),
                    new \PHPStan\Type\Constant\ConstantStringType('ramBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedInstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportsNitroInstances'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cores'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('fqdn'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmWareUuid'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ips'),
                        new \PHPStan\Type\Constant\ConstantStringType('isPrimary'),
                        new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fullString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('stagingAccountID'),
                    new \PHPStan\Type\Constant\ConstantStringType('stagingSourceServerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EXTENDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTENSION_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_EXTENDED'),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function exportSourceNetworkCfnTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('s3DestinationUrl'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getFailbackReplicationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('bandwidthThrottling'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('recoveryInstanceID'),
                new \PHPStan\Type\Constant\ConstantStringType('usePrivateIP'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function getLaunchConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('copyPrivateIp'),
                new \PHPStan\Type\Constant\ConstantStringType('copyTags'),
                new \PHPStan\Type\Constant\ConstantStringType('ec2LaunchTemplateID'),
                new \PHPStan\Type\Constant\ConstantStringType('launchDisposition'),
                new \PHPStan\Type\Constant\ConstantStringType('launchIntoInstanceProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('licensing'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('postLaunchEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('targetInstanceTypeRightSizingMethod'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('launchIntoEC2InstanceID'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('osByol'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_AWS'),
                ]),
            ]),
        ]);
    }
    private function getReplicationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('associateDefaultSecurityGroup'),
                new \PHPStan\Type\Constant\ConstantStringType('autoReplicateNewDisks'),
                new \PHPStan\Type\Constant\ConstantStringType('bandwidthThrottling'),
                new \PHPStan\Type\Constant\ConstantStringType('createPublicIP'),
                new \PHPStan\Type\Constant\ConstantStringType('dataPlaneRouting'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultLargeStagingDiskType'),
                new \PHPStan\Type\Constant\ConstantStringType('ebsEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('ebsEncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('pitPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationServerInstanceType'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationServersSecurityGroupsIDs'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('stagingAreaSubnetId'),
                new \PHPStan\Type\Constant\ConstantStringType('stagingAreaTags'),
                new \PHPStan\Type\Constant\ConstantStringType('useDedicatedReplicationServer'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_IP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_IP'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('GP2'),
                    new \PHPStan\Type\Constant\ConstantStringType('GP3'),
                    new \PHPStan\Type\Constant\ConstantStringType('ST1'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('interval'),
                    new \PHPStan\Type\Constant\ConstantStringType('retentionDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleID'),
                    new \PHPStan\Type\Constant\ConstantStringType('units'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('iops'),
                    new \PHPStan\Type\Constant\ConstantStringType('isBootDisk'),
                    new \PHPStan\Type\Constant\ConstantStringType('optimizedStagingDiskType'),
                    new \PHPStan\Type\Constant\ConstantStringType('stagingDiskType'),
                    new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                        new \PHPStan\Type\Constant\ConstantStringType('GP2'),
                        new \PHPStan\Type\Constant\ConstantStringType('GP3'),
                        new \PHPStan\Type\Constant\ConstantStringType('IO1'),
                        new \PHPStan\Type\Constant\ConstantStringType('SC1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ST1'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                        new \PHPStan\Type\Constant\ConstantStringType('GP2'),
                        new \PHPStan\Type\Constant\ConstantStringType('GP3'),
                        new \PHPStan\Type\Constant\ConstantStringType('IO1'),
                        new \PHPStan\Type\Constant\ConstantStringType('SC1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ST1'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function initializeService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function listExtensibleSourceServers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLaunchActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('actionCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('active'),
                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('optional'),
                    new \PHPStan\Type\Constant\ConstantStringType('order'),
                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MONITORING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECURITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SSM_STORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SSM_AUTOMATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSM_COMMAND'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStagingAccounts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accounts'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountID'),
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
    private function putLaunchAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actionCode'),
                new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                new \PHPStan\Type\Constant\ConstantStringType('actionVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('active'),
                new \PHPStan\Type\Constant\ConstantStringType('category'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('optional'),
                new \PHPStan\Type\Constant\ConstantStringType('order'),
                new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('MONITORING'),
                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('SECURITY'),
                    new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SSM_STORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SSM_AUTOMATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSM_COMMAND'),
                ]),
            ]),
        ]);
    }
    private function retryDataReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('lastLaunchResult'),
                new \PHPStan\Type\Constant\ConstantStringType('lifeCycle'),
                new \PHPStan\Type\Constant\ConstantStringType('recoveryInstanceId'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationDirection'),
                new \PHPStan\Type\Constant\ConstantStringType('reversedDirectionSourceServerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceCloudProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceNetworkID'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('stagingArea'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationError'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInitiation'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('etaDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
                    new \PHPStan\Type\Constant\ConstantStringType('stagingAvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('stagingOutpostArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('rawError'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AGENT_NOT_SEEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOTS_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CONVERGING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSTABLE_NETWORK'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CREATE_SECURITY_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_LAUNCH_REPLICATION_SERVER'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_BOOT_REPLICATION_SERVER'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_AUTHENTICATE_WITH_SERVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CREATE_STAGING_DISKS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_ATTACH_STAGING_DISKS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_START_DATA_TRANSFER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('nextAttemptDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('startDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('steps'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('WAIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATE_SECURITY_GROUP'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOT_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('AUTHENTICATE_WITH_SERVICE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOWNLOAD_REPLICATION_SOFTWARE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATE_STAGING_DISKS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ATTACH_STAGING_DISKS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PAIR_REPLICATION_SERVER_WITH_AGENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONNECT_AGENT_TO_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('START_DATA_TRANSFER'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INITIATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INITIAL_SYNC'),
                        new \PHPStan\Type\Constant\ConstantStringType('BACKLOG'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING_SNAPSHOT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTINUOUS'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESCAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STALLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('backloggedStorageBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicatedStorageBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('rescannedStorageBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('totalStorageBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumeStatus'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGULAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS_MARKETPLACE_PRODUCT_CODES'),
                            new \PHPStan\Type\Constant\ConstantStringType('MISSING_VOLUME_ATTRIBUTES'),
                            new \PHPStan\Type\Constant\ConstantStringType('MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('addedToServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsedReplicationDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstByteDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastLaunch'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSeenByServiceDateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RECOVERY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DRILL'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FAILOVER'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILBACK'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('originAccountID'),
                    new \PHPStan\Type\Constant\ConstantStringType('originAvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('originRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceOutpostArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                    new \PHPStan\Type\Constant\ConstantStringType('disks'),
                    new \PHPStan\Type\Constant\ConstantStringType('identificationHints'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                    new \PHPStan\Type\Constant\ConstantStringType('os'),
                    new \PHPStan\Type\Constant\ConstantStringType('ramBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedInstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportsNitroInstances'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cores'),
                        new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('fqdn'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmWareUuid'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ips'),
                        new \PHPStan\Type\Constant\ConstantStringType('isPrimary'),
                        new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fullString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('stagingAccountID'),
                    new \PHPStan\Type\Constant\ConstantStringType('stagingSourceServerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EXTENDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTENSION_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_EXTENDED'),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function reverseReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('reversedDirectionSourceServerArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startFailbackLaunch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('job'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('initiatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                    new \PHPStan\Type\Constant\ConstantStringType('participatingResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('participatingServers'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('START_RECOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_DRILL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILBACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSTIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_RECOVERY_INSTANCES'),
                        new \PHPStan\Type\Constant\ConstantStringType('TARGET_ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_NETWORK_RECOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NETWORK_RECOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE_NETWORK_RECOVERY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('participatingResourceID'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceNetworkID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('launchActionsStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('recoveryInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('runs'),
                            new \PHPStan\Type\Constant\ConstantStringType('ssmAgentDiscoveryDatetime'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('actionCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('active'),
                                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('optional'),
                                    new \PHPStan\Type\Constant\ConstantStringType('order'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MONITORING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SECURITY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SSM_STORE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SSM_AUTOMATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SSM_COMMAND'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_CONVERTED_SNAPSHOT'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function startRecovery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('job'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('initiatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                    new \PHPStan\Type\Constant\ConstantStringType('participatingResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('participatingServers'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('START_RECOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_DRILL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILBACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSTIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_RECOVERY_INSTANCES'),
                        new \PHPStan\Type\Constant\ConstantStringType('TARGET_ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_NETWORK_RECOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NETWORK_RECOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE_NETWORK_RECOVERY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('participatingResourceID'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceNetworkID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('launchActionsStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('recoveryInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('runs'),
                            new \PHPStan\Type\Constant\ConstantStringType('ssmAgentDiscoveryDatetime'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('actionCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('active'),
                                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('optional'),
                                    new \PHPStan\Type\Constant\ConstantStringType('order'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MONITORING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SECURITY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SSM_STORE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SSM_AUTOMATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SSM_COMMAND'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_CONVERTED_SNAPSHOT'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function startReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sourceServer'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastLaunchResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('lifeCycle'),
                    new \PHPStan\Type\Constant\ConstantStringType('recoveryInstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationDirection'),
                    new \PHPStan\Type\Constant\ConstantStringType('reversedDirectionSourceServerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceCloudProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceNetworkID'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                    new \PHPStan\Type\Constant\ConstantStringType('stagingArea'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('dataReplicationError'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInitiation'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataReplicationState'),
                        new \PHPStan\Type\Constant\ConstantStringType('etaDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lagDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingOutpostArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                            new \PHPStan\Type\Constant\ConstantStringType('rawError'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AGENT_NOT_SEEN'),
                                new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOTS_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONVERGING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNSTABLE_NETWORK'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CREATE_SECURITY_GROUP'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_LAUNCH_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_BOOT_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_AUTHENTICATE_WITH_SERVICE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CREATE_STAGING_DISKS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_ATTACH_STAGING_DISKS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_START_DATA_TRANSFER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('nextAttemptDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('startDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('steps'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('WAIT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_SECURITY_GROUP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_REPLICATION_SERVER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BOOT_REPLICATION_SERVER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTHENTICATE_WITH_SERVICE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOWNLOAD_REPLICATION_SOFTWARE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_STAGING_DISKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ATTACH_STAGING_DISKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PAIR_REPLICATION_SERVER_WITH_AGENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT_AGENT_TO_REPLICATION_SERVER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('START_DATA_TRANSFER'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INITIATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INITIAL_SYNC'),
                            new \PHPStan\Type\Constant\ConstantStringType('BACKLOG'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING_SNAPSHOT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTINUOUS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESCAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('STALLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('backloggedStorageBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('replicatedStorageBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('rescannedStorageBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('totalStorageBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeStatus'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('REGULAR'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS_MARKETPLACE_PRODUCT_CODES'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISSING_VOLUME_ATTRIBUTES'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('addedToServiceDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('elapsedReplicationDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('firstByteDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastLaunch'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastSeenByServiceDateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RECOVERY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DRILL'),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILBACK'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('originAccountID'),
                        new \PHPStan\Type\Constant\ConstantStringType('originAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('originRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceOutpostArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                        new \PHPStan\Type\Constant\ConstantStringType('disks'),
                        new \PHPStan\Type\Constant\ConstantStringType('identificationHints'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('os'),
                        new \PHPStan\Type\Constant\ConstantStringType('ramBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('recommendedInstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('supportsNitroInstances'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cores'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsInstanceID'),
                            new \PHPStan\Type\Constant\ConstantStringType('fqdn'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmWareUuid'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ips'),
                            new \PHPStan\Type\Constant\ConstantStringType('isPrimary'),
                            new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fullString'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingAccountID'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingSourceServerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXTENDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTENSION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EXTENDED'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function startSourceNetworkRecovery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('job'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('initiatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                    new \PHPStan\Type\Constant\ConstantStringType('participatingResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('participatingServers'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('START_RECOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_DRILL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILBACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSTIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_RECOVERY_INSTANCES'),
                        new \PHPStan\Type\Constant\ConstantStringType('TARGET_ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_NETWORK_RECOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NETWORK_RECOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE_NETWORK_RECOVERY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('participatingResourceID'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceNetworkID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('launchActionsStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('recoveryInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('runs'),
                            new \PHPStan\Type\Constant\ConstantStringType('ssmAgentDiscoveryDatetime'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('actionCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('active'),
                                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('optional'),
                                    new \PHPStan\Type\Constant\ConstantStringType('order'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MONITORING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SECURITY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SSM_STORE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SSM_AUTOMATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SSM_COMMAND'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_CONVERTED_SNAPSHOT'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function startSourceNetworkReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sourceNetwork'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('cfnStackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRecovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchedVpcID'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationStatusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceAccountID'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceNetworkID'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceVpcID'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastRecoveryResult'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE_FAIL'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROTECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function stopFailback(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function stopReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sourceServer'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastLaunchResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('lifeCycle'),
                    new \PHPStan\Type\Constant\ConstantStringType('recoveryInstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationDirection'),
                    new \PHPStan\Type\Constant\ConstantStringType('reversedDirectionSourceServerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceCloudProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceNetworkID'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                    new \PHPStan\Type\Constant\ConstantStringType('stagingArea'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('dataReplicationError'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInitiation'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataReplicationState'),
                        new \PHPStan\Type\Constant\ConstantStringType('etaDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lagDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingOutpostArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                            new \PHPStan\Type\Constant\ConstantStringType('rawError'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AGENT_NOT_SEEN'),
                                new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOTS_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONVERGING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNSTABLE_NETWORK'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CREATE_SECURITY_GROUP'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_LAUNCH_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_BOOT_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_AUTHENTICATE_WITH_SERVICE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CREATE_STAGING_DISKS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_ATTACH_STAGING_DISKS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_START_DATA_TRANSFER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('nextAttemptDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('startDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('steps'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('WAIT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_SECURITY_GROUP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_REPLICATION_SERVER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BOOT_REPLICATION_SERVER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTHENTICATE_WITH_SERVICE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOWNLOAD_REPLICATION_SOFTWARE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_STAGING_DISKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ATTACH_STAGING_DISKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PAIR_REPLICATION_SERVER_WITH_AGENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT_AGENT_TO_REPLICATION_SERVER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('START_DATA_TRANSFER'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INITIATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INITIAL_SYNC'),
                            new \PHPStan\Type\Constant\ConstantStringType('BACKLOG'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING_SNAPSHOT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTINUOUS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESCAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('STALLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('backloggedStorageBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('replicatedStorageBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('rescannedStorageBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('totalStorageBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeStatus'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('REGULAR'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTAINS_MARKETPLACE_PRODUCT_CODES'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISSING_VOLUME_ATTRIBUTES'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('addedToServiceDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('elapsedReplicationDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('firstByteDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastLaunch'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastSeenByServiceDateTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RECOVERY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DRILL'),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILBACK'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('originAccountID'),
                        new \PHPStan\Type\Constant\ConstantStringType('originAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('originRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceOutpostArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                        new \PHPStan\Type\Constant\ConstantStringType('disks'),
                        new \PHPStan\Type\Constant\ConstantStringType('identificationHints'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('os'),
                        new \PHPStan\Type\Constant\ConstantStringType('ramBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('recommendedInstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('supportsNitroInstances'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cores'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsInstanceID'),
                            new \PHPStan\Type\Constant\ConstantStringType('fqdn'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                            new \PHPStan\Type\Constant\ConstantStringType('vmWareUuid'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ips'),
                            new \PHPStan\Type\Constant\ConstantStringType('isPrimary'),
                            new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fullString'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingAccountID'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingSourceServerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXTENDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTENSION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EXTENDED'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function stopSourceNetworkReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sourceNetwork'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('cfnStackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRecovery'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchedVpcID'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationStatusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceAccountID'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceNetworkID'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceVpcID'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastRecoveryResult'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE_FAIL'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROTECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function terminateRecoveryInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('job'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('initiatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                    new \PHPStan\Type\Constant\ConstantStringType('participatingResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('participatingServers'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('START_RECOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_DRILL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILBACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSTIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_RECOVERY_INSTANCES'),
                        new \PHPStan\Type\Constant\ConstantStringType('TARGET_ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_NETWORK_RECOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NETWORK_RECOVERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE_NETWORK_RECOVERY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('participatingResourceID'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceNetworkID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('launchActionsStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('recoveryInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('runs'),
                            new \PHPStan\Type\Constant\ConstantStringType('ssmAgentDiscoveryDatetime'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                                new \PHPStan\Type\Constant\ConstantStringType('runId'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('actionCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actionVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('active'),
                                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('optional'),
                                    new \PHPStan\Type\Constant\ConstantStringType('order'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('MONITORING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SECURITY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SSM_STORE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SSM_AUTOMATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SSM_COMMAND'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_CONVERTED_SNAPSHOT'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateFailbackReplicationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateLaunchConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('copyPrivateIp'),
                new \PHPStan\Type\Constant\ConstantStringType('copyTags'),
                new \PHPStan\Type\Constant\ConstantStringType('ec2LaunchTemplateID'),
                new \PHPStan\Type\Constant\ConstantStringType('launchDisposition'),
                new \PHPStan\Type\Constant\ConstantStringType('launchIntoInstanceProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('licensing'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('postLaunchEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('targetInstanceTypeRightSizingMethod'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('launchIntoEC2InstanceID'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('osByol'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_AWS'),
                ]),
            ]),
        ]);
    }
    private function updateLaunchConfigurationTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('launchConfigurationTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('copyPrivateIp'),
                    new \PHPStan\Type\Constant\ConstantStringType('copyTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('exportBucketArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchConfigurationTemplateID'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchDisposition'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchIntoSourceInstance'),
                    new \PHPStan\Type\Constant\ConstantStringType('licensing'),
                    new \PHPStan\Type\Constant\ConstantStringType('postLaunchEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetInstanceTypeRightSizingMethod'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('osByol'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_AWS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateReplicationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('associateDefaultSecurityGroup'),
                new \PHPStan\Type\Constant\ConstantStringType('autoReplicateNewDisks'),
                new \PHPStan\Type\Constant\ConstantStringType('bandwidthThrottling'),
                new \PHPStan\Type\Constant\ConstantStringType('createPublicIP'),
                new \PHPStan\Type\Constant\ConstantStringType('dataPlaneRouting'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultLargeStagingDiskType'),
                new \PHPStan\Type\Constant\ConstantStringType('ebsEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('ebsEncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('pitPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationServerInstanceType'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationServersSecurityGroupsIDs'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('stagingAreaSubnetId'),
                new \PHPStan\Type\Constant\ConstantStringType('stagingAreaTags'),
                new \PHPStan\Type\Constant\ConstantStringType('useDedicatedReplicationServer'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_IP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_IP'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('GP2'),
                    new \PHPStan\Type\Constant\ConstantStringType('GP3'),
                    new \PHPStan\Type\Constant\ConstantStringType('ST1'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('interval'),
                    new \PHPStan\Type\Constant\ConstantStringType('retentionDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleID'),
                    new \PHPStan\Type\Constant\ConstantStringType('units'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('iops'),
                    new \PHPStan\Type\Constant\ConstantStringType('isBootDisk'),
                    new \PHPStan\Type\Constant\ConstantStringType('optimizedStagingDiskType'),
                    new \PHPStan\Type\Constant\ConstantStringType('stagingDiskType'),
                    new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                        new \PHPStan\Type\Constant\ConstantStringType('GP2'),
                        new \PHPStan\Type\Constant\ConstantStringType('GP3'),
                        new \PHPStan\Type\Constant\ConstantStringType('IO1'),
                        new \PHPStan\Type\Constant\ConstantStringType('SC1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ST1'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                        new \PHPStan\Type\Constant\ConstantStringType('GP2'),
                        new \PHPStan\Type\Constant\ConstantStringType('GP3'),
                        new \PHPStan\Type\Constant\ConstantStringType('IO1'),
                        new \PHPStan\Type\Constant\ConstantStringType('SC1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ST1'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function updateReplicationConfigurationTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('associateDefaultSecurityGroup'),
                new \PHPStan\Type\Constant\ConstantStringType('autoReplicateNewDisks'),
                new \PHPStan\Type\Constant\ConstantStringType('bandwidthThrottling'),
                new \PHPStan\Type\Constant\ConstantStringType('createPublicIP'),
                new \PHPStan\Type\Constant\ConstantStringType('dataPlaneRouting'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultLargeStagingDiskType'),
                new \PHPStan\Type\Constant\ConstantStringType('ebsEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('ebsEncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('pitPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationConfigurationTemplateID'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationServerInstanceType'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationServersSecurityGroupsIDs'),
                new \PHPStan\Type\Constant\ConstantStringType('stagingAreaSubnetId'),
                new \PHPStan\Type\Constant\ConstantStringType('stagingAreaTags'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('useDedicatedReplicationServer'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_IP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_IP'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('GP2'),
                    new \PHPStan\Type\Constant\ConstantStringType('GP3'),
                    new \PHPStan\Type\Constant\ConstantStringType('ST1'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('interval'),
                    new \PHPStan\Type\Constant\ConstantStringType('retentionDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruleID'),
                    new \PHPStan\Type\Constant\ConstantStringType('units'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
}