<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class TimestreamInfluxDBClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\TimestreamInfluxDB\TimestreamInfluxDBClient>
     */
    public function getClass(): string
    {
        return \Aws\TimestreamInfluxDB\TimestreamInfluxDBClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createDbCluster',
            'createDbInstance',
            'createDbParameterGroup',
            'deleteDbCluster',
            'deleteDbInstance',
            'getDbCluster',
            'getDbInstance',
            'getDbParameterGroup',
            'listDbClusters',
            'listDbInstances',
            'listDbInstancesForCluster',
            'listDbParameterGroups',
            'listTagsForResource',
            'tagResource',
            'untagResource',
            'updateDbCluster',
            'updateDbInstance',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createDbCluster' => $this->createDbCluster(),
            'createDbInstance' => $this->createDbInstance(),
            'createDbParameterGroup' => $this->createDbParameterGroup(),
            'deleteDbCluster' => $this->deleteDbCluster(),
            'deleteDbInstance' => $this->deleteDbInstance(),
            'getDbCluster' => $this->getDbCluster(),
            'getDbInstance' => $this->getDbInstance(),
            'getDbParameterGroup' => $this->getDbParameterGroup(),
            'listDbClusters' => $this->listDbClusters(),
            'listDbInstances' => $this->listDbInstances(),
            'listDbInstancesForCluster' => $this->listDbInstancesForCluster(),
            'listDbParameterGroups' => $this->listDbParameterGroups(),
            'listTagsForResource' => $this->listTagsForResource(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateDbCluster' => $this->updateDbCluster(),
            'updateDbInstance' => $this->updateDbInstance(),
        };
    }
    private function createDbCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dbClusterId'),
                new \PHPStan\Type\Constant\ConstantStringType('dbClusterStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
            ]),
        ]);
    }
    private function createDbInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('port'),
                new \PHPStan\Type\Constant\ConstantStringType('networkType'),
                new \PHPStan\Type\Constant\ConstantStringType('dbInstanceType'),
                new \PHPStan\Type\Constant\ConstantStringType('dbStorageType'),
                new \PHPStan\Type\Constant\ConstantStringType('allocatedStorage'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentType'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcSubnetIds'),
                new \PHPStan\Type\Constant\ConstantStringType('publiclyAccessible'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupIds'),
                new \PHPStan\Type\Constant\ConstantStringType('dbParameterGroupIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                new \PHPStan\Type\Constant\ConstantStringType('secondaryAvailabilityZone'),
                new \PHPStan\Type\Constant\ConstantStringType('logDeliveryConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('influxAuthParametersSecretArn'),
                new \PHPStan\Type\Constant\ConstantStringType('dbClusterId'),
                new \PHPStan\Type\Constant\ConstantStringType('instanceMode'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING_DEPLOYMENT_TYPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING_INSTANCE_TYPE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                    new \PHPStan\Type\Constant\ConstantStringType('DUAL'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.medium'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.large'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.2xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.4xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.8xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.12xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.16xlarge'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT1'),
                    new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT2'),
                    new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT3'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SINGLE_AZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('WITH_MULTIAZ_STANDBY'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PRIMARY'),
                    new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                    new \PHPStan\Type\Constant\ConstantStringType('REPLICA'),
                ]),
            ]),
        ]);
    }
    private function createDbParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('parameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InfluxDBv2'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fluxLogEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('logLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('noTasks'),
                        new \PHPStan\Type\Constant\ConstantStringType('queryConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('queryQueueSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('tracingType'),
                        new \PHPStan\Type\Constant\ConstantStringType('metricsDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpIdleTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpReadHeaderTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpReadTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpWriteTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('influxqlMaxSelectBuckets'),
                        new \PHPStan\Type\Constant\ConstantStringType('influxqlMaxSelectPoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('influxqlMaxSelectSeries'),
                        new \PHPStan\Type\Constant\ConstantStringType('pprofDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('queryInitialMemoryBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('queryMaxMemoryBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('queryMemoryBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('sessionLength'),
                        new \PHPStan\Type\Constant\ConstantStringType('sessionRenewDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageCacheMaxMemorySize'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageCacheSnapshotMemorySize'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageCacheSnapshotWriteColdDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageCompactFullWriteColdDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageCompactThroughputBurst'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageMaxConcurrentCompactions'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageMaxIndexLogFileSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageNoValidateFieldSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageRetentionCheckInterval'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageSeriesFileMaxConcurrentSnapshotCompactions'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageSeriesIdSetCacheSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageWalMaxConcurrentWrites'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageWalMaxWriteDelay'),
                        new \PHPStan\Type\Constant\ConstantStringType('uiDisabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('debug'),
                            new \PHPStan\Type\Constant\ConstantStringType('info'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('log'),
                            new \PHPStan\Type\Constant\ConstantStringType('jaeger'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('durationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('hours'),
                                new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('milliseconds'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('durationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('hours'),
                                new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('milliseconds'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('durationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('hours'),
                                new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('milliseconds'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('durationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('hours'),
                                new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('milliseconds'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('durationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('hours'),
                                new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('milliseconds'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('durationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('hours'),
                                new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('milliseconds'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('durationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('hours'),
                                new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('milliseconds'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('durationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('hours'),
                                new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('milliseconds'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteDbCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dbClusterStatus'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
            ]),
        ]);
    }
    private function deleteDbInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('port'),
                new \PHPStan\Type\Constant\ConstantStringType('networkType'),
                new \PHPStan\Type\Constant\ConstantStringType('dbInstanceType'),
                new \PHPStan\Type\Constant\ConstantStringType('dbStorageType'),
                new \PHPStan\Type\Constant\ConstantStringType('allocatedStorage'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentType'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcSubnetIds'),
                new \PHPStan\Type\Constant\ConstantStringType('publiclyAccessible'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupIds'),
                new \PHPStan\Type\Constant\ConstantStringType('dbParameterGroupIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                new \PHPStan\Type\Constant\ConstantStringType('secondaryAvailabilityZone'),
                new \PHPStan\Type\Constant\ConstantStringType('logDeliveryConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('influxAuthParametersSecretArn'),
                new \PHPStan\Type\Constant\ConstantStringType('dbClusterId'),
                new \PHPStan\Type\Constant\ConstantStringType('instanceMode'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING_DEPLOYMENT_TYPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING_INSTANCE_TYPE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                    new \PHPStan\Type\Constant\ConstantStringType('DUAL'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.medium'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.large'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.2xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.4xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.8xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.12xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.16xlarge'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT1'),
                    new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT2'),
                    new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT3'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SINGLE_AZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('WITH_MULTIAZ_STANDBY'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PRIMARY'),
                    new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                    new \PHPStan\Type\Constant\ConstantStringType('REPLICA'),
                ]),
            ]),
        ]);
    }
    private function getDbCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('readerEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('port'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentType'),
                new \PHPStan\Type\Constant\ConstantStringType('dbInstanceType'),
                new \PHPStan\Type\Constant\ConstantStringType('networkType'),
                new \PHPStan\Type\Constant\ConstantStringType('dbStorageType'),
                new \PHPStan\Type\Constant\ConstantStringType('allocatedStorage'),
                new \PHPStan\Type\Constant\ConstantStringType('publiclyAccessible'),
                new \PHPStan\Type\Constant\ConstantStringType('dbParameterGroupIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('logDeliveryConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('influxAuthParametersSecretArn'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcSubnetIds'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupIds'),
                new \PHPStan\Type\Constant\ConstantStringType('failoverMode'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantStringType('MULTI_NODE_READ_REPLICAS'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.medium'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.large'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.2xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.4xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.8xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.12xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.16xlarge'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                    new \PHPStan\Type\Constant\ConstantStringType('DUAL'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT1'),
                    new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT2'),
                    new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT3'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                    new \PHPStan\Type\Constant\ConstantStringType('NO_FAILOVER'),
                ]),
            ]),
        ]);
    }
    private function getDbInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('port'),
                new \PHPStan\Type\Constant\ConstantStringType('networkType'),
                new \PHPStan\Type\Constant\ConstantStringType('dbInstanceType'),
                new \PHPStan\Type\Constant\ConstantStringType('dbStorageType'),
                new \PHPStan\Type\Constant\ConstantStringType('allocatedStorage'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentType'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcSubnetIds'),
                new \PHPStan\Type\Constant\ConstantStringType('publiclyAccessible'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupIds'),
                new \PHPStan\Type\Constant\ConstantStringType('dbParameterGroupIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                new \PHPStan\Type\Constant\ConstantStringType('secondaryAvailabilityZone'),
                new \PHPStan\Type\Constant\ConstantStringType('logDeliveryConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('influxAuthParametersSecretArn'),
                new \PHPStan\Type\Constant\ConstantStringType('dbClusterId'),
                new \PHPStan\Type\Constant\ConstantStringType('instanceMode'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING_DEPLOYMENT_TYPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING_INSTANCE_TYPE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                    new \PHPStan\Type\Constant\ConstantStringType('DUAL'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.medium'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.large'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.2xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.4xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.8xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.12xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.16xlarge'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT1'),
                    new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT2'),
                    new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT3'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SINGLE_AZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('WITH_MULTIAZ_STANDBY'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PRIMARY'),
                    new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                    new \PHPStan\Type\Constant\ConstantStringType('REPLICA'),
                ]),
            ]),
        ]);
    }
    private function getDbParameterGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('parameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InfluxDBv2'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fluxLogEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('logLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('noTasks'),
                        new \PHPStan\Type\Constant\ConstantStringType('queryConcurrency'),
                        new \PHPStan\Type\Constant\ConstantStringType('queryQueueSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('tracingType'),
                        new \PHPStan\Type\Constant\ConstantStringType('metricsDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpIdleTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpReadHeaderTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpReadTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpWriteTimeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('influxqlMaxSelectBuckets'),
                        new \PHPStan\Type\Constant\ConstantStringType('influxqlMaxSelectPoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('influxqlMaxSelectSeries'),
                        new \PHPStan\Type\Constant\ConstantStringType('pprofDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('queryInitialMemoryBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('queryMaxMemoryBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('queryMemoryBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('sessionLength'),
                        new \PHPStan\Type\Constant\ConstantStringType('sessionRenewDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageCacheMaxMemorySize'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageCacheSnapshotMemorySize'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageCacheSnapshotWriteColdDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageCompactFullWriteColdDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageCompactThroughputBurst'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageMaxConcurrentCompactions'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageMaxIndexLogFileSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageNoValidateFieldSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageRetentionCheckInterval'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageSeriesFileMaxConcurrentSnapshotCompactions'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageSeriesIdSetCacheSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageWalMaxConcurrentWrites'),
                        new \PHPStan\Type\Constant\ConstantStringType('storageWalMaxWriteDelay'),
                        new \PHPStan\Type\Constant\ConstantStringType('uiDisabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('debug'),
                            new \PHPStan\Type\Constant\ConstantStringType('info'),
                            new \PHPStan\Type\Constant\ConstantStringType('error'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('log'),
                            new \PHPStan\Type\Constant\ConstantStringType('jaeger'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('durationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('hours'),
                                new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('milliseconds'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('durationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('hours'),
                                new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('milliseconds'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('durationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('hours'),
                                new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('milliseconds'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('durationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('hours'),
                                new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('milliseconds'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('durationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('hours'),
                                new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('milliseconds'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('durationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('hours'),
                                new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('milliseconds'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('durationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('hours'),
                                new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('milliseconds'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('durationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('hours'),
                                new \PHPStan\Type\Constant\ConstantStringType('minutes'),
                                new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('milliseconds'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listDbClusters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('readerEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('dbInstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('dbStorageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('allocatedStorage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('MULTI_NODE_READ_REPLICAS'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.medium'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.16xlarge'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT1'),
                        new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT2'),
                        new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT3'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDbInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('dbInstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('dbStorageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('allocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING_DEPLOYMENT_TYPE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING_INSTANCE_TYPE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.medium'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.16xlarge'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT1'),
                        new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT2'),
                        new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT3'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SINGLE_AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('WITH_MULTIAZ_STANDBY'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDbInstancesForCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkType'),
                    new \PHPStan\Type\Constant\ConstantStringType('dbInstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('dbStorageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('allocatedStorage'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceMode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING_DEPLOYMENT_TYPE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING_INSTANCE_TYPE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('DUAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.medium'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('db.influx.16xlarge'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT1'),
                        new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT2'),
                        new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT3'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SINGLE_AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('WITH_MULTIAZ_STANDBY'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PRIMARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICA'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDbParameterGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateDbCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dbClusterStatus'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
            ]),
        ]);
    }
    private function updateDbInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('port'),
                new \PHPStan\Type\Constant\ConstantStringType('networkType'),
                new \PHPStan\Type\Constant\ConstantStringType('dbInstanceType'),
                new \PHPStan\Type\Constant\ConstantStringType('dbStorageType'),
                new \PHPStan\Type\Constant\ConstantStringType('allocatedStorage'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentType'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcSubnetIds'),
                new \PHPStan\Type\Constant\ConstantStringType('publiclyAccessible'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcSecurityGroupIds'),
                new \PHPStan\Type\Constant\ConstantStringType('dbParameterGroupIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                new \PHPStan\Type\Constant\ConstantStringType('secondaryAvailabilityZone'),
                new \PHPStan\Type\Constant\ConstantStringType('logDeliveryConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('influxAuthParametersSecretArn'),
                new \PHPStan\Type\Constant\ConstantStringType('dbClusterId'),
                new \PHPStan\Type\Constant\ConstantStringType('instanceMode'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING_DEPLOYMENT_TYPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING_INSTANCE_TYPE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                    new \PHPStan\Type\Constant\ConstantStringType('DUAL'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.medium'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.large'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.2xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.4xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.8xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.12xlarge'),
                    new \PHPStan\Type\Constant\ConstantStringType('db.influx.16xlarge'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT1'),
                    new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT2'),
                    new \PHPStan\Type\Constant\ConstantStringType('InfluxIOIncludedT3'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SINGLE_AZ'),
                    new \PHPStan\Type\Constant\ConstantStringType('WITH_MULTIAZ_STANDBY'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Configuration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PRIMARY'),
                    new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                    new \PHPStan\Type\Constant\ConstantStringType('REPLICA'),
                ]),
            ]),
        ]);
    }
}