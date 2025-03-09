<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class RoboMakerClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\RoboMaker\RoboMakerClient>
     */
    public function getClass(): string
    {
        return \Aws\RoboMaker\RoboMakerClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchDeleteWorlds',
            'batchDescribeSimulationJob',
            'cancelDeploymentJob',
            'cancelSimulationJob',
            'cancelSimulationJobBatch',
            'cancelWorldExportJob',
            'cancelWorldGenerationJob',
            'createDeploymentJob',
            'createFleet',
            'createRobot',
            'createRobotApplication',
            'createRobotApplicationVersion',
            'createSimulationApplication',
            'createSimulationApplicationVersion',
            'createSimulationJob',
            'createWorldExportJob',
            'createWorldGenerationJob',
            'createWorldTemplate',
            'deleteFleet',
            'deleteRobot',
            'deleteRobotApplication',
            'deleteSimulationApplication',
            'deleteWorldTemplate',
            'deregisterRobot',
            'describeDeploymentJob',
            'describeFleet',
            'describeRobot',
            'describeRobotApplication',
            'describeSimulationApplication',
            'describeSimulationJob',
            'describeSimulationJobBatch',
            'describeWorld',
            'describeWorldExportJob',
            'describeWorldGenerationJob',
            'describeWorldTemplate',
            'getWorldTemplateBody',
            'listDeploymentJobs',
            'listFleets',
            'listRobotApplications',
            'listRobots',
            'listSimulationApplications',
            'listSimulationJobBatches',
            'listSimulationJobs',
            'listTagsForResource',
            'listWorldExportJobs',
            'listWorldGenerationJobs',
            'listWorldTemplates',
            'listWorlds',
            'registerRobot',
            'restartSimulationJob',
            'startSimulationJobBatch',
            'syncDeploymentJob',
            'tagResource',
            'untagResource',
            'updateRobotApplication',
            'updateSimulationApplication',
            'updateWorldTemplate',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchDeleteWorlds' => $this->batchDeleteWorlds(),
            'batchDescribeSimulationJob' => $this->batchDescribeSimulationJob(),
            'cancelDeploymentJob' => $this->cancelDeploymentJob(),
            'cancelSimulationJob' => $this->cancelSimulationJob(),
            'cancelSimulationJobBatch' => $this->cancelSimulationJobBatch(),
            'cancelWorldExportJob' => $this->cancelWorldExportJob(),
            'cancelWorldGenerationJob' => $this->cancelWorldGenerationJob(),
            'createDeploymentJob' => $this->createDeploymentJob(),
            'createFleet' => $this->createFleet(),
            'createRobot' => $this->createRobot(),
            'createRobotApplication' => $this->createRobotApplication(),
            'createRobotApplicationVersion' => $this->createRobotApplicationVersion(),
            'createSimulationApplication' => $this->createSimulationApplication(),
            'createSimulationApplicationVersion' => $this->createSimulationApplicationVersion(),
            'createSimulationJob' => $this->createSimulationJob(),
            'createWorldExportJob' => $this->createWorldExportJob(),
            'createWorldGenerationJob' => $this->createWorldGenerationJob(),
            'createWorldTemplate' => $this->createWorldTemplate(),
            'deleteFleet' => $this->deleteFleet(),
            'deleteRobot' => $this->deleteRobot(),
            'deleteRobotApplication' => $this->deleteRobotApplication(),
            'deleteSimulationApplication' => $this->deleteSimulationApplication(),
            'deleteWorldTemplate' => $this->deleteWorldTemplate(),
            'deregisterRobot' => $this->deregisterRobot(),
            'describeDeploymentJob' => $this->describeDeploymentJob(),
            'describeFleet' => $this->describeFleet(),
            'describeRobot' => $this->describeRobot(),
            'describeRobotApplication' => $this->describeRobotApplication(),
            'describeSimulationApplication' => $this->describeSimulationApplication(),
            'describeSimulationJob' => $this->describeSimulationJob(),
            'describeSimulationJobBatch' => $this->describeSimulationJobBatch(),
            'describeWorld' => $this->describeWorld(),
            'describeWorldExportJob' => $this->describeWorldExportJob(),
            'describeWorldGenerationJob' => $this->describeWorldGenerationJob(),
            'describeWorldTemplate' => $this->describeWorldTemplate(),
            'getWorldTemplateBody' => $this->getWorldTemplateBody(),
            'listDeploymentJobs' => $this->listDeploymentJobs(),
            'listFleets' => $this->listFleets(),
            'listRobotApplications' => $this->listRobotApplications(),
            'listRobots' => $this->listRobots(),
            'listSimulationApplications' => $this->listSimulationApplications(),
            'listSimulationJobBatches' => $this->listSimulationJobBatches(),
            'listSimulationJobs' => $this->listSimulationJobs(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listWorldExportJobs' => $this->listWorldExportJobs(),
            'listWorldGenerationJobs' => $this->listWorldGenerationJobs(),
            'listWorldTemplates' => $this->listWorldTemplates(),
            'listWorlds' => $this->listWorlds(),
            'registerRobot' => $this->registerRobot(),
            'restartSimulationJob' => $this->restartSimulationJob(),
            'startSimulationJobBatch' => $this->startSimulationJobBatch(),
            'syncDeploymentJob' => $this->syncDeploymentJob(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateRobotApplication' => $this->updateRobotApplication(),
            'updateSimulationApplication' => $this->updateSimulationApplication(),
            'updateWorldTemplate' => $this->updateWorldTemplate(),
        };
    }
    private function batchDeleteWorlds(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('unprocessedWorlds'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchDescribeSimulationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobs'),
                new \PHPStan\Type\Constant\ConstantStringType('unprocessedJobs'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastStartedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('loggingConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxJobDurationInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('simulationTimeMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('iamRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('robotApplications'),
                        new \PHPStan\Type\Constant\ConstantStringType('simulationApplications'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterface'),
                        new \PHPStan\Type\Constant\ConstantStringType('compute'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Running'),
                            new \PHPStan\Type\Constant\ConstantStringType('Restarting'),
                            new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('RunningFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terminating'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terminated'),
                            new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Fail'),
                            new \PHPStan\Type\Constant\ConstantStringType('Continue'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InternalServiceError'),
                            new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationCrash'),
                            new \PHPStan\Type\Constant\ConstantStringType('SimulationApplicationCrash'),
                            new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationHealthCheckFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('SimulationApplicationHealthCheckFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsRobotApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsSimulationApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsS3Object'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsS3Output'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsCloudwatchLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIpLimitExceeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENILimitExceeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsUserCredentials'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidBundleRobotApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidBundleSimulationApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidS3Resource'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThrottlingError'),
                            new \PHPStan\Type\Constant\ConstantStringType('LimitExceeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('MismatchedEtag'),
                            new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationVersionMismatchedEtag'),
                            new \PHPStan\Type\Constant\ConstantStringType('SimulationApplicationVersionMismatchedEtag'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestThrottled'),
                            new \PHPStan\Type\Constant\ConstantStringType('BatchTimedOut'),
                            new \PHPStan\Type\Constant\ConstantStringType('BatchCanceled'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidInput'),
                            new \PHPStan\Type\Constant\ConstantStringType('WrongRegionS3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('WrongRegionS3Output'),
                            new \PHPStan\Type\Constant\ConstantStringType('WrongRegionRobotApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('WrongRegionSimulationApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('UploadContentMismatchError'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Prefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('recordAllRosTopics'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('application'),
                                new \PHPStan\Type\Constant\ConstantStringType('applicationVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('launchConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('uploadConfigurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('useDefaultUploadConfigurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('tools'),
                                new \PHPStan\Type\Constant\ConstantStringType('useDefaultTools'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('launchFile'),
                                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                                    new \PHPStan\Type\Constant\ConstantStringType('portForwardingConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                    new \PHPStan\Type\Constant\ConstantStringType('command'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('portMappings'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('jobPort'),
                                                new \PHPStan\Type\Constant\ConstantStringType('applicationPort'),
                                                new \PHPStan\Type\Constant\ConstantStringType('enableOnPublicIp'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('path'),
                                        new \PHPStan\Type\Constant\ConstantStringType('uploadBehavior'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ON_TERMINATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ROLLING_AUTO_REMOVE'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                                        new \PHPStan\Type\Constant\ConstantStringType('streamOutputToCloudWatch'),
                                        new \PHPStan\Type\Constant\ConstantStringType('exitBehavior'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RESTART'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('application'),
                                new \PHPStan\Type\Constant\ConstantStringType('applicationVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('launchConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('uploadConfigurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('worldConfigs'),
                                new \PHPStan\Type\Constant\ConstantStringType('useDefaultUploadConfigurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('tools'),
                                new \PHPStan\Type\Constant\ConstantStringType('useDefaultTools'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('launchFile'),
                                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                                    new \PHPStan\Type\Constant\ConstantStringType('portForwardingConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                    new \PHPStan\Type\Constant\ConstantStringType('command'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('portMappings'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('jobPort'),
                                                new \PHPStan\Type\Constant\ConstantStringType('applicationPort'),
                                                new \PHPStan\Type\Constant\ConstantStringType('enableOnPublicIp'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('path'),
                                        new \PHPStan\Type\Constant\ConstantStringType('uploadBehavior'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ON_TERMINATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ROLLING_AUTO_REMOVE'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('world'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                                        new \PHPStan\Type\Constant\ConstantStringType('streamOutputToCloudWatch'),
                                        new \PHPStan\Type\Constant\ConstantStringType('exitBehavior'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RESTART'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3Keys'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('destination'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s3Key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('etag'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Archive'),
                                    new \PHPStan\Type\Constant\ConstantStringType('File'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('privateIpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('publicIpAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('simulationUnitLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('gpuUnitLimit'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CPU'),
                                new \PHPStan\Type\Constant\ConstantStringType('GPU_AND_CPU'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function cancelDeploymentJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function cancelSimulationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function cancelSimulationJobBatch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function cancelWorldExportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function cancelWorldGenerationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createDeploymentJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('fleet'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentApplicationConfigs'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('application'),
                        new \PHPStan\Type\Constant\ConstantStringType('applicationVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                            new \PHPStan\Type\Constant\ConstantStringType('preLaunchFile'),
                            new \PHPStan\Type\Constant\ConstantStringType('launchFile'),
                            new \PHPStan\Type\Constant\ConstantStringType('postLaunchFile'),
                            new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentSetupError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EtagMismatch'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureThresholdBreached'),
                    new \PHPStan\Type\Constant\ConstantStringType('RobotDeploymentAborted'),
                    new \PHPStan\Type\Constant\ConstantStringType('RobotDeploymentNoResponse'),
                    new \PHPStan\Type\Constant\ConstantStringType('RobotAgentConnectionTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('GreengrassDeploymentFailed'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidGreengrassGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('MissingRobotArchitecture'),
                    new \PHPStan\Type\Constant\ConstantStringType('MissingRobotApplicationArchitecture'),
                    new \PHPStan\Type\Constant\ConstantStringType('MissingRobotDeploymentResource'),
                    new \PHPStan\Type\Constant\ConstantStringType('GreengrassGroupVersionDoesNotExist'),
                    new \PHPStan\Type\Constant\ConstantStringType('LambdaDeleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExtractingBundleFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreLaunchFileFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostLaunchFileFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('BadPermissionError'),
                    new \PHPStan\Type\Constant\ConstantStringType('DownloadConditionFailed'),
                    new \PHPStan\Type\Constant\ConstantStringType('BadLambdaAssociated'),
                    new \PHPStan\Type\Constant\ConstantStringType('InternalServerError'),
                    new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationDoesNotExist'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentFleetDoesNotExist'),
                    new \PHPStan\Type\Constant\ConstantStringType('FleetDeploymentTimeout'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('concurrentDeploymentPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureThresholdPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('robotDeploymentTimeoutInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('downloadConditionFile'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('etag'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createRobot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('greengrassGroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('X86_64'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARM64'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARMHF'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createRobotApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('sources'),
                new \PHPStan\Type\Constant\ConstantStringType('robotSoftwareSuite'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('etag'),
                        new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('X86_64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARMHF'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ROS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROS2'),
                        new \PHPStan\Type\Constant\ConstantStringType('General'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Kinetic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Melodic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dashing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Foxy'),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createRobotApplicationVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('sources'),
                new \PHPStan\Type\Constant\ConstantStringType('robotSoftwareSuite'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('etag'),
                        new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('X86_64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARMHF'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ROS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROS2'),
                        new \PHPStan\Type\Constant\ConstantStringType('General'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Kinetic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Melodic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dashing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Foxy'),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createSimulationApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('sources'),
                new \PHPStan\Type\Constant\ConstantStringType('simulationSoftwareSuite'),
                new \PHPStan\Type\Constant\ConstantStringType('robotSoftwareSuite'),
                new \PHPStan\Type\Constant\ConstantStringType('renderingEngine'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('etag'),
                        new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('X86_64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARMHF'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Gazebo'),
                        new \PHPStan\Type\Constant\ConstantStringType('RosbagPlay'),
                        new \PHPStan\Type\Constant\ConstantStringType('SimulationRuntime'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ROS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROS2'),
                        new \PHPStan\Type\Constant\ConstantStringType('General'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Kinetic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Melodic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dashing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Foxy'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('OGRE'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createSimulationApplicationVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('sources'),
                new \PHPStan\Type\Constant\ConstantStringType('simulationSoftwareSuite'),
                new \PHPStan\Type\Constant\ConstantStringType('robotSoftwareSuite'),
                new \PHPStan\Type\Constant\ConstantStringType('renderingEngine'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('etag'),
                        new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('X86_64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARMHF'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Gazebo'),
                        new \PHPStan\Type\Constant\ConstantStringType('RosbagPlay'),
                        new \PHPStan\Type\Constant\ConstantStringType('SimulationRuntime'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ROS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROS2'),
                        new \PHPStan\Type\Constant\ConstantStringType('General'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Kinetic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Melodic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dashing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Foxy'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('OGRE'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createSimulationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('lastStartedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('failureBehavior'),
                new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                new \PHPStan\Type\Constant\ConstantStringType('loggingConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('maxJobDurationInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('simulationTimeMillis'),
                new \PHPStan\Type\Constant\ConstantStringType('iamRole'),
                new \PHPStan\Type\Constant\ConstantStringType('robotApplications'),
                new \PHPStan\Type\Constant\ConstantStringType('simulationApplications'),
                new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('compute'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                    new \PHPStan\Type\Constant\ConstantStringType('Running'),
                    new \PHPStan\Type\Constant\ConstantStringType('Restarting'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('RunningFailed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terminating'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terminated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Fail'),
                    new \PHPStan\Type\Constant\ConstantStringType('Continue'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InternalServiceError'),
                    new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationCrash'),
                    new \PHPStan\Type\Constant\ConstantStringType('SimulationApplicationCrash'),
                    new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationHealthCheckFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('SimulationApplicationHealthCheckFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsRobotApplication'),
                    new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsSimulationApplication'),
                    new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsS3Object'),
                    new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsS3Output'),
                    new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsCloudwatchLogs'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIpLimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENILimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsUserCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidBundleRobotApplication'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidBundleSimulationApplication'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidS3Resource'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingError'),
                    new \PHPStan\Type\Constant\ConstantStringType('LimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('MismatchedEtag'),
                    new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationVersionMismatchedEtag'),
                    new \PHPStan\Type\Constant\ConstantStringType('SimulationApplicationVersionMismatchedEtag'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestThrottled'),
                    new \PHPStan\Type\Constant\ConstantStringType('BatchTimedOut'),
                    new \PHPStan\Type\Constant\ConstantStringType('BatchCanceled'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidInput'),
                    new \PHPStan\Type\Constant\ConstantStringType('WrongRegionS3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('WrongRegionS3Output'),
                    new \PHPStan\Type\Constant\ConstantStringType('WrongRegionRobotApplication'),
                    new \PHPStan\Type\Constant\ConstantStringType('WrongRegionSimulationApplication'),
                    new \PHPStan\Type\Constant\ConstantStringType('UploadContentMismatchError'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3Prefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('recordAllRosTopics'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('application'),
                        new \PHPStan\Type\Constant\ConstantStringType('applicationVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('uploadConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('useDefaultUploadConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('tools'),
                        new \PHPStan\Type\Constant\ConstantStringType('useDefaultTools'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                            new \PHPStan\Type\Constant\ConstantStringType('launchFile'),
                            new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                            new \PHPStan\Type\Constant\ConstantStringType('portForwardingConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                            new \PHPStan\Type\Constant\ConstantStringType('command'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('portMappings'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('jobPort'),
                                        new \PHPStan\Type\Constant\ConstantStringType('applicationPort'),
                                        new \PHPStan\Type\Constant\ConstantStringType('enableOnPublicIp'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('uploadBehavior'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ON_TERMINATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ROLLING_AUTO_REMOVE'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('command'),
                                new \PHPStan\Type\Constant\ConstantStringType('streamOutputToCloudWatch'),
                                new \PHPStan\Type\Constant\ConstantStringType('exitBehavior'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESTART'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('application'),
                        new \PHPStan\Type\Constant\ConstantStringType('applicationVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('uploadConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('worldConfigs'),
                        new \PHPStan\Type\Constant\ConstantStringType('useDefaultUploadConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('tools'),
                        new \PHPStan\Type\Constant\ConstantStringType('useDefaultTools'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                            new \PHPStan\Type\Constant\ConstantStringType('launchFile'),
                            new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                            new \PHPStan\Type\Constant\ConstantStringType('portForwardingConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                            new \PHPStan\Type\Constant\ConstantStringType('command'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('portMappings'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('jobPort'),
                                        new \PHPStan\Type\Constant\ConstantStringType('applicationPort'),
                                        new \PHPStan\Type\Constant\ConstantStringType('enableOnPublicIp'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('uploadBehavior'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ON_TERMINATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ROLLING_AUTO_REMOVE'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('world'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('command'),
                                new \PHPStan\Type\Constant\ConstantStringType('streamOutputToCloudWatch'),
                                new \PHPStan\Type\Constant\ConstantStringType('exitBehavior'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESTART'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Keys'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('destination'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('s3Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('etag'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Archive'),
                            new \PHPStan\Type\Constant\ConstantStringType('File'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('simulationUnitLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('gpuUnitLimit'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CPU'),
                        new \PHPStan\Type\Constant\ConstantStringType('GPU_AND_CPU'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function createWorldExportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                new \PHPStan\Type\Constant\ConstantStringType('iamRole'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Running'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Canceling'),
                    new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InternalServiceError'),
                    new \PHPStan\Type\Constant\ConstantStringType('LimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestThrottled'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidInput'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3Prefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createWorldGenerationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                new \PHPStan\Type\Constant\ConstantStringType('template'),
                new \PHPStan\Type\Constant\ConstantStringType('worldCount'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('worldTags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Running'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('PartialFailed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Canceling'),
                    new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InternalServiceError'),
                    new \PHPStan\Type\Constant\ConstantStringType('LimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestThrottled'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidInput'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllWorldGenerationFailed'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('floorplanCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('interiorCountPerFloorplan'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createWorldTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function deleteFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteRobot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteRobotApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSimulationApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteWorldTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterRobot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('fleet'),
                new \PHPStan\Type\Constant\ConstantStringType('robot'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDeploymentJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('fleet'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentApplicationConfigs'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('robotDeploymentSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('concurrentDeploymentPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureThresholdPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('robotDeploymentTimeoutInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('downloadConditionFile'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('etag'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('application'),
                        new \PHPStan\Type\Constant\ConstantStringType('applicationVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                            new \PHPStan\Type\Constant\ConstantStringType('preLaunchFile'),
                            new \PHPStan\Type\Constant\ConstantStringType('launchFile'),
                            new \PHPStan\Type\Constant\ConstantStringType('postLaunchFile'),
                            new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentSetupError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EtagMismatch'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureThresholdBreached'),
                    new \PHPStan\Type\Constant\ConstantStringType('RobotDeploymentAborted'),
                    new \PHPStan\Type\Constant\ConstantStringType('RobotDeploymentNoResponse'),
                    new \PHPStan\Type\Constant\ConstantStringType('RobotAgentConnectionTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('GreengrassDeploymentFailed'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidGreengrassGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('MissingRobotArchitecture'),
                    new \PHPStan\Type\Constant\ConstantStringType('MissingRobotApplicationArchitecture'),
                    new \PHPStan\Type\Constant\ConstantStringType('MissingRobotDeploymentResource'),
                    new \PHPStan\Type\Constant\ConstantStringType('GreengrassGroupVersionDoesNotExist'),
                    new \PHPStan\Type\Constant\ConstantStringType('LambdaDeleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExtractingBundleFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreLaunchFileFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostLaunchFileFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('BadPermissionError'),
                    new \PHPStan\Type\Constant\ConstantStringType('DownloadConditionFailed'),
                    new \PHPStan\Type\Constant\ConstantStringType('BadLambdaAssociated'),
                    new \PHPStan\Type\Constant\ConstantStringType('InternalServerError'),
                    new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationDoesNotExist'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentFleetDoesNotExist'),
                    new \PHPStan\Type\Constant\ConstantStringType('FleetDeploymentTimeout'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentFinishTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('progressDetail'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Available'),
                            new \PHPStan\Type\Constant\ConstantStringType('Registered'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingNewDeployment'),
                            new \PHPStan\Type\Constant\ConstantStringType('Deploying'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('InSync'),
                            new \PHPStan\Type\Constant\ConstantStringType('NoResponse'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('currentProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('percentDone'),
                            new \PHPStan\Type\Constant\ConstantStringType('estimatedTimeRemainingSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetResource'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Validating'),
                                new \PHPStan\Type\Constant\ConstantStringType('DownloadingExtracting'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExecutingDownloadCondition'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExecutingPreLaunch'),
                                new \PHPStan\Type\Constant\ConstantStringType('Launching'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExecutingPostLaunch'),
                                new \PHPStan\Type\Constant\ConstantStringType('Finished'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnvironmentSetupError'),
                            new \PHPStan\Type\Constant\ConstantStringType('EtagMismatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailureThresholdBreached'),
                            new \PHPStan\Type\Constant\ConstantStringType('RobotDeploymentAborted'),
                            new \PHPStan\Type\Constant\ConstantStringType('RobotDeploymentNoResponse'),
                            new \PHPStan\Type\Constant\ConstantStringType('RobotAgentConnectionTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('GreengrassDeploymentFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidGreengrassGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('MissingRobotArchitecture'),
                            new \PHPStan\Type\Constant\ConstantStringType('MissingRobotApplicationArchitecture'),
                            new \PHPStan\Type\Constant\ConstantStringType('MissingRobotDeploymentResource'),
                            new \PHPStan\Type\Constant\ConstantStringType('GreengrassGroupVersionDoesNotExist'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaDeleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExtractingBundleFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreLaunchFileFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('PostLaunchFileFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionError'),
                            new \PHPStan\Type\Constant\ConstantStringType('DownloadConditionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadLambdaAssociated'),
                            new \PHPStan\Type\Constant\ConstantStringType('InternalServerError'),
                            new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationDoesNotExist'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeploymentFleetDoesNotExist'),
                            new \PHPStan\Type\Constant\ConstantStringType('FleetDeploymentTimeout'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('robots'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentJob'),
                new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentTime'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('greenGrassGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentJob'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Available'),
                            new \PHPStan\Type\Constant\ConstantStringType('Registered'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingNewDeployment'),
                            new \PHPStan\Type\Constant\ConstantStringType('Deploying'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('InSync'),
                            new \PHPStan\Type\Constant\ConstantStringType('NoResponse'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('X86_64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARMHF'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeRobot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('fleetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('greengrassGroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentJob'),
                new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentTime'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Available'),
                    new \PHPStan\Type\Constant\ConstantStringType('Registered'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingNewDeployment'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deploying'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('InSync'),
                    new \PHPStan\Type\Constant\ConstantStringType('NoResponse'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('X86_64'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARM64'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARMHF'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeRobotApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('sources'),
                new \PHPStan\Type\Constant\ConstantStringType('robotSoftwareSuite'),
                new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
                new \PHPStan\Type\Constant\ConstantStringType('imageDigest'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('etag'),
                        new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('X86_64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARMHF'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ROS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROS2'),
                        new \PHPStan\Type\Constant\ConstantStringType('General'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Kinetic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Melodic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dashing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Foxy'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeSimulationApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('sources'),
                new \PHPStan\Type\Constant\ConstantStringType('simulationSoftwareSuite'),
                new \PHPStan\Type\Constant\ConstantStringType('robotSoftwareSuite'),
                new \PHPStan\Type\Constant\ConstantStringType('renderingEngine'),
                new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
                new \PHPStan\Type\Constant\ConstantStringType('imageDigest'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('etag'),
                        new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('X86_64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARMHF'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Gazebo'),
                        new \PHPStan\Type\Constant\ConstantStringType('RosbagPlay'),
                        new \PHPStan\Type\Constant\ConstantStringType('SimulationRuntime'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ROS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROS2'),
                        new \PHPStan\Type\Constant\ConstantStringType('General'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Kinetic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Melodic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dashing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Foxy'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('OGRE'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeSimulationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('lastStartedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('failureBehavior'),
                new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                new \PHPStan\Type\Constant\ConstantStringType('loggingConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('maxJobDurationInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('simulationTimeMillis'),
                new \PHPStan\Type\Constant\ConstantStringType('iamRole'),
                new \PHPStan\Type\Constant\ConstantStringType('robotApplications'),
                new \PHPStan\Type\Constant\ConstantStringType('simulationApplications'),
                new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('networkInterface'),
                new \PHPStan\Type\Constant\ConstantStringType('compute'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                    new \PHPStan\Type\Constant\ConstantStringType('Running'),
                    new \PHPStan\Type\Constant\ConstantStringType('Restarting'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('RunningFailed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terminating'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terminated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Fail'),
                    new \PHPStan\Type\Constant\ConstantStringType('Continue'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InternalServiceError'),
                    new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationCrash'),
                    new \PHPStan\Type\Constant\ConstantStringType('SimulationApplicationCrash'),
                    new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationHealthCheckFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('SimulationApplicationHealthCheckFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsRobotApplication'),
                    new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsSimulationApplication'),
                    new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsS3Object'),
                    new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsS3Output'),
                    new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsCloudwatchLogs'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIpLimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENILimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsUserCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidBundleRobotApplication'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidBundleSimulationApplication'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidS3Resource'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingError'),
                    new \PHPStan\Type\Constant\ConstantStringType('LimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('MismatchedEtag'),
                    new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationVersionMismatchedEtag'),
                    new \PHPStan\Type\Constant\ConstantStringType('SimulationApplicationVersionMismatchedEtag'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestThrottled'),
                    new \PHPStan\Type\Constant\ConstantStringType('BatchTimedOut'),
                    new \PHPStan\Type\Constant\ConstantStringType('BatchCanceled'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidInput'),
                    new \PHPStan\Type\Constant\ConstantStringType('WrongRegionS3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('WrongRegionS3Output'),
                    new \PHPStan\Type\Constant\ConstantStringType('WrongRegionRobotApplication'),
                    new \PHPStan\Type\Constant\ConstantStringType('WrongRegionSimulationApplication'),
                    new \PHPStan\Type\Constant\ConstantStringType('UploadContentMismatchError'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3Prefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('recordAllRosTopics'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('application'),
                        new \PHPStan\Type\Constant\ConstantStringType('applicationVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('uploadConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('useDefaultUploadConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('tools'),
                        new \PHPStan\Type\Constant\ConstantStringType('useDefaultTools'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                            new \PHPStan\Type\Constant\ConstantStringType('launchFile'),
                            new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                            new \PHPStan\Type\Constant\ConstantStringType('portForwardingConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                            new \PHPStan\Type\Constant\ConstantStringType('command'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('portMappings'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('jobPort'),
                                        new \PHPStan\Type\Constant\ConstantStringType('applicationPort'),
                                        new \PHPStan\Type\Constant\ConstantStringType('enableOnPublicIp'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('uploadBehavior'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ON_TERMINATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ROLLING_AUTO_REMOVE'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('command'),
                                new \PHPStan\Type\Constant\ConstantStringType('streamOutputToCloudWatch'),
                                new \PHPStan\Type\Constant\ConstantStringType('exitBehavior'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESTART'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('application'),
                        new \PHPStan\Type\Constant\ConstantStringType('applicationVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('uploadConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('worldConfigs'),
                        new \PHPStan\Type\Constant\ConstantStringType('useDefaultUploadConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('tools'),
                        new \PHPStan\Type\Constant\ConstantStringType('useDefaultTools'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                            new \PHPStan\Type\Constant\ConstantStringType('launchFile'),
                            new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                            new \PHPStan\Type\Constant\ConstantStringType('portForwardingConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                            new \PHPStan\Type\Constant\ConstantStringType('command'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('portMappings'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('jobPort'),
                                        new \PHPStan\Type\Constant\ConstantStringType('applicationPort'),
                                        new \PHPStan\Type\Constant\ConstantStringType('enableOnPublicIp'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('uploadBehavior'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ON_TERMINATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ROLLING_AUTO_REMOVE'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('world'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('command'),
                                new \PHPStan\Type\Constant\ConstantStringType('streamOutputToCloudWatch'),
                                new \PHPStan\Type\Constant\ConstantStringType('exitBehavior'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESTART'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Keys'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('destination'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('s3Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('etag'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Archive'),
                            new \PHPStan\Type\Constant\ConstantStringType('File'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('privateIpAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('publicIpAddress'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('simulationUnitLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('gpuUnitLimit'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CPU'),
                        new \PHPStan\Type\Constant\ConstantStringType('GPU_AND_CPU'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function describeSimulationJobBatch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                new \PHPStan\Type\Constant\ConstantStringType('batchPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('failedRequests'),
                new \PHPStan\Type\Constant\ConstantStringType('pendingRequests'),
                new \PHPStan\Type\Constant\ConstantStringType('createdRequests'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Canceling'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completing'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimingOut'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('timeoutInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxConcurrency'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('InternalServiceError'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('request'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('failedAt'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('loggingConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxJobDurationInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('iamRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('failureBehavior'),
                            new \PHPStan\Type\Constant\ConstantStringType('useDefaultApplications'),
                            new \PHPStan\Type\Constant\ConstantStringType('robotApplications'),
                            new \PHPStan\Type\Constant\ConstantStringType('simulationApplications'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                            new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('compute'),
                            new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3Prefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('recordAllRosTopics'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Fail'),
                                new \PHPStan\Type\Constant\ConstantStringType('Continue'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('application'),
                                    new \PHPStan\Type\Constant\ConstantStringType('applicationVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('launchConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('uploadConfigurations'),
                                    new \PHPStan\Type\Constant\ConstantStringType('useDefaultUploadConfigurations'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tools'),
                                    new \PHPStan\Type\Constant\ConstantStringType('useDefaultTools'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('launchFile'),
                                        new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                                        new \PHPStan\Type\Constant\ConstantStringType('portForwardingConfig'),
                                        new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('portMappings'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('jobPort'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('applicationPort'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('enableOnPublicIp'),
                                                ], [
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\BooleanType(),
                                                ]),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                                            new \PHPStan\Type\Constant\ConstantStringType('uploadBehavior'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ON_TERMINATE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ROLLING_AUTO_REMOVE'),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('command'),
                                            new \PHPStan\Type\Constant\ConstantStringType('streamOutputToCloudWatch'),
                                            new \PHPStan\Type\Constant\ConstantStringType('exitBehavior'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RESTART'),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('application'),
                                    new \PHPStan\Type\Constant\ConstantStringType('applicationVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('launchConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('uploadConfigurations'),
                                    new \PHPStan\Type\Constant\ConstantStringType('worldConfigs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('useDefaultUploadConfigurations'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tools'),
                                    new \PHPStan\Type\Constant\ConstantStringType('useDefaultTools'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('launchFile'),
                                        new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                                        new \PHPStan\Type\Constant\ConstantStringType('portForwardingConfig'),
                                        new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('portMappings'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('jobPort'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('applicationPort'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('enableOnPublicIp'),
                                                ], [
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\BooleanType(),
                                                ]),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                                            new \PHPStan\Type\Constant\ConstantStringType('uploadBehavior'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ON_TERMINATE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ROLLING_AUTO_REMOVE'),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('world'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('command'),
                                            new \PHPStan\Type\Constant\ConstantStringType('streamOutputToCloudWatch'),
                                            new \PHPStan\Type\Constant\ConstantStringType('exitBehavior'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RESTART'),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('s3Keys'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('destination'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Archive'),
                                        new \PHPStan\Type\Constant\ConstantStringType('File'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('simulationUnitLimit'),
                                new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                                new \PHPStan\Type\Constant\ConstantStringType('gpuUnitLimit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CPU'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GPU_AND_CPU'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InternalServiceError'),
                            new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationCrash'),
                            new \PHPStan\Type\Constant\ConstantStringType('SimulationApplicationCrash'),
                            new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationHealthCheckFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('SimulationApplicationHealthCheckFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsRobotApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsSimulationApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsS3Object'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsS3Output'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsCloudwatchLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIpLimitExceeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENILimitExceeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsUserCredentials'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidBundleRobotApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidBundleSimulationApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidS3Resource'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThrottlingError'),
                            new \PHPStan\Type\Constant\ConstantStringType('LimitExceeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('MismatchedEtag'),
                            new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationVersionMismatchedEtag'),
                            new \PHPStan\Type\Constant\ConstantStringType('SimulationApplicationVersionMismatchedEtag'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestThrottled'),
                            new \PHPStan\Type\Constant\ConstantStringType('BatchTimedOut'),
                            new \PHPStan\Type\Constant\ConstantStringType('BatchCanceled'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidInput'),
                            new \PHPStan\Type\Constant\ConstantStringType('WrongRegionS3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('WrongRegionS3Output'),
                            new \PHPStan\Type\Constant\ConstantStringType('WrongRegionRobotApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('WrongRegionSimulationApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('UploadContentMismatchError'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('loggingConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxJobDurationInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('iamRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('useDefaultApplications'),
                        new \PHPStan\Type\Constant\ConstantStringType('robotApplications'),
                        new \PHPStan\Type\Constant\ConstantStringType('simulationApplications'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('compute'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Prefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('recordAllRosTopics'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Fail'),
                            new \PHPStan\Type\Constant\ConstantStringType('Continue'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('application'),
                                new \PHPStan\Type\Constant\ConstantStringType('applicationVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('launchConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('uploadConfigurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('useDefaultUploadConfigurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('tools'),
                                new \PHPStan\Type\Constant\ConstantStringType('useDefaultTools'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('launchFile'),
                                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                                    new \PHPStan\Type\Constant\ConstantStringType('portForwardingConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                    new \PHPStan\Type\Constant\ConstantStringType('command'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('portMappings'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('jobPort'),
                                                new \PHPStan\Type\Constant\ConstantStringType('applicationPort'),
                                                new \PHPStan\Type\Constant\ConstantStringType('enableOnPublicIp'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('path'),
                                        new \PHPStan\Type\Constant\ConstantStringType('uploadBehavior'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ON_TERMINATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ROLLING_AUTO_REMOVE'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                                        new \PHPStan\Type\Constant\ConstantStringType('streamOutputToCloudWatch'),
                                        new \PHPStan\Type\Constant\ConstantStringType('exitBehavior'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RESTART'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('application'),
                                new \PHPStan\Type\Constant\ConstantStringType('applicationVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('launchConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('uploadConfigurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('worldConfigs'),
                                new \PHPStan\Type\Constant\ConstantStringType('useDefaultUploadConfigurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('tools'),
                                new \PHPStan\Type\Constant\ConstantStringType('useDefaultTools'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('launchFile'),
                                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                                    new \PHPStan\Type\Constant\ConstantStringType('portForwardingConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                    new \PHPStan\Type\Constant\ConstantStringType('command'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('portMappings'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('jobPort'),
                                                new \PHPStan\Type\Constant\ConstantStringType('applicationPort'),
                                                new \PHPStan\Type\Constant\ConstantStringType('enableOnPublicIp'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('path'),
                                        new \PHPStan\Type\Constant\ConstantStringType('uploadBehavior'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ON_TERMINATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ROLLING_AUTO_REMOVE'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('world'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                                        new \PHPStan\Type\Constant\ConstantStringType('streamOutputToCloudWatch'),
                                        new \PHPStan\Type\Constant\ConstantStringType('exitBehavior'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RESTART'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3Keys'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('destination'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Archive'),
                                    new \PHPStan\Type\Constant\ConstantStringType('File'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('simulationUnitLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('gpuUnitLimit'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CPU'),
                                new \PHPStan\Type\Constant\ConstantStringType('GPU_AND_CPU'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('simulationApplicationNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('robotApplicationNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSourceNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Running'),
                            new \PHPStan\Type\Constant\ConstantStringType('Restarting'),
                            new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('RunningFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terminating'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terminated'),
                            new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CPU'),
                            new \PHPStan\Type\Constant\ConstantStringType('GPU_AND_CPU'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeWorld(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('generationJob'),
                new \PHPStan\Type\Constant\ConstantStringType('template'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('worldDescriptionBody'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeWorldExportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                new \PHPStan\Type\Constant\ConstantStringType('worlds'),
                new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                new \PHPStan\Type\Constant\ConstantStringType('iamRole'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Running'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Canceling'),
                    new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InternalServiceError'),
                    new \PHPStan\Type\Constant\ConstantStringType('LimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestThrottled'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidInput'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3Prefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeWorldGenerationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                new \PHPStan\Type\Constant\ConstantStringType('template'),
                new \PHPStan\Type\Constant\ConstantStringType('worldCount'),
                new \PHPStan\Type\Constant\ConstantStringType('finishedWorldsSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('worldTags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Running'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('PartialFailed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Canceling'),
                    new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InternalServiceError'),
                    new \PHPStan\Type\Constant\ConstantStringType('LimitExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestThrottled'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidInput'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllWorldGenerationFailed'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('floorplanCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('interiorCountPerFloorplan'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('finishedCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('succeededWorlds'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureSummary'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('totalFailureCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('failures'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('sampleFailureReason'),
                                new \PHPStan\Type\Constant\ConstantStringType('failureCount'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('InternalServiceError'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LimitExceeded'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RequestThrottled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InvalidInput'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AllWorldGenerationFailed'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeWorldTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getWorldTemplateBody(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('templateBody'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDeploymentJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deploymentJobs'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleet'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentApplicationConfigs'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('application'),
                                new \PHPStan\Type\Constant\ConstantStringType('applicationVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('launchConfig'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('preLaunchFile'),
                                    new \PHPStan\Type\Constant\ConstantStringType('launchFile'),
                                    new \PHPStan\Type\Constant\ConstantStringType('postLaunchFile'),
                                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('concurrentDeploymentPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('failureThresholdPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('robotDeploymentTimeoutInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('downloadConditionFile'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('etag'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnvironmentSetupError'),
                            new \PHPStan\Type\Constant\ConstantStringType('EtagMismatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailureThresholdBreached'),
                            new \PHPStan\Type\Constant\ConstantStringType('RobotDeploymentAborted'),
                            new \PHPStan\Type\Constant\ConstantStringType('RobotDeploymentNoResponse'),
                            new \PHPStan\Type\Constant\ConstantStringType('RobotAgentConnectionTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('GreengrassDeploymentFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidGreengrassGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('MissingRobotArchitecture'),
                            new \PHPStan\Type\Constant\ConstantStringType('MissingRobotApplicationArchitecture'),
                            new \PHPStan\Type\Constant\ConstantStringType('MissingRobotDeploymentResource'),
                            new \PHPStan\Type\Constant\ConstantStringType('GreengrassGroupVersionDoesNotExist'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaDeleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExtractingBundleFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('PreLaunchFileFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('PostLaunchFileFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionError'),
                            new \PHPStan\Type\Constant\ConstantStringType('DownloadConditionFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadLambdaAssociated'),
                            new \PHPStan\Type\Constant\ConstantStringType('InternalServerError'),
                            new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationDoesNotExist'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeploymentFleetDoesNotExist'),
                            new \PHPStan\Type\Constant\ConstantStringType('FleetDeploymentTimeout'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFleets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('fleetDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentJob'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRobotApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('robotApplicationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('robotSoftwareSuite'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ROS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROS2'),
                                new \PHPStan\Type\Constant\ConstantStringType('General'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Kinetic'),
                                new \PHPStan\Type\Constant\ConstantStringType('Melodic'),
                                new \PHPStan\Type\Constant\ConstantStringType('Dashing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Foxy'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRobots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('robots'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('greenGrassGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentJob'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Available'),
                            new \PHPStan\Type\Constant\ConstantStringType('Registered'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingNewDeployment'),
                            new \PHPStan\Type\Constant\ConstantStringType('Deploying'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('InSync'),
                            new \PHPStan\Type\Constant\ConstantStringType('NoResponse'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('X86_64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARMHF'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSimulationApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('simulationApplicationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('robotSoftwareSuite'),
                        new \PHPStan\Type\Constant\ConstantStringType('simulationSoftwareSuite'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ROS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROS2'),
                                new \PHPStan\Type\Constant\ConstantStringType('General'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Kinetic'),
                                new \PHPStan\Type\Constant\ConstantStringType('Melodic'),
                                new \PHPStan\Type\Constant\ConstantStringType('Dashing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Foxy'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Gazebo'),
                                new \PHPStan\Type\Constant\ConstantStringType('RosbagPlay'),
                                new \PHPStan\Type\Constant\ConstantStringType('SimulationRuntime'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSimulationJobBatches(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('simulationJobBatchSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('failedRequestCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('pendingRequestCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdRequestCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Canceling'),
                            new \PHPStan\Type\Constant\ConstantStringType('Completing'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimingOut'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSimulationJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('simulationJobSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('simulationApplicationNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('robotApplicationNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSourceNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Running'),
                            new \PHPStan\Type\Constant\ConstantStringType('Restarting'),
                            new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('RunningFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terminating'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terminated'),
                            new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CPU'),
                            new \PHPStan\Type\Constant\ConstantStringType('GPU_AND_CPU'),
                        ]),
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
    private function listWorldExportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('worldExportJobSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('worlds'),
                        new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Running'),
                            new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Canceling'),
                            new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Prefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWorldGenerationJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('worldGenerationJobSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('template'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('worldCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('succeededWorldCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('failedWorldCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Running'),
                            new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('PartialFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Canceling'),
                            new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('floorplanCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('interiorCountPerFloorplan'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWorldTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('templateSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWorlds(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('worldSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('generationJob'),
                        new \PHPStan\Type\Constant\ConstantStringType('template'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerRobot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('fleet'),
                new \PHPStan\Type\Constant\ConstantStringType('robot'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function restartSimulationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startSimulationJobBatch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                new \PHPStan\Type\Constant\ConstantStringType('batchPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('failedRequests'),
                new \PHPStan\Type\Constant\ConstantStringType('pendingRequests'),
                new \PHPStan\Type\Constant\ConstantStringType('createdRequests'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Canceling'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completing'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimingOut'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimedOut'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('timeoutInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxConcurrency'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('InternalServiceError'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('request'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('failedAt'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('loggingConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxJobDurationInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('iamRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('failureBehavior'),
                            new \PHPStan\Type\Constant\ConstantStringType('useDefaultApplications'),
                            new \PHPStan\Type\Constant\ConstantStringType('robotApplications'),
                            new \PHPStan\Type\Constant\ConstantStringType('simulationApplications'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                            new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('compute'),
                            new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3Prefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('recordAllRosTopics'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Fail'),
                                new \PHPStan\Type\Constant\ConstantStringType('Continue'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('application'),
                                    new \PHPStan\Type\Constant\ConstantStringType('applicationVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('launchConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('uploadConfigurations'),
                                    new \PHPStan\Type\Constant\ConstantStringType('useDefaultUploadConfigurations'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tools'),
                                    new \PHPStan\Type\Constant\ConstantStringType('useDefaultTools'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('launchFile'),
                                        new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                                        new \PHPStan\Type\Constant\ConstantStringType('portForwardingConfig'),
                                        new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('portMappings'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('jobPort'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('applicationPort'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('enableOnPublicIp'),
                                                ], [
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\BooleanType(),
                                                ]),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                                            new \PHPStan\Type\Constant\ConstantStringType('uploadBehavior'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ON_TERMINATE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ROLLING_AUTO_REMOVE'),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('command'),
                                            new \PHPStan\Type\Constant\ConstantStringType('streamOutputToCloudWatch'),
                                            new \PHPStan\Type\Constant\ConstantStringType('exitBehavior'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RESTART'),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('application'),
                                    new \PHPStan\Type\Constant\ConstantStringType('applicationVersion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('launchConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('uploadConfigurations'),
                                    new \PHPStan\Type\Constant\ConstantStringType('worldConfigs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('useDefaultUploadConfigurations'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tools'),
                                    new \PHPStan\Type\Constant\ConstantStringType('useDefaultTools'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('launchFile'),
                                        new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                                        new \PHPStan\Type\Constant\ConstantStringType('portForwardingConfig'),
                                        new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('portMappings'),
                                        ], [
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('jobPort'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('applicationPort'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('enableOnPublicIp'),
                                                ], [
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\IntegerType(),
                                                    new \PHPStan\Type\BooleanType(),
                                                ]),
                                            ])),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                                            new \PHPStan\Type\Constant\ConstantStringType('uploadBehavior'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ON_TERMINATE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ROLLING_AUTO_REMOVE'),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('world'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('command'),
                                            new \PHPStan\Type\Constant\ConstantStringType('streamOutputToCloudWatch'),
                                            new \PHPStan\Type\Constant\ConstantStringType('exitBehavior'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                                new \PHPStan\Type\Constant\ConstantStringType('RESTART'),
                                            ]),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('s3Keys'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('destination'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Archive'),
                                        new \PHPStan\Type\Constant\ConstantStringType('File'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('simulationUnitLimit'),
                                new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                                new \PHPStan\Type\Constant\ConstantStringType('gpuUnitLimit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CPU'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GPU_AND_CPU'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InternalServiceError'),
                            new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationCrash'),
                            new \PHPStan\Type\Constant\ConstantStringType('SimulationApplicationCrash'),
                            new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationHealthCheckFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('SimulationApplicationHealthCheckFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsRobotApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsSimulationApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsS3Object'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsS3Output'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsCloudwatchLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIpLimitExceeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENILimitExceeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('BadPermissionsUserCredentials'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidBundleRobotApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidBundleSimulationApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidS3Resource'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThrottlingError'),
                            new \PHPStan\Type\Constant\ConstantStringType('LimitExceeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('MismatchedEtag'),
                            new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationVersionMismatchedEtag'),
                            new \PHPStan\Type\Constant\ConstantStringType('SimulationApplicationVersionMismatchedEtag'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestThrottled'),
                            new \PHPStan\Type\Constant\ConstantStringType('BatchTimedOut'),
                            new \PHPStan\Type\Constant\ConstantStringType('BatchCanceled'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidInput'),
                            new \PHPStan\Type\Constant\ConstantStringType('WrongRegionS3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('WrongRegionS3Output'),
                            new \PHPStan\Type\Constant\ConstantStringType('WrongRegionRobotApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('WrongRegionSimulationApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('UploadContentMismatchError'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outputLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('loggingConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxJobDurationInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('iamRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('useDefaultApplications'),
                        new \PHPStan\Type\Constant\ConstantStringType('robotApplications'),
                        new \PHPStan\Type\Constant\ConstantStringType('simulationApplications'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('compute'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Prefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('recordAllRosTopics'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Fail'),
                            new \PHPStan\Type\Constant\ConstantStringType('Continue'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('application'),
                                new \PHPStan\Type\Constant\ConstantStringType('applicationVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('launchConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('uploadConfigurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('useDefaultUploadConfigurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('tools'),
                                new \PHPStan\Type\Constant\ConstantStringType('useDefaultTools'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('launchFile'),
                                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                                    new \PHPStan\Type\Constant\ConstantStringType('portForwardingConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                    new \PHPStan\Type\Constant\ConstantStringType('command'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('portMappings'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('jobPort'),
                                                new \PHPStan\Type\Constant\ConstantStringType('applicationPort'),
                                                new \PHPStan\Type\Constant\ConstantStringType('enableOnPublicIp'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('path'),
                                        new \PHPStan\Type\Constant\ConstantStringType('uploadBehavior'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ON_TERMINATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ROLLING_AUTO_REMOVE'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                                        new \PHPStan\Type\Constant\ConstantStringType('streamOutputToCloudWatch'),
                                        new \PHPStan\Type\Constant\ConstantStringType('exitBehavior'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RESTART'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('application'),
                                new \PHPStan\Type\Constant\ConstantStringType('applicationVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('launchConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('uploadConfigurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('worldConfigs'),
                                new \PHPStan\Type\Constant\ConstantStringType('useDefaultUploadConfigurations'),
                                new \PHPStan\Type\Constant\ConstantStringType('tools'),
                                new \PHPStan\Type\Constant\ConstantStringType('useDefaultTools'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('launchFile'),
                                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                                    new \PHPStan\Type\Constant\ConstantStringType('portForwardingConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                    new \PHPStan\Type\Constant\ConstantStringType('command'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('portMappings'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('jobPort'),
                                                new \PHPStan\Type\Constant\ConstantStringType('applicationPort'),
                                                new \PHPStan\Type\Constant\ConstantStringType('enableOnPublicIp'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\BooleanType(),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('path'),
                                        new \PHPStan\Type\Constant\ConstantStringType('uploadBehavior'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ON_TERMINATE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ROLLING_AUTO_REMOVE'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('world'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('streamUI'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('command'),
                                        new \PHPStan\Type\Constant\ConstantStringType('streamOutputToCloudWatch'),
                                        new \PHPStan\Type\Constant\ConstantStringType('exitBehavior'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RESTART'),
                                        ]),
                                    ]),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3Keys'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('destination'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Archive'),
                                    new \PHPStan\Type\Constant\ConstantStringType('File'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('assignPublicIp'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('simulationUnitLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('gpuUnitLimit'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CPU'),
                                new \PHPStan\Type\Constant\ConstantStringType('GPU_AND_CPU'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('simulationApplicationNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('robotApplicationNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSourceNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Running'),
                            new \PHPStan\Type\Constant\ConstantStringType('Restarting'),
                            new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('RunningFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terminating'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terminated'),
                            new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CPU'),
                            new \PHPStan\Type\Constant\ConstantStringType('GPU_AND_CPU'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function syncDeploymentJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('fleet'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentApplicationConfigs'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('concurrentDeploymentPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureThresholdPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('robotDeploymentTimeoutInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('downloadConditionFile'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('etag'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('application'),
                        new \PHPStan\Type\Constant\ConstantStringType('applicationVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                            new \PHPStan\Type\Constant\ConstantStringType('preLaunchFile'),
                            new \PHPStan\Type\Constant\ConstantStringType('launchFile'),
                            new \PHPStan\Type\Constant\ConstantStringType('postLaunchFile'),
                            new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentSetupError'),
                    new \PHPStan\Type\Constant\ConstantStringType('EtagMismatch'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureThresholdBreached'),
                    new \PHPStan\Type\Constant\ConstantStringType('RobotDeploymentAborted'),
                    new \PHPStan\Type\Constant\ConstantStringType('RobotDeploymentNoResponse'),
                    new \PHPStan\Type\Constant\ConstantStringType('RobotAgentConnectionTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('GreengrassDeploymentFailed'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidGreengrassGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('MissingRobotArchitecture'),
                    new \PHPStan\Type\Constant\ConstantStringType('MissingRobotApplicationArchitecture'),
                    new \PHPStan\Type\Constant\ConstantStringType('MissingRobotDeploymentResource'),
                    new \PHPStan\Type\Constant\ConstantStringType('GreengrassGroupVersionDoesNotExist'),
                    new \PHPStan\Type\Constant\ConstantStringType('LambdaDeleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExtractingBundleFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreLaunchFileFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostLaunchFileFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('BadPermissionError'),
                    new \PHPStan\Type\Constant\ConstantStringType('DownloadConditionFailed'),
                    new \PHPStan\Type\Constant\ConstantStringType('BadLambdaAssociated'),
                    new \PHPStan\Type\Constant\ConstantStringType('InternalServerError'),
                    new \PHPStan\Type\Constant\ConstantStringType('RobotApplicationDoesNotExist'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentFleetDoesNotExist'),
                    new \PHPStan\Type\Constant\ConstantStringType('FleetDeploymentTimeout'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function updateRobotApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('sources'),
                new \PHPStan\Type\Constant\ConstantStringType('robotSoftwareSuite'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('etag'),
                        new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('X86_64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARMHF'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ROS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROS2'),
                        new \PHPStan\Type\Constant\ConstantStringType('General'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Kinetic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Melodic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dashing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Foxy'),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateSimulationApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('sources'),
                new \PHPStan\Type\Constant\ConstantStringType('simulationSoftwareSuite'),
                new \PHPStan\Type\Constant\ConstantStringType('robotSoftwareSuite'),
                new \PHPStan\Type\Constant\ConstantStringType('renderingEngine'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('etag'),
                        new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('X86_64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM64'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARMHF'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Gazebo'),
                        new \PHPStan\Type\Constant\ConstantStringType('RosbagPlay'),
                        new \PHPStan\Type\Constant\ConstantStringType('SimulationRuntime'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ROS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROS2'),
                        new \PHPStan\Type\Constant\ConstantStringType('General'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Kinetic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Melodic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dashing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Foxy'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('OGRE'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateWorldTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
}