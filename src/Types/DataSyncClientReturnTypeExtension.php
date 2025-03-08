<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class DataSyncClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\DataSync\DataSyncClient>
     */
    public function getClass(): string
    {
        return \Aws\DataSync\DataSyncClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addStorageSystem',
            'cancelTaskExecution',
            'createAgent',
            'createLocationAzureBlob',
            'createLocationEfs',
            'createLocationFsxLustre',
            'createLocationFsxOntap',
            'createLocationFsxOpenZfs',
            'createLocationFsxWindows',
            'createLocationHdfs',
            'createLocationNfs',
            'createLocationObjectStorage',
            'createLocationS3',
            'createLocationSmb',
            'createTask',
            'deleteAgent',
            'deleteLocation',
            'deleteTask',
            'describeAgent',
            'describeDiscoveryJob',
            'describeLocationAzureBlob',
            'describeLocationEfs',
            'describeLocationFsxLustre',
            'describeLocationFsxOntap',
            'describeLocationFsxOpenZfs',
            'describeLocationFsxWindows',
            'describeLocationHdfs',
            'describeLocationNfs',
            'describeLocationObjectStorage',
            'describeLocationS3',
            'describeLocationSmb',
            'describeStorageSystem',
            'describeStorageSystemResourceMetrics',
            'describeStorageSystemResources',
            'describeTask',
            'describeTaskExecution',
            'generateRecommendations',
            'listAgents',
            'listDiscoveryJobs',
            'listLocations',
            'listStorageSystems',
            'listTagsForResource',
            'listTaskExecutions',
            'listTasks',
            'removeStorageSystem',
            'startDiscoveryJob',
            'startTaskExecution',
            'stopDiscoveryJob',
            'tagResource',
            'untagResource',
            'updateAgent',
            'updateDiscoveryJob',
            'updateLocationAzureBlob',
            'updateLocationEfs',
            'updateLocationFsxLustre',
            'updateLocationFsxOntap',
            'updateLocationFsxOpenZfs',
            'updateLocationFsxWindows',
            'updateLocationHdfs',
            'updateLocationNfs',
            'updateLocationObjectStorage',
            'updateLocationS3',
            'updateLocationSmb',
            'updateStorageSystem',
            'updateTask',
            'updateTaskExecution',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addStorageSystem' => $this->addStorageSystem(),
            'cancelTaskExecution' => $this->cancelTaskExecution(),
            'createAgent' => $this->createAgent(),
            'createLocationAzureBlob' => $this->createLocationAzureBlob(),
            'createLocationEfs' => $this->createLocationEfs(),
            'createLocationFsxLustre' => $this->createLocationFsxLustre(),
            'createLocationFsxOntap' => $this->createLocationFsxOntap(),
            'createLocationFsxOpenZfs' => $this->createLocationFsxOpenZfs(),
            'createLocationFsxWindows' => $this->createLocationFsxWindows(),
            'createLocationHdfs' => $this->createLocationHdfs(),
            'createLocationNfs' => $this->createLocationNfs(),
            'createLocationObjectStorage' => $this->createLocationObjectStorage(),
            'createLocationS3' => $this->createLocationS3(),
            'createLocationSmb' => $this->createLocationSmb(),
            'createTask' => $this->createTask(),
            'deleteAgent' => $this->deleteAgent(),
            'deleteLocation' => $this->deleteLocation(),
            'deleteTask' => $this->deleteTask(),
            'describeAgent' => $this->describeAgent(),
            'describeDiscoveryJob' => $this->describeDiscoveryJob(),
            'describeLocationAzureBlob' => $this->describeLocationAzureBlob(),
            'describeLocationEfs' => $this->describeLocationEfs(),
            'describeLocationFsxLustre' => $this->describeLocationFsxLustre(),
            'describeLocationFsxOntap' => $this->describeLocationFsxOntap(),
            'describeLocationFsxOpenZfs' => $this->describeLocationFsxOpenZfs(),
            'describeLocationFsxWindows' => $this->describeLocationFsxWindows(),
            'describeLocationHdfs' => $this->describeLocationHdfs(),
            'describeLocationNfs' => $this->describeLocationNfs(),
            'describeLocationObjectStorage' => $this->describeLocationObjectStorage(),
            'describeLocationS3' => $this->describeLocationS3(),
            'describeLocationSmb' => $this->describeLocationSmb(),
            'describeStorageSystem' => $this->describeStorageSystem(),
            'describeStorageSystemResourceMetrics' => $this->describeStorageSystemResourceMetrics(),
            'describeStorageSystemResources' => $this->describeStorageSystemResources(),
            'describeTask' => $this->describeTask(),
            'describeTaskExecution' => $this->describeTaskExecution(),
            'generateRecommendations' => $this->generateRecommendations(),
            'listAgents' => $this->listAgents(),
            'listDiscoveryJobs' => $this->listDiscoveryJobs(),
            'listLocations' => $this->listLocations(),
            'listStorageSystems' => $this->listStorageSystems(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTaskExecutions' => $this->listTaskExecutions(),
            'listTasks' => $this->listTasks(),
            'removeStorageSystem' => $this->removeStorageSystem(),
            'startDiscoveryJob' => $this->startDiscoveryJob(),
            'startTaskExecution' => $this->startTaskExecution(),
            'stopDiscoveryJob' => $this->stopDiscoveryJob(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAgent' => $this->updateAgent(),
            'updateDiscoveryJob' => $this->updateDiscoveryJob(),
            'updateLocationAzureBlob' => $this->updateLocationAzureBlob(),
            'updateLocationEfs' => $this->updateLocationEfs(),
            'updateLocationFsxLustre' => $this->updateLocationFsxLustre(),
            'updateLocationFsxOntap' => $this->updateLocationFsxOntap(),
            'updateLocationFsxOpenZfs' => $this->updateLocationFsxOpenZfs(),
            'updateLocationFsxWindows' => $this->updateLocationFsxWindows(),
            'updateLocationHdfs' => $this->updateLocationHdfs(),
            'updateLocationNfs' => $this->updateLocationNfs(),
            'updateLocationObjectStorage' => $this->updateLocationObjectStorage(),
            'updateLocationS3' => $this->updateLocationS3(),
            'updateLocationSmb' => $this->updateLocationSmb(),
            'updateStorageSystem' => $this->updateStorageSystem(),
            'updateTask' => $this->updateTask(),
            'updateTaskExecution' => $this->updateTaskExecution(),
        };
    }
    private function addStorageSystem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StorageSystemArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function cancelTaskExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createAgent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AgentArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLocationAzureBlob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLocationEfs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLocationFsxLustre(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLocationFsxOntap(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLocationFsxOpenZfs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLocationFsxWindows(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLocationHdfs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLocationNfs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLocationObjectStorage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLocationS3(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLocationSmb(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TaskArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteAgent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteLocation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeAgent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AgentArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('LastConnectionTime'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                new \PHPStan\Type\Constant\ConstantStringType('PrivateLinkConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('Platform'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ONLINE'),
                    new \PHPStan\Type\Constant\ConstantStringType('OFFLINE'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                    new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_LINK'),
                    new \PHPStan\Type\Constant\ConstantStringType('FIPS'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrivateLinkEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupArns'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeDiscoveryJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StorageSystemArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DiscoveryJobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CollectionDurationMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('JobEndTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_WITH_ISSUES'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeLocationAzureBlob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationType'),
                new \PHPStan\Type\Constant\ConstantStringType('BlobType'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessTier'),
                new \PHPStan\Type\Constant\ConstantStringType('AgentArns'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('SAS'),
                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HOT'),
                    new \PHPStan\Type\Constant\ConstantStringType('COOL'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeLocationEfs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('Ec2Config'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessPointArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FileSystemAccessRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('InTransitEncryption'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupArns'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLS1_2'),
                ]),
            ]),
        ]);
    }
    private function describeLocationFsxLustre(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupArns'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeLocationFsxOntap(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupArns'),
                new \PHPStan\Type\Constant\ConstantStringType('StorageVirtualMachineArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FsxFilesystemArn'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NFS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SMB'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MountOptions'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                                new \PHPStan\Type\Constant\ConstantStringType('NFS3'),
                                new \PHPStan\Type\Constant\ConstantStringType('NFS4_0'),
                                new \PHPStan\Type\Constant\ConstantStringType('NFS4_1'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                        new \PHPStan\Type\Constant\ConstantStringType('MountOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Password'),
                        new \PHPStan\Type\Constant\ConstantStringType('User'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                                new \PHPStan\Type\Constant\ConstantStringType('SMB2'),
                                new \PHPStan\Type\Constant\ConstantStringType('SMB3'),
                                new \PHPStan\Type\Constant\ConstantStringType('SMB1'),
                                new \PHPStan\Type\Constant\ConstantStringType('SMB2_0'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeLocationFsxOpenZfs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupArns'),
                new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NFS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SMB'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MountOptions'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                                new \PHPStan\Type\Constant\ConstantStringType('NFS3'),
                                new \PHPStan\Type\Constant\ConstantStringType('NFS4_0'),
                                new \PHPStan\Type\Constant\ConstantStringType('NFS4_1'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                        new \PHPStan\Type\Constant\ConstantStringType('MountOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Password'),
                        new \PHPStan\Type\Constant\ConstantStringType('User'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                                new \PHPStan\Type\Constant\ConstantStringType('SMB2'),
                                new \PHPStan\Type\Constant\ConstantStringType('SMB3'),
                                new \PHPStan\Type\Constant\ConstantStringType('SMB1'),
                                new \PHPStan\Type\Constant\ConstantStringType('SMB2_0'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeLocationFsxWindows(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupArns'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('User'),
                new \PHPStan\Type\Constant\ConstantStringType('Domain'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeLocationHdfs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('NameNodes'),
                new \PHPStan\Type\Constant\ConstantStringType('BlockSize'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationFactor'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyProviderUri'),
                new \PHPStan\Type\Constant\ConstantStringType('QopConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationType'),
                new \PHPStan\Type\Constant\ConstantStringType('SimpleUser'),
                new \PHPStan\Type\Constant\ConstantStringType('KerberosPrincipal'),
                new \PHPStan\Type\Constant\ConstantStringType('AgentArns'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Hostname'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RpcProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferProtection'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTHENTICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTEGRITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVACY'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTHENTICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTEGRITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVACY'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SIMPLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('KERBEROS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeLocationNfs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('OnPremConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('MountOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AgentArns'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('NFS3'),
                        new \PHPStan\Type\Constant\ConstantStringType('NFS4_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('NFS4_1'),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeLocationObjectStorage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessKey'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerPort'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerProtocol'),
                new \PHPStan\Type\Constant\ConstantStringType('AgentArns'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerCertificate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function describeLocationS3(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('S3StorageClass'),
                new \PHPStan\Type\Constant\ConstantStringType('S3Config'),
                new \PHPStan\Type\Constant\ConstantStringType('AgentArns'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                    new \PHPStan\Type\Constant\ConstantStringType('ONEZONE_IA'),
                    new \PHPStan\Type\Constant\ConstantStringType('INTELLIGENT_TIERING'),
                    new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('OUTPOSTS'),
                    new \PHPStan\Type\Constant\ConstantStringType('GLACIER_INSTANT_RETRIEVAL'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BucketAccessRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeLocationSmb(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('AgentArns'),
                new \PHPStan\Type\Constant\ConstantStringType('User'),
                new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                new \PHPStan\Type\Constant\ConstantStringType('MountOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DnsIpAddresses'),
                new \PHPStan\Type\Constant\ConstantStringType('KerberosPrincipal'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMB2'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMB3'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMB1'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMB2_0'),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NTLM'),
                    new \PHPStan\Type\Constant\ConstantStringType('KERBEROS'),
                ]),
            ]),
        ]);
    }
    private function describeStorageSystem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StorageSystemArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('SystemType'),
                new \PHPStan\Type\Constant\ConstantStringType('AgentArns'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectivityStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogGroupArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServerHostname'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerPort'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('NetAppONTAP'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PASS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeStorageSystemResourceMetrics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('P95Metrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('Capacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IOPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throughput'),
                        new \PHPStan\Type\Constant\ConstantStringType('Latency'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Read'),
                            new \PHPStan\Type\Constant\ConstantStringType('Write'),
                            new \PHPStan\Type\Constant\ConstantStringType('Other'),
                            new \PHPStan\Type\Constant\ConstantStringType('Total'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Read'),
                            new \PHPStan\Type\Constant\ConstantStringType('Write'),
                            new \PHPStan\Type\Constant\ConstantStringType('Other'),
                            new \PHPStan\Type\Constant\ConstantStringType('Total'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Read'),
                            new \PHPStan\Type\Constant\ConstantStringType('Write'),
                            new \PHPStan\Type\Constant\ConstantStringType('Other'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Used'),
                        new \PHPStan\Type\Constant\ConstantStringType('Provisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogicalUsed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterCloudStorageUsed'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SVM'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOLUME'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLUSTER'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeStorageSystemResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NetAppONTAPSVMs'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetAppONTAPVolumes'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetAppONTAPClusters'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterUuid'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SvmName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CifsShareCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnabledProtocols'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalCapacityUsed'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalCapacityProvisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalLogicalCapacityUsed'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxP95Performance'),
                        new \PHPStan\Type\Constant\ConstantStringType('Recommendations'),
                        new \PHPStan\Type\Constant\ConstantStringType('NfsExportedVolumes'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecommendationStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalSnapshotCapacityUsed'),
                        new \PHPStan\Type\Constant\ConstantStringType('LunCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IopsRead'),
                            new \PHPStan\Type\Constant\ConstantStringType('IopsWrite'),
                            new \PHPStan\Type\Constant\ConstantStringType('IopsOther'),
                            new \PHPStan\Type\Constant\ConstantStringType('IopsTotal'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThroughputRead'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThroughputWrite'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThroughputOther'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThroughputTotal'),
                            new \PHPStan\Type\Constant\ConstantStringType('LatencyRead'),
                            new \PHPStan\Type\Constant\ConstantStringType('LatencyWrite'),
                            new \PHPStan\Type\Constant\ConstantStringType('LatencyOther'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('EstimatedMonthlyStorageCost'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CifsShareCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityStyle'),
                        new \PHPStan\Type\Constant\ConstantStringType('SvmUuid'),
                        new \PHPStan\Type\Constant\ConstantStringType('SvmName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityUsed'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityProvisioned'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogicalCapacityUsed'),
                        new \PHPStan\Type\Constant\ConstantStringType('NfsExported'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnapshotCapacityUsed'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxP95Performance'),
                        new \PHPStan\Type\Constant\ConstantStringType('Recommendations'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecommendationStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('LunCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IopsRead'),
                            new \PHPStan\Type\Constant\ConstantStringType('IopsWrite'),
                            new \PHPStan\Type\Constant\ConstantStringType('IopsOther'),
                            new \PHPStan\Type\Constant\ConstantStringType('IopsTotal'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThroughputRead'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThroughputWrite'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThroughputOther'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThroughputTotal'),
                            new \PHPStan\Type\Constant\ConstantStringType('LatencyRead'),
                            new \PHPStan\Type\Constant\ConstantStringType('LatencyWrite'),
                            new \PHPStan\Type\Constant\ConstantStringType('LatencyOther'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('EstimatedMonthlyStorageCost'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CifsShareCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('NfsExportedVolumes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxP95Performance'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterBlockStorageSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterBlockStorageUsed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterBlockStorageLogicalUsed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Recommendations'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecommendationStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('LunCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClusterCloudStorageUsed'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IopsRead'),
                            new \PHPStan\Type\Constant\ConstantStringType('IopsWrite'),
                            new \PHPStan\Type\Constant\ConstantStringType('IopsOther'),
                            new \PHPStan\Type\Constant\ConstantStringType('IopsTotal'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThroughputRead'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThroughputWrite'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThroughputOther'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThroughputTotal'),
                            new \PHPStan\Type\Constant\ConstantStringType('LatencyRead'),
                            new \PHPStan\Type\Constant\ConstantStringType('LatencyWrite'),
                            new \PHPStan\Type\Constant\ConstantStringType('LatencyOther'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('EstimatedMonthlyStorageCost'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TaskArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('CurrentTaskExecutionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceLocationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationLocationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogGroupArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceNetworkInterfaceArns'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationNetworkInterfaceArns'),
                new \PHPStan\Type\Constant\ConstantStringType('Options'),
                new \PHPStan\Type\Constant\ConstantStringType('Excludes'),
                new \PHPStan\Type\Constant\ConstantStringType('Schedule'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Includes'),
                new \PHPStan\Type\Constant\ConstantStringType('ManifestConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskReportConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ScheduleDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskMode'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNAVAILABLE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VerifyMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('OverwriteMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Atime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mtime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                    new \PHPStan\Type\Constant\ConstantStringType('Gid'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreserveDeletedFiles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreserveDevices'),
                    new \PHPStan\Type\Constant\ConstantStringType('PosixPermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('BytesPerSecond'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaskQueueing'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransferMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityDescriptorCopyFlags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectTags'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('POINT_IN_TIME_CONSISTENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ONLY_FILES_TRANSFERRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALWAYS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NEVER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BEST_EFFORT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRESERVE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INT_VALUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTH'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INT_VALUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTH'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PRESERVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRESERVE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRESERVE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                        new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSFER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CHANGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OWNER_DACL'),
                        new \PHPStan\Type\Constant\ConstantStringType('OWNER_DACL_SACL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PRESERVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FilterType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('SIMPLE_PATTERN'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FilterType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('SIMPLE_PATTERN'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSFER'),
                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestObjectPath'),
                            new \PHPStan\Type\Constant\ConstantStringType('BucketAccessRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3BucketArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestObjectVersionId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectVersionIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Overrides'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Subdirectory'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3BucketArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('BucketAccessRoleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUMMARY_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ERRORS_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSES_AND_ERRORS'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Transferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('Verified'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReportLevel'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ERRORS_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCESSES_AND_ERRORS'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReportLevel'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ERRORS_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCESSES_AND_ERRORS'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReportLevel'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ERRORS_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCESSES_AND_ERRORS'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReportLevel'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ERRORS_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCESSES_AND_ERRORS'),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StatusUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisabledReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisabledBy'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USER'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENHANCED'),
                ]),
            ]),
        ]);
    }
    private function describeTaskExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TaskExecutionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Options'),
                new \PHPStan\Type\Constant\ConstantStringType('Excludes'),
                new \PHPStan\Type\Constant\ConstantStringType('Includes'),
                new \PHPStan\Type\Constant\ConstantStringType('ManifestConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EstimatedFilesToTransfer'),
                new \PHPStan\Type\Constant\ConstantStringType('EstimatedBytesToTransfer'),
                new \PHPStan\Type\Constant\ConstantStringType('FilesTransferred'),
                new \PHPStan\Type\Constant\ConstantStringType('BytesWritten'),
                new \PHPStan\Type\Constant\ConstantStringType('BytesTransferred'),
                new \PHPStan\Type\Constant\ConstantStringType('BytesCompressed'),
                new \PHPStan\Type\Constant\ConstantStringType('Result'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskReportConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('FilesDeleted'),
                new \PHPStan\Type\Constant\ConstantStringType('FilesSkipped'),
                new \PHPStan\Type\Constant\ConstantStringType('FilesVerified'),
                new \PHPStan\Type\Constant\ConstantStringType('ReportResult'),
                new \PHPStan\Type\Constant\ConstantStringType('EstimatedFilesToDelete'),
                new \PHPStan\Type\Constant\ConstantStringType('TaskMode'),
                new \PHPStan\Type\Constant\ConstantStringType('FilesPrepared'),
                new \PHPStan\Type\Constant\ConstantStringType('FilesListed'),
                new \PHPStan\Type\Constant\ConstantStringType('FilesFailed'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAUNCHING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSFERRING'),
                    new \PHPStan\Type\Constant\ConstantStringType('VERIFYING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VerifyMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('OverwriteMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Atime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mtime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Uid'),
                    new \PHPStan\Type\Constant\ConstantStringType('Gid'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreserveDeletedFiles'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreserveDevices'),
                    new \PHPStan\Type\Constant\ConstantStringType('PosixPermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('BytesPerSecond'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaskQueueing'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransferMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityDescriptorCopyFlags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectTags'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('POINT_IN_TIME_CONSISTENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ONLY_FILES_TRANSFERRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALWAYS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NEVER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BEST_EFFORT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRESERVE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INT_VALUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTH'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INT_VALUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTH'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PRESERVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRESERVE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRESERVE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                        new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSFER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CHANGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OWNER_DACL'),
                        new \PHPStan\Type\Constant\ConstantStringType('OWNER_DACL_SACL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PRESERVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FilterType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('SIMPLE_PATTERN'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FilterType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('SIMPLE_PATTERN'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSFER'),
                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestObjectPath'),
                            new \PHPStan\Type\Constant\ConstantStringType('BucketAccessRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3BucketArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestObjectVersionId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PrepareDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrepareStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransferDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransferStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('VerifyDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('VerifyStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorDetail'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectVersionIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Overrides'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Subdirectory'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3BucketArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('BucketAccessRoleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUMMARY_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ERRORS_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSES_AND_ERRORS'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INCLUDE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Transferred'),
                        new \PHPStan\Type\Constant\ConstantStringType('Verified'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReportLevel'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ERRORS_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCESSES_AND_ERRORS'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReportLevel'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ERRORS_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCESSES_AND_ERRORS'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReportLevel'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ERRORS_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCESSES_AND_ERRORS'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReportLevel'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ERRORS_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCESSES_AND_ERRORS'),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorDetail'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENHANCED'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AtSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('AtDestinationForDelete'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Prepare'),
                    new \PHPStan\Type\Constant\ConstantStringType('Transfer'),
                    new \PHPStan\Type\Constant\ConstantStringType('Verify'),
                    new \PHPStan\Type\Constant\ConstantStringType('Delete'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function generateRecommendations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function listAgents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Agents'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AgentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ONLINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OFFLINE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDiscoveryJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DiscoveryJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DiscoveryJobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_WITH_ISSUES'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLocations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Locations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LocationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocationUri'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStorageSystems(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StorageSystems'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StorageSystemArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTaskExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TaskExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TaskExecutionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaskMode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAUNCHING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSFERRING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENHANCED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tasks'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TaskArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaskMode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNAVAILABLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENHANCED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function removeStorageSystem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startDiscoveryJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DiscoveryJobArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startTaskExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TaskExecutionArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopDiscoveryJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
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
    private function updateAgent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateDiscoveryJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLocationAzureBlob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLocationEfs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLocationFsxLustre(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLocationFsxOntap(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLocationFsxOpenZfs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLocationFsxWindows(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLocationHdfs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLocationNfs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLocationObjectStorage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLocationS3(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLocationSmb(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateStorageSystem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateTaskExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}