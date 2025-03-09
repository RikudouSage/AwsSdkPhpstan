<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class finspaceClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\finspace\finspaceClient>
     */
    public function getClass(): string
    {
        return \Aws\finspace\finspaceClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createEnvironment',
            'createKxChangeset',
            'createKxCluster',
            'createKxDatabase',
            'createKxDataview',
            'createKxEnvironment',
            'createKxScalingGroup',
            'createKxUser',
            'createKxVolume',
            'deleteEnvironment',
            'deleteKxCluster',
            'deleteKxClusterNode',
            'deleteKxDatabase',
            'deleteKxDataview',
            'deleteKxEnvironment',
            'deleteKxScalingGroup',
            'deleteKxUser',
            'deleteKxVolume',
            'getEnvironment',
            'getKxChangeset',
            'getKxCluster',
            'getKxConnectionString',
            'getKxDatabase',
            'getKxDataview',
            'getKxEnvironment',
            'getKxScalingGroup',
            'getKxUser',
            'getKxVolume',
            'listEnvironments',
            'listKxChangesets',
            'listKxClusterNodes',
            'listKxClusters',
            'listKxDatabases',
            'listKxDataviews',
            'listKxEnvironments',
            'listKxScalingGroups',
            'listKxUsers',
            'listKxVolumes',
            'listTagsForResource',
            'tagResource',
            'untagResource',
            'updateEnvironment',
            'updateKxClusterCodeConfiguration',
            'updateKxClusterDatabases',
            'updateKxDatabase',
            'updateKxDataview',
            'updateKxEnvironment',
            'updateKxEnvironmentNetwork',
            'updateKxUser',
            'updateKxVolume',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createEnvironment' => $this->createEnvironment(),
            'createKxChangeset' => $this->createKxChangeset(),
            'createKxCluster' => $this->createKxCluster(),
            'createKxDatabase' => $this->createKxDatabase(),
            'createKxDataview' => $this->createKxDataview(),
            'createKxEnvironment' => $this->createKxEnvironment(),
            'createKxScalingGroup' => $this->createKxScalingGroup(),
            'createKxUser' => $this->createKxUser(),
            'createKxVolume' => $this->createKxVolume(),
            'deleteEnvironment' => $this->deleteEnvironment(),
            'deleteKxCluster' => $this->deleteKxCluster(),
            'deleteKxClusterNode' => $this->deleteKxClusterNode(),
            'deleteKxDatabase' => $this->deleteKxDatabase(),
            'deleteKxDataview' => $this->deleteKxDataview(),
            'deleteKxEnvironment' => $this->deleteKxEnvironment(),
            'deleteKxScalingGroup' => $this->deleteKxScalingGroup(),
            'deleteKxUser' => $this->deleteKxUser(),
            'deleteKxVolume' => $this->deleteKxVolume(),
            'getEnvironment' => $this->getEnvironment(),
            'getKxChangeset' => $this->getKxChangeset(),
            'getKxCluster' => $this->getKxCluster(),
            'getKxConnectionString' => $this->getKxConnectionString(),
            'getKxDatabase' => $this->getKxDatabase(),
            'getKxDataview' => $this->getKxDataview(),
            'getKxEnvironment' => $this->getKxEnvironment(),
            'getKxScalingGroup' => $this->getKxScalingGroup(),
            'getKxUser' => $this->getKxUser(),
            'getKxVolume' => $this->getKxVolume(),
            'listEnvironments' => $this->listEnvironments(),
            'listKxChangesets' => $this->listKxChangesets(),
            'listKxClusterNodes' => $this->listKxClusterNodes(),
            'listKxClusters' => $this->listKxClusters(),
            'listKxDatabases' => $this->listKxDatabases(),
            'listKxDataviews' => $this->listKxDataviews(),
            'listKxEnvironments' => $this->listKxEnvironments(),
            'listKxScalingGroups' => $this->listKxScalingGroups(),
            'listKxUsers' => $this->listKxUsers(),
            'listKxVolumes' => $this->listKxVolumes(),
            'listTagsForResource' => $this->listTagsForResource(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateEnvironment' => $this->updateEnvironment(),
            'updateKxClusterCodeConfiguration' => $this->updateKxClusterCodeConfiguration(),
            'updateKxClusterDatabases' => $this->updateKxClusterDatabases(),
            'updateKxDatabase' => $this->updateKxDatabase(),
            'updateKxDataview' => $this->updateKxDataview(),
            'updateKxEnvironment' => $this->updateKxEnvironment(),
            'updateKxEnvironmentNetwork' => $this->updateKxEnvironmentNetwork(),
            'updateKxUser' => $this->updateKxUser(),
            'updateKxVolume' => $this->updateKxVolume(),
        };
    }
    private function createEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentArn'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentUrl'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createKxChangeset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('changesetId'),
                new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('changeRequests'),
                new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('errorInfo'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('changeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('dbPath'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('The inputs to this request are invalid.'),
                        new \PHPStan\Type\Constant\ConstantStringType('Service limits have been exceeded.'),
                        new \PHPStan\Type\Constant\ConstantStringType('Missing required permission to perform this request.'),
                        new \PHPStan\Type\Constant\ConstantStringType('One or more inputs to this request were not found.'),
                        new \PHPStan\Type\Constant\ConstantStringType('The system temporarily lacks sufficient resources to process the request.'),
                        new \PHPStan\Type\Constant\ConstantStringType('An internal error has occurred.'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('A user recoverable error has occurred'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createKxCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                new \PHPStan\Type\Constant\ConstantStringType('clusterType'),
                new \PHPStan\Type\Constant\ConstantStringType('tickerplantLogConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('volumes'),
                new \PHPStan\Type\Constant\ConstantStringType('databases'),
                new \PHPStan\Type\Constant\ConstantStringType('cacheStorageConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('autoScalingConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('clusterDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('capacityConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('releaseLabel'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('initializationScript'),
                new \PHPStan\Type\Constant\ConstantStringType('commandLineArguments'),
                new \PHPStan\Type\Constant\ConstantStringType('code'),
                new \PHPStan\Type\Constant\ConstantStringType('executionRole'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('savedownStorageConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('azMode'),
                new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('scalingGroupConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HDB'),
                    new \PHPStan\Type\Constant\ConstantStringType('RDB'),
                    new \PHPStan\Type\Constant\ConstantStringType('GATEWAY'),
                    new \PHPStan\Type\Constant\ConstantStringType('GP'),
                    new \PHPStan\Type\Constant\ConstantStringType('TICKERPLANT'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('tickerplantLogVolumes'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('volumeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('NAS_1'),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('cacheConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('changesetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataviewName'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataviewConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cacheType'),
                        new \PHPStan\Type\Constant\ConstantStringType('dbPaths'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataviewName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('dataviewName'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataviewVersionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('changesetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('segmentConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dbPaths'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('onDemand'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('size'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('minNodeCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxNodeCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoScalingMetric'),
                    new \PHPStan\Type\Constant\ConstantStringType('metricTarget'),
                    new \PHPStan\Type\Constant\ConstantStringType('scaleInCooldownSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('scaleOutCooldownSeconds'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CPU_UTILIZATION_PERCENTAGE'),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('nodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodeCount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAddressType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantStringType('IP_V4'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3ObjectVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('size'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumeName'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('SDS01'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SINGLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MULTI'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('scalingGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('memoryLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('memoryReservation'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodeCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
    private function createKxDatabase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                new \PHPStan\Type\Constant\ConstantStringType('databaseArn'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createKxDataview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataviewName'),
                new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('azMode'),
                new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('changesetId'),
                new \PHPStan\Type\Constant\ConstantStringType('segmentConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('autoUpdate'),
                new \PHPStan\Type\Constant\ConstantStringType('readWrite'),
                new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SINGLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MULTI'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dbPaths'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('onDemand'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
            ]),
        ]);
    }
    private function createKxEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentArn'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_CREATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('RETRY_DELETION'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_DELETION'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NETWORK_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING_NETWORK'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATING_NETWORK'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createKxScalingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('scalingGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('hostType'),
                new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createKxUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('userName'),
                new \PHPStan\Type\Constant\ConstantStringType('userArn'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('iamRole'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createKxVolume(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('volumeName'),
                new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                new \PHPStan\Type\Constant\ConstantStringType('volumeArn'),
                new \PHPStan\Type\Constant\ConstantStringType('nas1Configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('azMode'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneIds'),
                new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('NAS_1'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('size'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SSD_1000'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSD_250'),
                        new \PHPStan\Type\Constant\ConstantStringType('HDD_12'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SINGLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MULTI'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deleteEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteKxCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteKxClusterNode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteKxDatabase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteKxDataview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteKxEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteKxScalingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteKxUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteKxVolume(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sageMakerStudioDomainUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('dedicatedServiceAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('federationMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('federationParameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_CREATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RETRY_DELETION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_DELETION'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NETWORK_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING_NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATING_NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FEDERATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('samlMetadataDocument'),
                        new \PHPStan\Type\Constant\ConstantStringType('samlMetadataURL'),
                        new \PHPStan\Type\Constant\ConstantStringType('applicationCallBackURL'),
                        new \PHPStan\Type\Constant\ConstantStringType('federationURN'),
                        new \PHPStan\Type\Constant\ConstantStringType('federationProviderName'),
                        new \PHPStan\Type\Constant\ConstantStringType('attributeMap'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getKxChangeset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('changesetId'),
                new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('changeRequests'),
                new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('activeFromTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('errorInfo'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('changeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('dbPath'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('The inputs to this request are invalid.'),
                        new \PHPStan\Type\Constant\ConstantStringType('Service limits have been exceeded.'),
                        new \PHPStan\Type\Constant\ConstantStringType('Missing required permission to perform this request.'),
                        new \PHPStan\Type\Constant\ConstantStringType('One or more inputs to this request were not found.'),
                        new \PHPStan\Type\Constant\ConstantStringType('The system temporarily lacks sufficient resources to process the request.'),
                        new \PHPStan\Type\Constant\ConstantStringType('An internal error has occurred.'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('A user recoverable error has occurred'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getKxCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                new \PHPStan\Type\Constant\ConstantStringType('clusterType'),
                new \PHPStan\Type\Constant\ConstantStringType('tickerplantLogConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('volumes'),
                new \PHPStan\Type\Constant\ConstantStringType('databases'),
                new \PHPStan\Type\Constant\ConstantStringType('cacheStorageConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('autoScalingConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('clusterDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('capacityConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('releaseLabel'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('initializationScript'),
                new \PHPStan\Type\Constant\ConstantStringType('commandLineArguments'),
                new \PHPStan\Type\Constant\ConstantStringType('code'),
                new \PHPStan\Type\Constant\ConstantStringType('executionRole'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('savedownStorageConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('azMode'),
                new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('scalingGroupConfiguration'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HDB'),
                    new \PHPStan\Type\Constant\ConstantStringType('RDB'),
                    new \PHPStan\Type\Constant\ConstantStringType('GATEWAY'),
                    new \PHPStan\Type\Constant\ConstantStringType('GP'),
                    new \PHPStan\Type\Constant\ConstantStringType('TICKERPLANT'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('tickerplantLogVolumes'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('volumeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('NAS_1'),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('cacheConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('changesetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataviewName'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataviewConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cacheType'),
                        new \PHPStan\Type\Constant\ConstantStringType('dbPaths'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataviewName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('dataviewName'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataviewVersionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('changesetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('segmentConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dbPaths'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('onDemand'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('size'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('minNodeCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxNodeCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoScalingMetric'),
                    new \PHPStan\Type\Constant\ConstantStringType('metricTarget'),
                    new \PHPStan\Type\Constant\ConstantStringType('scaleInCooldownSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('scaleOutCooldownSeconds'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CPU_UTILIZATION_PERCENTAGE'),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('nodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodeCount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAddressType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantStringType('IP_V4'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3ObjectVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('size'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumeName'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('SDS01'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SINGLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MULTI'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('scalingGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('memoryLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('memoryReservation'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodeCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('cpu'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
    private function getKxConnectionString(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('signedConnectionString'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getKxDatabase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                new \PHPStan\Type\Constant\ConstantStringType('databaseArn'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('lastCompletedChangesetId'),
                new \PHPStan\Type\Constant\ConstantStringType('numBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('numChangesets'),
                new \PHPStan\Type\Constant\ConstantStringType('numFiles'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getKxDataview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                new \PHPStan\Type\Constant\ConstantStringType('dataviewName'),
                new \PHPStan\Type\Constant\ConstantStringType('azMode'),
                new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('changesetId'),
                new \PHPStan\Type\Constant\ConstantStringType('segmentConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('activeVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('autoUpdate'),
                new \PHPStan\Type\Constant\ConstantStringType('readWrite'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SINGLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MULTI'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dbPaths'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('onDemand'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('changesetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('segmentConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachedClusters'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('dbPaths'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('onDemand'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getKxEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('tgwStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('dnsStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentArn'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('dedicatedServiceAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('transitGatewayConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('customDNSConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('updateTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneIds'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateAuthorityArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_CREATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('RETRY_DELETION'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_DELETION'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NETWORK_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING_NETWORK'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATING_NETWORK'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFULLY_UPDATED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFULLY_UPDATED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('transitGatewayID'),
                    new \PHPStan\Type\Constant\ConstantStringType('routableCIDRSpace'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachmentNetworkAclConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ruleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('portRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('icmpTypeCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('cidrBlock'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('allow'),
                            new \PHPStan\Type\Constant\ConstantStringType('deny'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('from'),
                            new \PHPStan\Type\Constant\ConstantStringType('to'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('customDNSServerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDNSServerIP'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getKxScalingGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('scalingGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('scalingGroupArn'),
                new \PHPStan\Type\Constant\ConstantStringType('hostType'),
                new \PHPStan\Type\Constant\ConstantStringType('clusters'),
                new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getKxUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('userName'),
                new \PHPStan\Type\Constant\ConstantStringType('userArn'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('iamRole'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getKxVolume(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('volumeName'),
                new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                new \PHPStan\Type\Constant\ConstantStringType('volumeArn'),
                new \PHPStan\Type\Constant\ConstantStringType('nas1Configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('azMode'),
                new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneIds'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('attachedClusters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('NAS_1'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('size'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SSD_1000'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSD_250'),
                        new \PHPStan\Type\Constant\ConstantStringType('HDD_12'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SINGLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MULTI'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterType'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HDB'),
                        new \PHPStan\Type\Constant\ConstantStringType('RDB'),
                        new \PHPStan\Type\Constant\ConstantStringType('GATEWAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('GP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TICKERPLANT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listEnvironments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environments'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sageMakerStudioDomainUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('dedicatedServiceAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('federationMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('federationParameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_CREATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RETRY_DELETION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_DELETION'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NETWORK_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING_NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATING_NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FEDERATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('samlMetadataDocument'),
                        new \PHPStan\Type\Constant\ConstantStringType('samlMetadataURL'),
                        new \PHPStan\Type\Constant\ConstantStringType('applicationCallBackURL'),
                        new \PHPStan\Type\Constant\ConstantStringType('federationURN'),
                        new \PHPStan\Type\Constant\ConstantStringType('federationProviderName'),
                        new \PHPStan\Type\Constant\ConstantStringType('attributeMap'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listKxChangesets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('kxChangesets'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('changesetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeFromTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listKxClusterNodes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nodes'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('nodeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listKxClusters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('kxClusterSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterType'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('releaseLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumes'),
                    new \PHPStan\Type\Constant\ConstantStringType('initializationScript'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('azMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HDB'),
                        new \PHPStan\Type\Constant\ConstantStringType('RDB'),
                        new \PHPStan\Type\Constant\ConstantStringType('GATEWAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('GP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TICKERPLANT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('volumeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('NAS_1'),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SINGLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MULTI'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listKxDatabases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('kxDatabases'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listKxDataviews(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('kxDataviews'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataviewName'),
                    new \PHPStan\Type\Constant\ConstantStringType('azMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('changesetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('segmentConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoUpdate'),
                    new \PHPStan\Type\Constant\ConstantStringType('readWrite'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SINGLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MULTI'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('dbPaths'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('onDemand'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('changesetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('segmentConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('attachedClusters'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('versionId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dbPaths'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('onDemand'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listKxEnvironments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environments'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tgwStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('dnsStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('dedicatedServiceAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('transitGatewayConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDNSConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateAuthorityArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_CREATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RETRY_DELETION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_DELETION'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NETWORK_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING_NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATING_NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFULLY_UPDATED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFULLY_UPDATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('transitGatewayID'),
                        new \PHPStan\Type\Constant\ConstantStringType('routableCIDRSpace'),
                        new \PHPStan\Type\Constant\ConstantStringType('attachmentNetworkAclConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ruleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruleAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('portRange'),
                            new \PHPStan\Type\Constant\ConstantStringType('icmpTypeCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('cidrBlock'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                new \PHPStan\Type\Constant\ConstantStringType('deny'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('from'),
                                new \PHPStan\Type\Constant\ConstantStringType('to'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('customDNSServerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('customDNSServerIP'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listKxScalingGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('scalingGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('scalingGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostType'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusters'),
                    new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listKxUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('users'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('userArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('userName'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listKxVolumes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('kxVolumeSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('volumeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('azMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('NAS_1'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SINGLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MULTI'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function updateEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sageMakerStudioDomainUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('dedicatedServiceAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('federationMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('federationParameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_CREATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RETRY_DELETION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_DELETION'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NETWORK_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING_NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATING_NETWORK'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FEDERATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('samlMetadataDocument'),
                        new \PHPStan\Type\Constant\ConstantStringType('samlMetadataURL'),
                        new \PHPStan\Type\Constant\ConstantStringType('applicationCallBackURL'),
                        new \PHPStan\Type\Constant\ConstantStringType('federationURN'),
                        new \PHPStan\Type\Constant\ConstantStringType('federationProviderName'),
                        new \PHPStan\Type\Constant\ConstantStringType('attributeMap'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateKxClusterCodeConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateKxClusterDatabases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateKxDatabase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateKxDataview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                new \PHPStan\Type\Constant\ConstantStringType('dataviewName'),
                new \PHPStan\Type\Constant\ConstantStringType('azMode'),
                new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('changesetId'),
                new \PHPStan\Type\Constant\ConstantStringType('segmentConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('activeVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('autoUpdate'),
                new \PHPStan\Type\Constant\ConstantStringType('readWrite'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SINGLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MULTI'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dbPaths'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('onDemand'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('changesetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('segmentConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachedClusters'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('dbPaths'),
                        new \PHPStan\Type\Constant\ConstantStringType('volumeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('onDemand'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateKxEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('tgwStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('dnsStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentArn'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('dedicatedServiceAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('transitGatewayConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('customDNSConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('updateTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneIds'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_CREATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('RETRY_DELETION'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_DELETION'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NETWORK_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING_NETWORK'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATING_NETWORK'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFULLY_UPDATED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFULLY_UPDATED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('transitGatewayID'),
                    new \PHPStan\Type\Constant\ConstantStringType('routableCIDRSpace'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachmentNetworkAclConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ruleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('portRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('icmpTypeCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('cidrBlock'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('allow'),
                            new \PHPStan\Type\Constant\ConstantStringType('deny'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('from'),
                            new \PHPStan\Type\Constant\ConstantStringType('to'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('customDNSServerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDNSServerIP'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateKxEnvironmentNetwork(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('tgwStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('dnsStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentArn'),
                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('dedicatedServiceAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('transitGatewayConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('customDNSConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('updateTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneIds'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_CREATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('RETRY_DELETION'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_DELETION'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NETWORK_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING_NETWORK'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATING_NETWORK'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFULLY_UPDATED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFULLY_UPDATED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('transitGatewayID'),
                    new \PHPStan\Type\Constant\ConstantStringType('routableCIDRSpace'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachmentNetworkAclConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ruleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('portRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('icmpTypeCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('cidrBlock'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('allow'),
                            new \PHPStan\Type\Constant\ConstantStringType('deny'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('from'),
                            new \PHPStan\Type\Constant\ConstantStringType('to'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('customDNSServerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDNSServerIP'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateKxUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('userName'),
                new \PHPStan\Type\Constant\ConstantStringType('userArn'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('iamRole'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateKxVolume(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('volumeName'),
                new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                new \PHPStan\Type\Constant\ConstantStringType('volumeArn'),
                new \PHPStan\Type\Constant\ConstantStringType('nas1Configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('createdTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('azMode'),
                new \PHPStan\Type\Constant\ConstantStringType('availabilityZoneIds'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('attachedClusters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('NAS_1'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('size'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SSD_1000'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSD_250'),
                        new \PHPStan\Type\Constant\ConstantStringType('HDD_12'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SINGLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MULTI'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterType'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HDB'),
                        new \PHPStan\Type\Constant\ConstantStringType('RDB'),
                        new \PHPStan\Type\Constant\ConstantStringType('GATEWAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('GP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TICKERPLANT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                ])),
            ]),
        ]);
    }
}