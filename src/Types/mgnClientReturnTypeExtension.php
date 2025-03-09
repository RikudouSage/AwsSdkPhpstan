<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class mgnClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\mgn\mgnClient>
     */
    public function getClass(): string
    {
        return \Aws\mgn\mgnClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'archiveApplication',
            'archiveWave',
            'associateApplications',
            'associateSourceServers',
            'changeServerLifeCycleState',
            'createApplication',
            'createConnector',
            'createLaunchConfigurationTemplate',
            'createReplicationConfigurationTemplate',
            'createWave',
            'deleteApplication',
            'deleteConnector',
            'deleteJob',
            'deleteLaunchConfigurationTemplate',
            'deleteReplicationConfigurationTemplate',
            'deleteSourceServer',
            'deleteVcenterClient',
            'deleteWave',
            'describeJobLogItems',
            'describeJobs',
            'describeLaunchConfigurationTemplates',
            'describeReplicationConfigurationTemplates',
            'describeSourceServers',
            'describeVcenterClients',
            'disassociateApplications',
            'disassociateSourceServers',
            'disconnectFromService',
            'finalizeCutover',
            'getLaunchConfiguration',
            'getReplicationConfiguration',
            'initializeService',
            'listApplications',
            'listConnectors',
            'listExportErrors',
            'listExports',
            'listImportErrors',
            'listImports',
            'listManagedAccounts',
            'listSourceServerActions',
            'listTagsForResource',
            'listTemplateActions',
            'listWaves',
            'markAsArchived',
            'pauseReplication',
            'putSourceServerAction',
            'putTemplateAction',
            'removeSourceServerAction',
            'removeTemplateAction',
            'resumeReplication',
            'retryDataReplication',
            'startCutover',
            'startExport',
            'startImport',
            'startReplication',
            'startTest',
            'stopReplication',
            'tagResource',
            'terminateTargetInstances',
            'unarchiveApplication',
            'unarchiveWave',
            'untagResource',
            'updateApplication',
            'updateConnector',
            'updateLaunchConfiguration',
            'updateLaunchConfigurationTemplate',
            'updateReplicationConfiguration',
            'updateReplicationConfigurationTemplate',
            'updateSourceServer',
            'updateSourceServerReplicationType',
            'updateWave',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'archiveApplication' => $this->archiveApplication(),
            'archiveWave' => $this->archiveWave(),
            'associateApplications' => $this->associateApplications(),
            'associateSourceServers' => $this->associateSourceServers(),
            'changeServerLifeCycleState' => $this->changeServerLifeCycleState(),
            'createApplication' => $this->createApplication(),
            'createConnector' => $this->createConnector(),
            'createLaunchConfigurationTemplate' => $this->createLaunchConfigurationTemplate(),
            'createReplicationConfigurationTemplate' => $this->createReplicationConfigurationTemplate(),
            'createWave' => $this->createWave(),
            'deleteApplication' => $this->deleteApplication(),
            'deleteConnector' => $this->deleteConnector(),
            'deleteJob' => $this->deleteJob(),
            'deleteLaunchConfigurationTemplate' => $this->deleteLaunchConfigurationTemplate(),
            'deleteReplicationConfigurationTemplate' => $this->deleteReplicationConfigurationTemplate(),
            'deleteSourceServer' => $this->deleteSourceServer(),
            'deleteVcenterClient' => $this->deleteVcenterClient(),
            'deleteWave' => $this->deleteWave(),
            'describeJobLogItems' => $this->describeJobLogItems(),
            'describeJobs' => $this->describeJobs(),
            'describeLaunchConfigurationTemplates' => $this->describeLaunchConfigurationTemplates(),
            'describeReplicationConfigurationTemplates' => $this->describeReplicationConfigurationTemplates(),
            'describeSourceServers' => $this->describeSourceServers(),
            'describeVcenterClients' => $this->describeVcenterClients(),
            'disassociateApplications' => $this->disassociateApplications(),
            'disassociateSourceServers' => $this->disassociateSourceServers(),
            'disconnectFromService' => $this->disconnectFromService(),
            'finalizeCutover' => $this->finalizeCutover(),
            'getLaunchConfiguration' => $this->getLaunchConfiguration(),
            'getReplicationConfiguration' => $this->getReplicationConfiguration(),
            'initializeService' => $this->initializeService(),
            'listApplications' => $this->listApplications(),
            'listConnectors' => $this->listConnectors(),
            'listExportErrors' => $this->listExportErrors(),
            'listExports' => $this->listExports(),
            'listImportErrors' => $this->listImportErrors(),
            'listImports' => $this->listImports(),
            'listManagedAccounts' => $this->listManagedAccounts(),
            'listSourceServerActions' => $this->listSourceServerActions(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTemplateActions' => $this->listTemplateActions(),
            'listWaves' => $this->listWaves(),
            'markAsArchived' => $this->markAsArchived(),
            'pauseReplication' => $this->pauseReplication(),
            'putSourceServerAction' => $this->putSourceServerAction(),
            'putTemplateAction' => $this->putTemplateAction(),
            'removeSourceServerAction' => $this->removeSourceServerAction(),
            'removeTemplateAction' => $this->removeTemplateAction(),
            'resumeReplication' => $this->resumeReplication(),
            'retryDataReplication' => $this->retryDataReplication(),
            'startCutover' => $this->startCutover(),
            'startExport' => $this->startExport(),
            'startImport' => $this->startImport(),
            'startReplication' => $this->startReplication(),
            'startTest' => $this->startTest(),
            'stopReplication' => $this->stopReplication(),
            'tagResource' => $this->tagResource(),
            'terminateTargetInstances' => $this->terminateTargetInstances(),
            'unarchiveApplication' => $this->unarchiveApplication(),
            'unarchiveWave' => $this->unarchiveWave(),
            'untagResource' => $this->untagResource(),
            'updateApplication' => $this->updateApplication(),
            'updateConnector' => $this->updateConnector(),
            'updateLaunchConfiguration' => $this->updateLaunchConfiguration(),
            'updateLaunchConfigurationTemplate' => $this->updateLaunchConfigurationTemplate(),
            'updateReplicationConfiguration' => $this->updateReplicationConfiguration(),
            'updateReplicationConfigurationTemplate' => $this->updateReplicationConfigurationTemplate(),
            'updateSourceServer' => $this->updateSourceServer(),
            'updateSourceServerReplicationType' => $this->updateSourceServerReplicationType(),
            'updateWave' => $this->updateWave(),
        };
    }
    private function archiveApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationAggregatedStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('applicationID'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('waveID'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('progressStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalSourceServers'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAGGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function archiveWave(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('waveAggregatedStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('waveID'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('progressStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationStartedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalApplications'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAGGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function associateApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateSourceServers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function changeServerLifeCycleState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationID'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('connectorAction'),
                new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('fqdnForActionFramework'),
                new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                new \PHPStan\Type\Constant\ConstantStringType('launchedInstance'),
                new \PHPStan\Type\Constant\ConstantStringType('lifeCycle'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationType'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('userProvidedID'),
                new \PHPStan\Type\Constant\ConstantStringType('vcenterClientID'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationError'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInitiation'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('etaDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSnapshotDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
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
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_VM_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAST_SNAPSHOT_JOB_FAILED'),
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
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
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
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_SNAPSHOT_SHIPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHIPPING_SNAPSHOT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
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
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceID'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstBoot'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('addedToServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsedReplicationDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstByteDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastCutover'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSeenByServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastTest'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('TESTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTTING_OVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCOVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALLATION'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AGENT_BASED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT_SHIPPING'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                    new \PHPStan\Type\Constant\ConstantStringType('disks'),
                    new \PHPStan\Type\Constant\ConstantStringType('identificationHints'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                    new \PHPStan\Type\Constant\ConstantStringType('os'),
                    new \PHPStan\Type\Constant\ConstantStringType('ramBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedInstanceType'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cores'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('fqdn'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmWareUuid'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ips'),
                            new \PHPStan\Type\Constant\ConstantStringType('isPrimary'),
                            new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fullString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationAggregatedStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('applicationID'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('waveID'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('progressStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalSourceServers'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAGGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('connectorID'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('ssmCommandConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ssmInstanceID'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('cloudWatchOutputEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputS3BucketName'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3OutputEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createLaunchConfigurationTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('associatePublicIpAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('bootMode'),
                new \PHPStan\Type\Constant\ConstantStringType('copyPrivateIp'),
                new \PHPStan\Type\Constant\ConstantStringType('copyTags'),
                new \PHPStan\Type\Constant\ConstantStringType('ec2LaunchTemplateID'),
                new \PHPStan\Type\Constant\ConstantStringType('enableMapAutoTagging'),
                new \PHPStan\Type\Constant\ConstantStringType('largeVolumeConf'),
                new \PHPStan\Type\Constant\ConstantStringType('launchConfigurationTemplateID'),
                new \PHPStan\Type\Constant\ConstantStringType('launchDisposition'),
                new \PHPStan\Type\Constant\ConstantStringType('licensing'),
                new \PHPStan\Type\Constant\ConstantStringType('mapAutoTaggingMpeID'),
                new \PHPStan\Type\Constant\ConstantStringType('postLaunchActions'),
                new \PHPStan\Type\Constant\ConstantStringType('smallVolumeConf'),
                new \PHPStan\Type\Constant\ConstantStringType('smallVolumeMaxSize'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('targetInstanceTypeRightSizingMethod'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LEGACY_BIOS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UEFI'),
                    new \PHPStan\Type\Constant\ConstantStringType('USE_SOURCE'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('iops'),
                    new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('io1'),
                        new \PHPStan\Type\Constant\ConstantStringType('io2'),
                        new \PHPStan\Type\Constant\ConstantStringType('gp3'),
                        new \PHPStan\Type\Constant\ConstantStringType('gp2'),
                        new \PHPStan\Type\Constant\ConstantStringType('st1'),
                        new \PHPStan\Type\Constant\ConstantStringType('sc1'),
                        new \PHPStan\Type\Constant\ConstantStringType('standard'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('osByol'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('deployment'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3LogBucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3OutputKeyPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('ssmDocuments'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TEST_AND_CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTOVER_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEST_ONLY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('externalParameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('mustSucceedForCutover'),
                            new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('ssmDocumentName'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeoutSeconds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('dynamicPath'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('parameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parameterType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                ]),
                            ]))),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('iops'),
                    new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('io1'),
                        new \PHPStan\Type\Constant\ConstantStringType('io2'),
                        new \PHPStan\Type\Constant\ConstantStringType('gp3'),
                        new \PHPStan\Type\Constant\ConstantStringType('gp2'),
                        new \PHPStan\Type\Constant\ConstantStringType('st1'),
                        new \PHPStan\Type\Constant\ConstantStringType('sc1'),
                        new \PHPStan\Type\Constant\ConstantStringType('standard'),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
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
                new \PHPStan\Type\Constant\ConstantStringType('bandwidthThrottling'),
                new \PHPStan\Type\Constant\ConstantStringType('createPublicIP'),
                new \PHPStan\Type\Constant\ConstantStringType('dataPlaneRouting'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultLargeStagingDiskType'),
                new \PHPStan\Type\Constant\ConstantStringType('ebsEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('ebsEncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationConfigurationTemplateID'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationServerInstanceType'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationServersSecurityGroupsIDs'),
                new \PHPStan\Type\Constant\ConstantStringType('stagingAreaSubnetId'),
                new \PHPStan\Type\Constant\ConstantStringType('stagingAreaTags'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('useDedicatedReplicationServer'),
                new \PHPStan\Type\Constant\ConstantStringType('useFipsEndpoint'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_IP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_IP'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('GP2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ST1'),
                    new \PHPStan\Type\Constant\ConstantStringType('GP3'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function createWave(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('waveAggregatedStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('waveID'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('progressStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationStartedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalApplications'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAGGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteJob(): ?\PHPStan\Type\Type
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
    private function deleteReplicationConfigurationTemplate(): ?\PHPStan\Type\Type
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
    private function deleteVcenterClient(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteWave(): ?\PHPStan\Type\Type
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
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
                            new \PHPStan\Type\Constant\ConstantStringType('CONVERSION_START'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONVERSION_END'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONVERSION_FAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_START'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('JOB_CANCEL'),
                            new \PHPStan\Type\Constant\ConstantStringType('JOB_END'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('conversionServerID'),
                            new \PHPStan\Type\Constant\ConstantStringType('rawError'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetInstanceID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        new \PHPStan\Type\Constant\ConstantStringType('participatingServers'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('START_TEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('START_CUTOVER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSTIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('launchedEc2InstanceID'),
                                new \PHPStan\Type\Constant\ConstantStringType('postLaunchActionsStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('postLaunchActionsLaunchStatusList'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ssmAgentDiscoveryDatetime'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('executionID'),
                                            new \PHPStan\Type\Constant\ConstantStringType('executionStatus'),
                                            new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ssmDocument'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ssmDocumentType'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                                                new \PHPStan\Type\Constant\ConstantStringType('externalParameters'),
                                                new \PHPStan\Type\Constant\ConstantStringType('mustSucceedForCutover'),
                                                new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ssmDocumentName'),
                                                new \PHPStan\Type\Constant\ConstantStringType('timeoutSeconds'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('dynamicPath'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                                new \PHPStan\Type\BooleanType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('parameterName'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('parameterType'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    ]),
                                                ]))),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('AUTOMATION'),
                                                new \PHPStan\Type\Constant\ConstantStringType('COMMAND'),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
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
                        ]),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('associatePublicIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('bootMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('copyPrivateIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('copyTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2LaunchTemplateID'),
                        new \PHPStan\Type\Constant\ConstantStringType('enableMapAutoTagging'),
                        new \PHPStan\Type\Constant\ConstantStringType('largeVolumeConf'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchConfigurationTemplateID'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchDisposition'),
                        new \PHPStan\Type\Constant\ConstantStringType('licensing'),
                        new \PHPStan\Type\Constant\ConstantStringType('mapAutoTaggingMpeID'),
                        new \PHPStan\Type\Constant\ConstantStringType('postLaunchActions'),
                        new \PHPStan\Type\Constant\ConstantStringType('smallVolumeConf'),
                        new \PHPStan\Type\Constant\ConstantStringType('smallVolumeMaxSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetInstanceTypeRightSizingMethod'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LEGACY_BIOS'),
                            new \PHPStan\Type\Constant\ConstantStringType('UEFI'),
                            new \PHPStan\Type\Constant\ConstantStringType('USE_SOURCE'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('iops'),
                            new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('io1'),
                                new \PHPStan\Type\Constant\ConstantStringType('io2'),
                                new \PHPStan\Type\Constant\ConstantStringType('gp3'),
                                new \PHPStan\Type\Constant\ConstantStringType('gp2'),
                                new \PHPStan\Type\Constant\ConstantStringType('st1'),
                                new \PHPStan\Type\Constant\ConstantStringType('sc1'),
                                new \PHPStan\Type\Constant\ConstantStringType('standard'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('osByol'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('deployment'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3LogBucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3OutputKeyPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('ssmDocuments'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEST_AND_CUTOVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('CUTOVER_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST_ONLY'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('externalParameters'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mustSucceedForCutover'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ssmDocumentName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('timeoutSeconds'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('dynamicPath'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('parameterName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('parameterType'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                        ]),
                                    ]))),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('iops'),
                            new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('io1'),
                                new \PHPStan\Type\Constant\ConstantStringType('io2'),
                                new \PHPStan\Type\Constant\ConstantStringType('gp3'),
                                new \PHPStan\Type\Constant\ConstantStringType('gp2'),
                                new \PHPStan\Type\Constant\ConstantStringType('st1'),
                                new \PHPStan\Type\Constant\ConstantStringType('sc1'),
                                new \PHPStan\Type\Constant\ConstantStringType('standard'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                        ]),
                    ]),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('associateDefaultSecurityGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('bandwidthThrottling'),
                        new \PHPStan\Type\Constant\ConstantStringType('createPublicIP'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataPlaneRouting'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultLargeStagingDiskType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ebsEncryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('ebsEncryptionKeyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicationConfigurationTemplateID'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicationServerInstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicationServersSecurityGroupsIDs'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingAreaSubnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingAreaTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('useDedicatedReplicationServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('useFipsEndpoint'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_IP'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_IP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GP2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ST1'),
                            new \PHPStan\Type\Constant\ConstantStringType('GP3'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('applicationID'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectorAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('fqdnForActionFramework'),
                        new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchedInstance'),
                        new \PHPStan\Type\Constant\ConstantStringType('lifeCycle'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('userProvidedID'),
                        new \PHPStan\Type\Constant\ConstantStringType('vcenterClientID'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('connectorArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dataReplicationError'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInitiation'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataReplicationState'),
                            new \PHPStan\Type\Constant\ConstantStringType('etaDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('lagDuration'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastSnapshotDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
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
                                    new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_VM_CONFIGURATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAST_SNAPSHOT_JOB_FAILED'),
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
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
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
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING_SNAPSHOT_SHIPPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHIPPING_SNAPSHOT'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
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
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceID'),
                            new \PHPStan\Type\Constant\ConstantStringType('firstBoot'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('addedToServiceDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('elapsedReplicationDuration'),
                            new \PHPStan\Type\Constant\ConstantStringType('firstByteDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastCutover'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastSeenByServiceDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastTest'),
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                                new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                                new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                                new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                                new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                                new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_TEST'),
                                new \PHPStan\Type\Constant\ConstantStringType('TESTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CUTOVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('CUTTING_OVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('CUTOVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISCOVERED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALLATION'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AGENT_BASED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT_SHIPPING'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                            new \PHPStan\Type\Constant\ConstantStringType('disks'),
                            new \PHPStan\Type\Constant\ConstantStringType('identificationHints'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                            new \PHPStan\Type\Constant\ConstantStringType('os'),
                            new \PHPStan\Type\Constant\ConstantStringType('ramBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('recommendedInstanceType'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('cores'),
                                    new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('awsInstanceID'),
                                new \PHPStan\Type\Constant\ConstantStringType('fqdn'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('vmWareUuid'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ips'),
                                    new \PHPStan\Type\Constant\ConstantStringType('isPrimary'),
                                    new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fullString'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeVcenterClients(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('datacenterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastSeenDatetime'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceServerTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('vcenterClientID'),
                        new \PHPStan\Type\Constant\ConstantStringType('vcenterUUID'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateSourceServers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disconnectFromService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationID'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('connectorAction'),
                new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('fqdnForActionFramework'),
                new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                new \PHPStan\Type\Constant\ConstantStringType('launchedInstance'),
                new \PHPStan\Type\Constant\ConstantStringType('lifeCycle'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationType'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('userProvidedID'),
                new \PHPStan\Type\Constant\ConstantStringType('vcenterClientID'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationError'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInitiation'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('etaDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSnapshotDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
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
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_VM_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAST_SNAPSHOT_JOB_FAILED'),
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
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
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
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_SNAPSHOT_SHIPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHIPPING_SNAPSHOT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
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
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceID'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstBoot'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('addedToServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsedReplicationDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstByteDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastCutover'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSeenByServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastTest'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('TESTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTTING_OVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCOVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALLATION'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AGENT_BASED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT_SHIPPING'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                    new \PHPStan\Type\Constant\ConstantStringType('disks'),
                    new \PHPStan\Type\Constant\ConstantStringType('identificationHints'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                    new \PHPStan\Type\Constant\ConstantStringType('os'),
                    new \PHPStan\Type\Constant\ConstantStringType('ramBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedInstanceType'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cores'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('fqdn'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmWareUuid'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ips'),
                            new \PHPStan\Type\Constant\ConstantStringType('isPrimary'),
                            new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fullString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function finalizeCutover(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationID'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('connectorAction'),
                new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('fqdnForActionFramework'),
                new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                new \PHPStan\Type\Constant\ConstantStringType('launchedInstance'),
                new \PHPStan\Type\Constant\ConstantStringType('lifeCycle'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationType'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('userProvidedID'),
                new \PHPStan\Type\Constant\ConstantStringType('vcenterClientID'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationError'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInitiation'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('etaDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSnapshotDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
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
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_VM_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAST_SNAPSHOT_JOB_FAILED'),
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
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
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
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_SNAPSHOT_SHIPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHIPPING_SNAPSHOT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
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
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceID'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstBoot'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('addedToServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsedReplicationDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstByteDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastCutover'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSeenByServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastTest'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('TESTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTTING_OVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCOVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALLATION'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AGENT_BASED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT_SHIPPING'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                    new \PHPStan\Type\Constant\ConstantStringType('disks'),
                    new \PHPStan\Type\Constant\ConstantStringType('identificationHints'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                    new \PHPStan\Type\Constant\ConstantStringType('os'),
                    new \PHPStan\Type\Constant\ConstantStringType('ramBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedInstanceType'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cores'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('fqdn'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmWareUuid'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ips'),
                            new \PHPStan\Type\Constant\ConstantStringType('isPrimary'),
                            new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fullString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getLaunchConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('bootMode'),
                new \PHPStan\Type\Constant\ConstantStringType('copyPrivateIp'),
                new \PHPStan\Type\Constant\ConstantStringType('copyTags'),
                new \PHPStan\Type\Constant\ConstantStringType('ec2LaunchTemplateID'),
                new \PHPStan\Type\Constant\ConstantStringType('enableMapAutoTagging'),
                new \PHPStan\Type\Constant\ConstantStringType('launchDisposition'),
                new \PHPStan\Type\Constant\ConstantStringType('licensing'),
                new \PHPStan\Type\Constant\ConstantStringType('mapAutoTaggingMpeID'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('postLaunchActions'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('targetInstanceTypeRightSizingMethod'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LEGACY_BIOS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UEFI'),
                    new \PHPStan\Type\Constant\ConstantStringType('USE_SOURCE'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('osByol'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('deployment'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3LogBucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3OutputKeyPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('ssmDocuments'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TEST_AND_CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTOVER_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEST_ONLY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('externalParameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('mustSucceedForCutover'),
                            new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('ssmDocumentName'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeoutSeconds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('dynamicPath'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('parameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parameterType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                ]),
                            ]))),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                ]),
            ]),
        ]);
    }
    private function getReplicationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('associateDefaultSecurityGroup'),
                new \PHPStan\Type\Constant\ConstantStringType('bandwidthThrottling'),
                new \PHPStan\Type\Constant\ConstantStringType('createPublicIP'),
                new \PHPStan\Type\Constant\ConstantStringType('dataPlaneRouting'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultLargeStagingDiskType'),
                new \PHPStan\Type\Constant\ConstantStringType('ebsEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('ebsEncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationServerInstanceType'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationServersSecurityGroupsIDs'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('stagingAreaSubnetId'),
                new \PHPStan\Type\Constant\ConstantStringType('stagingAreaTags'),
                new \PHPStan\Type\Constant\ConstantStringType('useDedicatedReplicationServer'),
                new \PHPStan\Type\Constant\ConstantStringType('useFipsEndpoint'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_IP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_IP'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('GP2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ST1'),
                    new \PHPStan\Type\Constant\ConstantStringType('GP3'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('iops'),
                        new \PHPStan\Type\Constant\ConstantStringType('isBootDisk'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingDiskType'),
                        new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                            new \PHPStan\Type\Constant\ConstantStringType('GP2'),
                            new \PHPStan\Type\Constant\ConstantStringType('IO1'),
                            new \PHPStan\Type\Constant\ConstantStringType('SC1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ST1'),
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('GP3'),
                            new \PHPStan\Type\Constant\ConstantStringType('IO2'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
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
    private function listApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('applicationAggregatedStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('applicationID'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('waveID'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('progressStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('totalSourceServers'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAGGING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listConnectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectorID'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ssmCommandConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ssmInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchOutputEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('outputS3BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3OutputEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listExportErrors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorData'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorDateTime'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('rawError'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listExports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('exportID'),
                        new \PHPStan\Type\Constant\ConstantStringType('progressPercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3BucketOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('summary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('applicationsCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('serversCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('wavesCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listImportErrors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorData'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountID'),
                            new \PHPStan\Type\Constant\ConstantStringType('applicationID'),
                            new \PHPStan\Type\Constant\ConstantStringType('ec2LaunchTemplateID'),
                            new \PHPStan\Type\Constant\ConstantStringType('rawError'),
                            new \PHPStan\Type\Constant\ConstantStringType('rowNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                            new \PHPStan\Type\Constant\ConstantStringType('waveID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING_ERROR'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listImports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('importID'),
                        new \PHPStan\Type\Constant\ConstantStringType('progressPercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3BucketSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('summary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3BucketOwner'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('applications'),
                            new \PHPStan\Type\Constant\ConstantStringType('servers'),
                            new \PHPStan\Type\Constant\ConstantStringType('waves'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('createdCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('modifiedCount'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('createdCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('modifiedCount'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('createdCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('modifiedCount'),
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
    private function listManagedAccounts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSourceServerActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('actionID'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('active'),
                        new \PHPStan\Type\Constant\ConstantStringType('category'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('documentIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('documentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('mustSucceedForCutover'),
                        new \PHPStan\Type\Constant\ConstantStringType('order'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DISASTER_RECOVERY'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPERATING_SYSTEM'),
                            new \PHPStan\Type\Constant\ConstantStringType('LICENSE_AND_SUBSCRIPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('OBSERVABILITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('REFACTORING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORKING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BACKUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dynamicPath'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('parameterName'),
                                new \PHPStan\Type\Constant\ConstantStringType('parameterType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            ]),
                        ]))),
                        new \PHPStan\Type\IntegerType(),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listTemplateActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('actionID'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('active'),
                        new \PHPStan\Type\Constant\ConstantStringType('category'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('documentIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('documentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('mustSucceedForCutover'),
                        new \PHPStan\Type\Constant\ConstantStringType('operatingSystem'),
                        new \PHPStan\Type\Constant\ConstantStringType('order'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DISASTER_RECOVERY'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPERATING_SYSTEM'),
                            new \PHPStan\Type\Constant\ConstantStringType('LICENSE_AND_SUBSCRIPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('OBSERVABILITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('REFACTORING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORKING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BACKUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dynamicPath'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('parameterName'),
                                new \PHPStan\Type\Constant\ConstantStringType('parameterType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            ]),
                        ]))),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWaves(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('waveAggregatedStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('waveID'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('progressStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('replicationStartedDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('totalApplications'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAGGING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function markAsArchived(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationID'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('connectorAction'),
                new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('fqdnForActionFramework'),
                new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                new \PHPStan\Type\Constant\ConstantStringType('launchedInstance'),
                new \PHPStan\Type\Constant\ConstantStringType('lifeCycle'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationType'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('userProvidedID'),
                new \PHPStan\Type\Constant\ConstantStringType('vcenterClientID'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationError'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInitiation'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('etaDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSnapshotDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
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
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_VM_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAST_SNAPSHOT_JOB_FAILED'),
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
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
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
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_SNAPSHOT_SHIPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHIPPING_SNAPSHOT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
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
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceID'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstBoot'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('addedToServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsedReplicationDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstByteDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastCutover'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSeenByServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastTest'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('TESTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTTING_OVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCOVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALLATION'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AGENT_BASED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT_SHIPPING'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                    new \PHPStan\Type\Constant\ConstantStringType('disks'),
                    new \PHPStan\Type\Constant\ConstantStringType('identificationHints'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                    new \PHPStan\Type\Constant\ConstantStringType('os'),
                    new \PHPStan\Type\Constant\ConstantStringType('ramBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedInstanceType'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cores'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('fqdn'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmWareUuid'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ips'),
                            new \PHPStan\Type\Constant\ConstantStringType('isPrimary'),
                            new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fullString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function pauseReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationID'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('connectorAction'),
                new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('fqdnForActionFramework'),
                new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                new \PHPStan\Type\Constant\ConstantStringType('launchedInstance'),
                new \PHPStan\Type\Constant\ConstantStringType('lifeCycle'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationType'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('userProvidedID'),
                new \PHPStan\Type\Constant\ConstantStringType('vcenterClientID'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationError'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInitiation'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('etaDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSnapshotDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
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
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_VM_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAST_SNAPSHOT_JOB_FAILED'),
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
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
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
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_SNAPSHOT_SHIPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHIPPING_SNAPSHOT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
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
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceID'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstBoot'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('addedToServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsedReplicationDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstByteDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastCutover'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSeenByServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastTest'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('TESTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTTING_OVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCOVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALLATION'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AGENT_BASED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT_SHIPPING'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                    new \PHPStan\Type\Constant\ConstantStringType('disks'),
                    new \PHPStan\Type\Constant\ConstantStringType('identificationHints'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                    new \PHPStan\Type\Constant\ConstantStringType('os'),
                    new \PHPStan\Type\Constant\ConstantStringType('ramBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedInstanceType'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cores'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('fqdn'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmWareUuid'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ips'),
                            new \PHPStan\Type\Constant\ConstantStringType('isPrimary'),
                            new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fullString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putSourceServerAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actionID'),
                new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                new \PHPStan\Type\Constant\ConstantStringType('active'),
                new \PHPStan\Type\Constant\ConstantStringType('category'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('documentIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('documentVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('externalParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('mustSucceedForCutover'),
                new \PHPStan\Type\Constant\ConstantStringType('order'),
                new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                new \PHPStan\Type\Constant\ConstantStringType('timeoutSeconds'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DISASTER_RECOVERY'),
                    new \PHPStan\Type\Constant\ConstantStringType('OPERATING_SYSTEM'),
                    new \PHPStan\Type\Constant\ConstantStringType('LICENSE_AND_SUBSCRIPTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('OBSERVABILITY'),
                    new \PHPStan\Type\Constant\ConstantStringType('REFACTORING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SECURITY'),
                    new \PHPStan\Type\Constant\ConstantStringType('NETWORKING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('BACKUP'),
                    new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dynamicPath'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('parameterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameterType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                    ]),
                ]))),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function putTemplateAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('actionID'),
                new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                new \PHPStan\Type\Constant\ConstantStringType('active'),
                new \PHPStan\Type\Constant\ConstantStringType('category'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('documentIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('documentVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('externalParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('mustSucceedForCutover'),
                new \PHPStan\Type\Constant\ConstantStringType('operatingSystem'),
                new \PHPStan\Type\Constant\ConstantStringType('order'),
                new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                new \PHPStan\Type\Constant\ConstantStringType('timeoutSeconds'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DISASTER_RECOVERY'),
                    new \PHPStan\Type\Constant\ConstantStringType('OPERATING_SYSTEM'),
                    new \PHPStan\Type\Constant\ConstantStringType('LICENSE_AND_SUBSCRIPTION'),
                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('OBSERVABILITY'),
                    new \PHPStan\Type\Constant\ConstantStringType('REFACTORING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SECURITY'),
                    new \PHPStan\Type\Constant\ConstantStringType('NETWORKING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('BACKUP'),
                    new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dynamicPath'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('parameterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameterType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                    ]),
                ]))),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function removeSourceServerAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function removeTemplateAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function resumeReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationID'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('connectorAction'),
                new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('fqdnForActionFramework'),
                new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                new \PHPStan\Type\Constant\ConstantStringType('launchedInstance'),
                new \PHPStan\Type\Constant\ConstantStringType('lifeCycle'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationType'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('userProvidedID'),
                new \PHPStan\Type\Constant\ConstantStringType('vcenterClientID'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationError'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInitiation'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('etaDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSnapshotDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
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
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_VM_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAST_SNAPSHOT_JOB_FAILED'),
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
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
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
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_SNAPSHOT_SHIPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHIPPING_SNAPSHOT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
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
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceID'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstBoot'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('addedToServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsedReplicationDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstByteDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastCutover'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSeenByServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastTest'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('TESTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTTING_OVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCOVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALLATION'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AGENT_BASED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT_SHIPPING'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                    new \PHPStan\Type\Constant\ConstantStringType('disks'),
                    new \PHPStan\Type\Constant\ConstantStringType('identificationHints'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                    new \PHPStan\Type\Constant\ConstantStringType('os'),
                    new \PHPStan\Type\Constant\ConstantStringType('ramBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedInstanceType'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cores'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('fqdn'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmWareUuid'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ips'),
                            new \PHPStan\Type\Constant\ConstantStringType('isPrimary'),
                            new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fullString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function retryDataReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationID'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('connectorAction'),
                new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('fqdnForActionFramework'),
                new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                new \PHPStan\Type\Constant\ConstantStringType('launchedInstance'),
                new \PHPStan\Type\Constant\ConstantStringType('lifeCycle'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationType'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('userProvidedID'),
                new \PHPStan\Type\Constant\ConstantStringType('vcenterClientID'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationError'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInitiation'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('etaDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSnapshotDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
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
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_VM_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAST_SNAPSHOT_JOB_FAILED'),
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
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
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
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_SNAPSHOT_SHIPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHIPPING_SNAPSHOT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
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
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceID'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstBoot'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('addedToServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsedReplicationDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstByteDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastCutover'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSeenByServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastTest'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('TESTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTTING_OVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCOVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALLATION'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AGENT_BASED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT_SHIPPING'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                    new \PHPStan\Type\Constant\ConstantStringType('disks'),
                    new \PHPStan\Type\Constant\ConstantStringType('identificationHints'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                    new \PHPStan\Type\Constant\ConstantStringType('os'),
                    new \PHPStan\Type\Constant\ConstantStringType('ramBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedInstanceType'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cores'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('fqdn'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmWareUuid'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ips'),
                            new \PHPStan\Type\Constant\ConstantStringType('isPrimary'),
                            new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fullString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startCutover(): ?\PHPStan\Type\Type
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
                    new \PHPStan\Type\Constant\ConstantStringType('participatingServers'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('START_TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSTIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('launchedEc2InstanceID'),
                            new \PHPStan\Type\Constant\ConstantStringType('postLaunchActionsStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('postLaunchActionsLaunchStatusList'),
                                new \PHPStan\Type\Constant\ConstantStringType('ssmAgentDiscoveryDatetime'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('executionID'),
                                        new \PHPStan\Type\Constant\ConstantStringType('executionStatus'),
                                        new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ssmDocument'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ssmDocumentType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('externalParameters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('mustSucceedForCutover'),
                                            new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ssmDocumentName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('timeoutSeconds'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('dynamicPath'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('parameterName'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('parameterType'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                ]),
                                            ]))),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('COMMAND'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
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
                    ]),
                ]),
            ]),
        ]);
    }
    private function startExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('exportTask'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('exportID'),
                    new \PHPStan\Type\Constant\ConstantStringType('progressPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3BucketOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('summary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('applicationsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('serversCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('wavesCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function startImport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('importTask'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('importID'),
                    new \PHPStan\Type\Constant\ConstantStringType('progressPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3BucketSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('summary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3BucketOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('applications'),
                        new \PHPStan\Type\Constant\ConstantStringType('servers'),
                        new \PHPStan\Type\Constant\ConstantStringType('waves'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('createdCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifiedCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('createdCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifiedCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('createdCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('modifiedCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function startReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationID'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('connectorAction'),
                new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('fqdnForActionFramework'),
                new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                new \PHPStan\Type\Constant\ConstantStringType('launchedInstance'),
                new \PHPStan\Type\Constant\ConstantStringType('lifeCycle'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationType'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('userProvidedID'),
                new \PHPStan\Type\Constant\ConstantStringType('vcenterClientID'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationError'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInitiation'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('etaDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSnapshotDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
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
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_VM_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAST_SNAPSHOT_JOB_FAILED'),
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
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
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
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_SNAPSHOT_SHIPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHIPPING_SNAPSHOT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
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
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceID'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstBoot'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('addedToServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsedReplicationDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstByteDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastCutover'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSeenByServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastTest'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('TESTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTTING_OVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCOVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALLATION'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AGENT_BASED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT_SHIPPING'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                    new \PHPStan\Type\Constant\ConstantStringType('disks'),
                    new \PHPStan\Type\Constant\ConstantStringType('identificationHints'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                    new \PHPStan\Type\Constant\ConstantStringType('os'),
                    new \PHPStan\Type\Constant\ConstantStringType('ramBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedInstanceType'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cores'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('fqdn'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmWareUuid'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ips'),
                            new \PHPStan\Type\Constant\ConstantStringType('isPrimary'),
                            new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fullString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startTest(): ?\PHPStan\Type\Type
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
                    new \PHPStan\Type\Constant\ConstantStringType('participatingServers'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('START_TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSTIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('launchedEc2InstanceID'),
                            new \PHPStan\Type\Constant\ConstantStringType('postLaunchActionsStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('postLaunchActionsLaunchStatusList'),
                                new \PHPStan\Type\Constant\ConstantStringType('ssmAgentDiscoveryDatetime'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('executionID'),
                                        new \PHPStan\Type\Constant\ConstantStringType('executionStatus'),
                                        new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ssmDocument'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ssmDocumentType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('externalParameters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('mustSucceedForCutover'),
                                            new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ssmDocumentName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('timeoutSeconds'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('dynamicPath'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('parameterName'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('parameterType'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                ]),
                                            ]))),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('COMMAND'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
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
                    ]),
                ]),
            ]),
        ]);
    }
    private function stopReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationID'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('connectorAction'),
                new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('fqdnForActionFramework'),
                new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                new \PHPStan\Type\Constant\ConstantStringType('launchedInstance'),
                new \PHPStan\Type\Constant\ConstantStringType('lifeCycle'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationType'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('userProvidedID'),
                new \PHPStan\Type\Constant\ConstantStringType('vcenterClientID'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationError'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInitiation'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('etaDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSnapshotDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
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
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_VM_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAST_SNAPSHOT_JOB_FAILED'),
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
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
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
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_SNAPSHOT_SHIPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHIPPING_SNAPSHOT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
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
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceID'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstBoot'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('addedToServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsedReplicationDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstByteDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastCutover'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSeenByServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastTest'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('TESTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTTING_OVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCOVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALLATION'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AGENT_BASED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT_SHIPPING'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                    new \PHPStan\Type\Constant\ConstantStringType('disks'),
                    new \PHPStan\Type\Constant\ConstantStringType('identificationHints'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                    new \PHPStan\Type\Constant\ConstantStringType('os'),
                    new \PHPStan\Type\Constant\ConstantStringType('ramBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedInstanceType'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cores'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('fqdn'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmWareUuid'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ips'),
                            new \PHPStan\Type\Constant\ConstantStringType('isPrimary'),
                            new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fullString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
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
    private function terminateTargetInstances(): ?\PHPStan\Type\Type
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
                    new \PHPStan\Type\Constant\ConstantStringType('participatingServers'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('START_TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSTIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('launchStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('launchedEc2InstanceID'),
                            new \PHPStan\Type\Constant\ConstantStringType('postLaunchActionsStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAUNCHED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('postLaunchActionsLaunchStatusList'),
                                new \PHPStan\Type\Constant\ConstantStringType('ssmAgentDiscoveryDatetime'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('executionID'),
                                        new \PHPStan\Type\Constant\ConstantStringType('executionStatus'),
                                        new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ssmDocument'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ssmDocumentType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('externalParameters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('mustSucceedForCutover'),
                                            new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ssmDocumentName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('timeoutSeconds'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('dynamicPath'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('parameterName'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('parameterType'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                ]),
                                            ]))),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('COMMAND'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
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
                    ]),
                ]),
            ]),
        ]);
    }
    private function unarchiveApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationAggregatedStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('applicationID'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('waveID'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('progressStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalSourceServers'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAGGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function unarchiveWave(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('waveAggregatedStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('waveID'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('progressStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationStartedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalApplications'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAGGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationAggregatedStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('applicationID'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('waveID'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('progressStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalSourceServers'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAGGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('connectorID'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('ssmCommandConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ssmInstanceID'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('cloudWatchOutputEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputS3BucketName'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3OutputEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateLaunchConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('bootMode'),
                new \PHPStan\Type\Constant\ConstantStringType('copyPrivateIp'),
                new \PHPStan\Type\Constant\ConstantStringType('copyTags'),
                new \PHPStan\Type\Constant\ConstantStringType('ec2LaunchTemplateID'),
                new \PHPStan\Type\Constant\ConstantStringType('enableMapAutoTagging'),
                new \PHPStan\Type\Constant\ConstantStringType('launchDisposition'),
                new \PHPStan\Type\Constant\ConstantStringType('licensing'),
                new \PHPStan\Type\Constant\ConstantStringType('mapAutoTaggingMpeID'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('postLaunchActions'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('targetInstanceTypeRightSizingMethod'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LEGACY_BIOS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UEFI'),
                    new \PHPStan\Type\Constant\ConstantStringType('USE_SOURCE'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('osByol'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('deployment'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3LogBucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3OutputKeyPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('ssmDocuments'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TEST_AND_CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTOVER_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEST_ONLY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('externalParameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('mustSucceedForCutover'),
                            new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('ssmDocumentName'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeoutSeconds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('dynamicPath'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('parameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parameterType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                ]),
                            ]))),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                ]),
            ]),
        ]);
    }
    private function updateLaunchConfigurationTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('associatePublicIpAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('bootMode'),
                new \PHPStan\Type\Constant\ConstantStringType('copyPrivateIp'),
                new \PHPStan\Type\Constant\ConstantStringType('copyTags'),
                new \PHPStan\Type\Constant\ConstantStringType('ec2LaunchTemplateID'),
                new \PHPStan\Type\Constant\ConstantStringType('enableMapAutoTagging'),
                new \PHPStan\Type\Constant\ConstantStringType('largeVolumeConf'),
                new \PHPStan\Type\Constant\ConstantStringType('launchConfigurationTemplateID'),
                new \PHPStan\Type\Constant\ConstantStringType('launchDisposition'),
                new \PHPStan\Type\Constant\ConstantStringType('licensing'),
                new \PHPStan\Type\Constant\ConstantStringType('mapAutoTaggingMpeID'),
                new \PHPStan\Type\Constant\ConstantStringType('postLaunchActions'),
                new \PHPStan\Type\Constant\ConstantStringType('smallVolumeConf'),
                new \PHPStan\Type\Constant\ConstantStringType('smallVolumeMaxSize'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('targetInstanceTypeRightSizingMethod'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LEGACY_BIOS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UEFI'),
                    new \PHPStan\Type\Constant\ConstantStringType('USE_SOURCE'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('iops'),
                    new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('io1'),
                        new \PHPStan\Type\Constant\ConstantStringType('io2'),
                        new \PHPStan\Type\Constant\ConstantStringType('gp3'),
                        new \PHPStan\Type\Constant\ConstantStringType('gp2'),
                        new \PHPStan\Type\Constant\ConstantStringType('st1'),
                        new \PHPStan\Type\Constant\ConstantStringType('sc1'),
                        new \PHPStan\Type\Constant\ConstantStringType('standard'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('osByol'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('deployment'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3LogBucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3OutputKeyPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('ssmDocuments'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TEST_AND_CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTOVER_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEST_ONLY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('externalParameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('mustSucceedForCutover'),
                            new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('ssmDocumentName'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeoutSeconds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('dynamicPath'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('parameterName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('parameterType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                ]),
                            ]))),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('iops'),
                    new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('io1'),
                        new \PHPStan\Type\Constant\ConstantStringType('io2'),
                        new \PHPStan\Type\Constant\ConstantStringType('gp3'),
                        new \PHPStan\Type\Constant\ConstantStringType('gp2'),
                        new \PHPStan\Type\Constant\ConstantStringType('st1'),
                        new \PHPStan\Type\Constant\ConstantStringType('sc1'),
                        new \PHPStan\Type\Constant\ConstantStringType('standard'),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                ]),
            ]),
        ]);
    }
    private function updateReplicationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('associateDefaultSecurityGroup'),
                new \PHPStan\Type\Constant\ConstantStringType('bandwidthThrottling'),
                new \PHPStan\Type\Constant\ConstantStringType('createPublicIP'),
                new \PHPStan\Type\Constant\ConstantStringType('dataPlaneRouting'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultLargeStagingDiskType'),
                new \PHPStan\Type\Constant\ConstantStringType('ebsEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('ebsEncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationServerInstanceType'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationServersSecurityGroupsIDs'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('stagingAreaSubnetId'),
                new \PHPStan\Type\Constant\ConstantStringType('stagingAreaTags'),
                new \PHPStan\Type\Constant\ConstantStringType('useDedicatedReplicationServer'),
                new \PHPStan\Type\Constant\ConstantStringType('useFipsEndpoint'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_IP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_IP'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('GP2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ST1'),
                    new \PHPStan\Type\Constant\ConstantStringType('GP3'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('iops'),
                        new \PHPStan\Type\Constant\ConstantStringType('isBootDisk'),
                        new \PHPStan\Type\Constant\ConstantStringType('stagingDiskType'),
                        new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                            new \PHPStan\Type\Constant\ConstantStringType('GP2'),
                            new \PHPStan\Type\Constant\ConstantStringType('IO1'),
                            new \PHPStan\Type\Constant\ConstantStringType('SC1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ST1'),
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('GP3'),
                            new \PHPStan\Type\Constant\ConstantStringType('IO2'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
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
                new \PHPStan\Type\Constant\ConstantStringType('bandwidthThrottling'),
                new \PHPStan\Type\Constant\ConstantStringType('createPublicIP'),
                new \PHPStan\Type\Constant\ConstantStringType('dataPlaneRouting'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultLargeStagingDiskType'),
                new \PHPStan\Type\Constant\ConstantStringType('ebsEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('ebsEncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationConfigurationTemplateID'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationServerInstanceType'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationServersSecurityGroupsIDs'),
                new \PHPStan\Type\Constant\ConstantStringType('stagingAreaSubnetId'),
                new \PHPStan\Type\Constant\ConstantStringType('stagingAreaTags'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('useDedicatedReplicationServer'),
                new \PHPStan\Type\Constant\ConstantStringType('useFipsEndpoint'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_IP'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_IP'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('GP2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ST1'),
                    new \PHPStan\Type\Constant\ConstantStringType('GP3'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function updateSourceServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationID'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('connectorAction'),
                new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('fqdnForActionFramework'),
                new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                new \PHPStan\Type\Constant\ConstantStringType('launchedInstance'),
                new \PHPStan\Type\Constant\ConstantStringType('lifeCycle'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationType'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('userProvidedID'),
                new \PHPStan\Type\Constant\ConstantStringType('vcenterClientID'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationError'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInitiation'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('etaDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSnapshotDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
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
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_VM_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAST_SNAPSHOT_JOB_FAILED'),
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
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
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
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_SNAPSHOT_SHIPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHIPPING_SNAPSHOT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
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
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceID'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstBoot'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('addedToServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsedReplicationDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstByteDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastCutover'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSeenByServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastTest'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('TESTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTTING_OVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCOVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALLATION'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AGENT_BASED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT_SHIPPING'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                    new \PHPStan\Type\Constant\ConstantStringType('disks'),
                    new \PHPStan\Type\Constant\ConstantStringType('identificationHints'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                    new \PHPStan\Type\Constant\ConstantStringType('os'),
                    new \PHPStan\Type\Constant\ConstantStringType('ramBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedInstanceType'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cores'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('fqdn'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmWareUuid'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ips'),
                            new \PHPStan\Type\Constant\ConstantStringType('isPrimary'),
                            new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fullString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateSourceServerReplicationType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationID'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('connectorAction'),
                new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('fqdnForActionFramework'),
                new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                new \PHPStan\Type\Constant\ConstantStringType('launchedInstance'),
                new \PHPStan\Type\Constant\ConstantStringType('lifeCycle'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationType'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceServerID'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('userProvidedID'),
                new \PHPStan\Type\Constant\ConstantStringType('vcenterClientID'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentialsSecretArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationError'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationInitiation'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataReplicationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('etaDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSnapshotDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicatedDisks'),
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
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_VM_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAST_SNAPSHOT_JOB_FAILED'),
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
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
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
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_SNAPSHOT_SHIPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHIPPING_SNAPSHOT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
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
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceID'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstBoot'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('addedToServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('elapsedReplicationDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstByteDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastCutover'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSeenByServiceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastTest'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiated'),
                        new \PHPStan\Type\Constant\ConstantStringType('reverted'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobID'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('apiCallDateTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('TESTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTTING_OVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUTOVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCOVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_INSTALLATION'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AGENT_BASED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT_SHIPPING'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                    new \PHPStan\Type\Constant\ConstantStringType('disks'),
                    new \PHPStan\Type\Constant\ConstantStringType('identificationHints'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                    new \PHPStan\Type\Constant\ConstantStringType('os'),
                    new \PHPStan\Type\Constant\ConstantStringType('ramBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedInstanceType'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cores'),
                            new \PHPStan\Type\Constant\ConstantStringType('modelName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsInstanceID'),
                        new \PHPStan\Type\Constant\ConstantStringType('fqdn'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('vmWareUuid'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ips'),
                            new \PHPStan\Type\Constant\ConstantStringType('isPrimary'),
                            new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fullString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateWave(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('creationDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('isArchived'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedDateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('waveAggregatedStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('waveID'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('progressStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('replicationStartedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalApplications'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAGGING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}