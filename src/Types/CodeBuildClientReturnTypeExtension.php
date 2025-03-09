<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CodeBuildClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CodeBuild\CodeBuildClient>
     */
    public function getClass(): string
    {
        return \Aws\CodeBuild\CodeBuildClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchDeleteBuilds',
            'batchGetBuildBatches',
            'batchGetBuilds',
            'batchGetFleets',
            'batchGetProjects',
            'batchGetReportGroups',
            'batchGetReports',
            'createFleet',
            'createProject',
            'createReportGroup',
            'createWebhook',
            'deleteBuildBatch',
            'deleteFleet',
            'deleteProject',
            'deleteReport',
            'deleteReportGroup',
            'deleteResourcePolicy',
            'deleteSourceCredentials',
            'deleteWebhook',
            'describeCodeCoverages',
            'describeTestCases',
            'getReportGroupTrend',
            'getResourcePolicy',
            'importSourceCredentials',
            'invalidateProjectCache',
            'listBuildBatches',
            'listBuildBatchesForProject',
            'listBuilds',
            'listBuildsForProject',
            'listCuratedEnvironmentImages',
            'listFleets',
            'listProjects',
            'listReportGroups',
            'listReports',
            'listReportsForReportGroup',
            'listSharedProjects',
            'listSharedReportGroups',
            'listSourceCredentials',
            'putResourcePolicy',
            'retryBuild',
            'retryBuildBatch',
            'startBuild',
            'startBuildBatch',
            'stopBuild',
            'stopBuildBatch',
            'updateFleet',
            'updateProject',
            'updateProjectVisibility',
            'updateReportGroup',
            'updateWebhook',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchDeleteBuilds' => $this->batchDeleteBuilds(),
            'batchGetBuildBatches' => $this->batchGetBuildBatches(),
            'batchGetBuilds' => $this->batchGetBuilds(),
            'batchGetFleets' => $this->batchGetFleets(),
            'batchGetProjects' => $this->batchGetProjects(),
            'batchGetReportGroups' => $this->batchGetReportGroups(),
            'batchGetReports' => $this->batchGetReports(),
            'createFleet' => $this->createFleet(),
            'createProject' => $this->createProject(),
            'createReportGroup' => $this->createReportGroup(),
            'createWebhook' => $this->createWebhook(),
            'deleteBuildBatch' => $this->deleteBuildBatch(),
            'deleteFleet' => $this->deleteFleet(),
            'deleteProject' => $this->deleteProject(),
            'deleteReport' => $this->deleteReport(),
            'deleteReportGroup' => $this->deleteReportGroup(),
            'deleteResourcePolicy' => $this->deleteResourcePolicy(),
            'deleteSourceCredentials' => $this->deleteSourceCredentials(),
            'deleteWebhook' => $this->deleteWebhook(),
            'describeCodeCoverages' => $this->describeCodeCoverages(),
            'describeTestCases' => $this->describeTestCases(),
            'getReportGroupTrend' => $this->getReportGroupTrend(),
            'getResourcePolicy' => $this->getResourcePolicy(),
            'importSourceCredentials' => $this->importSourceCredentials(),
            'invalidateProjectCache' => $this->invalidateProjectCache(),
            'listBuildBatches' => $this->listBuildBatches(),
            'listBuildBatchesForProject' => $this->listBuildBatchesForProject(),
            'listBuilds' => $this->listBuilds(),
            'listBuildsForProject' => $this->listBuildsForProject(),
            'listCuratedEnvironmentImages' => $this->listCuratedEnvironmentImages(),
            'listFleets' => $this->listFleets(),
            'listProjects' => $this->listProjects(),
            'listReportGroups' => $this->listReportGroups(),
            'listReports' => $this->listReports(),
            'listReportsForReportGroup' => $this->listReportsForReportGroup(),
            'listSharedProjects' => $this->listSharedProjects(),
            'listSharedReportGroups' => $this->listSharedReportGroups(),
            'listSourceCredentials' => $this->listSourceCredentials(),
            'putResourcePolicy' => $this->putResourcePolicy(),
            'retryBuild' => $this->retryBuild(),
            'retryBuildBatch' => $this->retryBuildBatch(),
            'startBuild' => $this->startBuild(),
            'startBuildBatch' => $this->startBuildBatch(),
            'stopBuild' => $this->stopBuild(),
            'stopBuildBatch' => $this->stopBuildBatch(),
            'updateFleet' => $this->updateFleet(),
            'updateProject' => $this->updateProject(),
            'updateProjectVisibility' => $this->updateProjectVisibility(),
            'updateReportGroup' => $this->updateReportGroup(),
            'updateWebhook' => $this->updateWebhook(),
        };
    }
    private function batchDeleteBuilds(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('buildsDeleted'),
                new \PHPStan\Type\Constant\ConstantStringType('buildsNotDeleted'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchGetBuildBatches(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('buildBatches'),
                new \PHPStan\Type\Constant\ConstantStringType('buildBatchesNotFound'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('currentPhase'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildBatchStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolvedSourceVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('projectName'),
                        new \PHPStan\Type\Constant\ConstantStringType('phases'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('secondarySources'),
                        new \PHPStan\Type\Constant\ConstantStringType('secondarySourceVersions'),
                        new \PHPStan\Type\Constant\ConstantStringType('artifacts'),
                        new \PHPStan\Type\Constant\ConstantStringType('secondaryArtifacts'),
                        new \PHPStan\Type\Constant\ConstantStringType('cache'),
                        new \PHPStan\Type\Constant\ConstantStringType('environment'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('logConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildTimeoutInMinutes'),
                        new \PHPStan\Type\Constant\ConstantStringType('queuedTimeoutInMinutes'),
                        new \PHPStan\Type\Constant\ConstantStringType('complete'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiator'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildBatchNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('fileSystemLocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildBatchConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('debugSessionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('reportArns'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('phaseType'),
                                new \PHPStan\Type\Constant\ConstantStringType('phaseStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('durationInSeconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('contexts'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOWNLOAD_BATCHSPEC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMBINE_ARTIFACTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                            new \PHPStan\Type\Constant\ConstantStringType('auth'),
                            new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('context'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                                new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                                new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                                new \PHPStan\Type\Constant\ConstantStringType('auth'),
                                new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('context'),
                                    new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('sha256sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('md5sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                                new \PHPStan\Type\Constant\ConstantStringType('sha256sum'),
                                new \PHPStan\Type\Constant\ConstantStringType('md5sum'),
                                new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                                new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('modes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NO_CACHE'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LOCAL_DOCKER_LAYER_CACHE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOCAL_SOURCE_CACHE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOCAL_CUSTOM_CACHE'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('image'),
                            new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('computeConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('fleet'),
                            new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                            new \PHPStan\Type\Constant\ConstantStringType('privilegedMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('registryCredential'),
                            new \PHPStan\Type\Constant\ConstantStringType('imagePullCredentialsType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX_GPU_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('ARM_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX_LAMBDA_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('ARM_LAMBDA_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX_EC2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ARM_EC2'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_EC2'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAC_ARM'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_SMALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_MEDIUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_LARGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_XLARGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_2XLARGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_1GB'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_2GB'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_4GB'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_8GB'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_10GB'),
                                new \PHPStan\Type\Constant\ConstantStringType('ATTRIBUTE_BASED_COMPUTE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('vCpu'),
                                new \PHPStan\Type\Constant\ConstantStringType('memory'),
                                new \PHPStan\Type\Constant\ConstantStringType('disk'),
                                new \PHPStan\Type\Constant\ConstantStringType('machineType'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GENERAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NVME'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fleetArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PARAMETER_STORE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('credential'),
                                new \PHPStan\Type\Constant\ConstantStringType('credentialProvider'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CODEBUILD'),
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ROLE'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Logs'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('streamName'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                                new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                                new \PHPStan\Type\Constant\ConstantStringType('mountPoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('EFS'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('combineArtifacts'),
                            new \PHPStan\Type\Constant\ConstantStringType('restrictions'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeoutInMins'),
                            new \PHPStan\Type\Constant\ConstantStringType('batchReportMode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('maximumBuildsAllowed'),
                                new \PHPStan\Type\Constant\ConstantStringType('computeTypesAllowed'),
                                new \PHPStan\Type\Constant\ConstantStringType('fleetsAllowed'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('REPORT_INDIVIDUAL_BUILDS'),
                                new \PHPStan\Type\Constant\ConstantStringType('REPORT_AGGREGATED_BATCH'),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('dependsOn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ignoreFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('currentBuildSummary'),
                                new \PHPStan\Type\Constant\ConstantStringType('priorBuildSummaryList'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('requestedOn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('buildStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('primaryArtifact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('secondaryArtifacts'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('requestedOn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('buildStatus'),
                                        new \PHPStan\Type\Constant\ConstantStringType('primaryArtifact'),
                                        new \PHPStan\Type\Constant\ConstantStringType('secondaryArtifacts'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                                                new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                            ], [
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                    ]),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchGetBuilds(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('builds'),
                new \PHPStan\Type\Constant\ConstantStringType('buildsNotFound'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('currentPhase'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolvedSourceVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('projectName'),
                        new \PHPStan\Type\Constant\ConstantStringType('phases'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('secondarySources'),
                        new \PHPStan\Type\Constant\ConstantStringType('secondarySourceVersions'),
                        new \PHPStan\Type\Constant\ConstantStringType('artifacts'),
                        new \PHPStan\Type\Constant\ConstantStringType('secondaryArtifacts'),
                        new \PHPStan\Type\Constant\ConstantStringType('cache'),
                        new \PHPStan\Type\Constant\ConstantStringType('environment'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('logs'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutInMinutes'),
                        new \PHPStan\Type\Constant\ConstantStringType('queuedTimeoutInMinutes'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildComplete'),
                        new \PHPStan\Type\Constant\ConstantStringType('initiator'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterface'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('exportedEnvironmentVariables'),
                        new \PHPStan\Type\Constant\ConstantStringType('reportArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('fileSystemLocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('debugSession'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildBatchArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoRetryConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('phaseType'),
                                new \PHPStan\Type\Constant\ConstantStringType('phaseStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('durationInSeconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('contexts'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOWNLOAD_SOURCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INSTALL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRE_BUILD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BUILD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST_BUILD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ARTIFACTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FINALIZING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                            new \PHPStan\Type\Constant\ConstantStringType('auth'),
                            new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('context'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                                new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                                new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                                new \PHPStan\Type\Constant\ConstantStringType('auth'),
                                new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('context'),
                                    new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('sha256sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('md5sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                                new \PHPStan\Type\Constant\ConstantStringType('sha256sum'),
                                new \PHPStan\Type\Constant\ConstantStringType('md5sum'),
                                new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                                new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('modes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NO_CACHE'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LOCAL_DOCKER_LAYER_CACHE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOCAL_SOURCE_CACHE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOCAL_CUSTOM_CACHE'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('image'),
                            new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('computeConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('fleet'),
                            new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                            new \PHPStan\Type\Constant\ConstantStringType('privilegedMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('registryCredential'),
                            new \PHPStan\Type\Constant\ConstantStringType('imagePullCredentialsType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX_GPU_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('ARM_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX_LAMBDA_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('ARM_LAMBDA_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX_EC2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ARM_EC2'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_EC2'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAC_ARM'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_SMALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_MEDIUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_LARGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_XLARGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_2XLARGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_1GB'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_2GB'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_4GB'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_8GB'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_10GB'),
                                new \PHPStan\Type\Constant\ConstantStringType('ATTRIBUTE_BASED_COMPUTE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('vCpu'),
                                new \PHPStan\Type\Constant\ConstantStringType('memory'),
                                new \PHPStan\Type\Constant\ConstantStringType('disk'),
                                new \PHPStan\Type\Constant\ConstantStringType('machineType'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GENERAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NVME'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fleetArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PARAMETER_STORE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('credential'),
                                new \PHPStan\Type\Constant\ConstantStringType('credentialProvider'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CODEBUILD'),
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ROLE'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('streamName'),
                            new \PHPStan\Type\Constant\ConstantStringType('deepLink'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3DeepLink'),
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3LogsArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Logs'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('streamName'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                                new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                                new \PHPStan\Type\Constant\ConstantStringType('mountPoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('EFS'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sessionEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('sessionTarget'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('autoRetryLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('autoRetryNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('nextAutoRetry'),
                            new \PHPStan\Type\Constant\ConstantStringType('previousAutoRetry'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchGetFleets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('fleets'),
                new \PHPStan\Type\Constant\ConstantStringType('fleetsNotFound'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('created'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('baseCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('environmentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('scalingConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('overflowBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('proxyConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('imageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleetServiceRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('context'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTION_REQUIRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_CAPACITY'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_GPU_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_LAMBDA_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_LAMBDA_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAC_ARM'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_SMALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_LARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_2XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_1GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_2GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_4GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_8GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_10GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTRIBUTE_BASED_COMPUTE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vCpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('disk'),
                            new \PHPStan\Type\Constant\ConstantStringType('machineType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GENERAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('NVME'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('scalingType'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetTrackingScalingConfigs'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxCapacity'),
                            new \PHPStan\Type\Constant\ConstantStringType('desiredCapacity'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('TARGET_TRACKING_SCALING'),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('metricType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('targetValue'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('FLEET_UTILIZATION_RATE'),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('QUEUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('defaultBehavior'),
                            new \PHPStan\Type\Constant\ConstantStringType('orderedProxyRules'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_ALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DENY_ALL'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('effect'),
                                    new \PHPStan\Type\Constant\ConstantStringType('entities'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DOMAIN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IP'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchGetProjects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('projects'),
                new \PHPStan\Type\Constant\ConstantStringType('projectsNotFound'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('secondarySources'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('secondarySourceVersions'),
                        new \PHPStan\Type\Constant\ConstantStringType('artifacts'),
                        new \PHPStan\Type\Constant\ConstantStringType('secondaryArtifacts'),
                        new \PHPStan\Type\Constant\ConstantStringType('cache'),
                        new \PHPStan\Type\Constant\ConstantStringType('environment'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutInMinutes'),
                        new \PHPStan\Type\Constant\ConstantStringType('queuedTimeoutInMinutes'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('created'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                        new \PHPStan\Type\Constant\ConstantStringType('webhook'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('badge'),
                        new \PHPStan\Type\Constant\ConstantStringType('logsConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('fileSystemLocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildBatchConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('concurrentBuildLimit'),
                        new \PHPStan\Type\Constant\ConstantStringType('projectVisibility'),
                        new \PHPStan\Type\Constant\ConstantStringType('publicProjectAlias'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceAccessRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoRetryLimit'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                            new \PHPStan\Type\Constant\ConstantStringType('auth'),
                            new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('context'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                                new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                                new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                                new \PHPStan\Type\Constant\ConstantStringType('auth'),
                                new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('context'),
                                    new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                            new \PHPStan\Type\Constant\ConstantStringType('namespaceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('packaging'),
                            new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_ID'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('namespaceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('packaging'),
                                new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                                new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BUILD_ID'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('modes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NO_CACHE'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LOCAL_DOCKER_LAYER_CACHE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOCAL_SOURCE_CACHE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOCAL_CUSTOM_CACHE'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('image'),
                            new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('computeConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('fleet'),
                            new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                            new \PHPStan\Type\Constant\ConstantStringType('privilegedMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('registryCredential'),
                            new \PHPStan\Type\Constant\ConstantStringType('imagePullCredentialsType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX_GPU_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('ARM_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX_LAMBDA_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('ARM_LAMBDA_CONTAINER'),
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX_EC2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ARM_EC2'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_EC2'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAC_ARM'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_SMALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_MEDIUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_LARGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_XLARGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_2XLARGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_1GB'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_2GB'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_4GB'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_8GB'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_10GB'),
                                new \PHPStan\Type\Constant\ConstantStringType('ATTRIBUTE_BASED_COMPUTE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('vCpu'),
                                new \PHPStan\Type\Constant\ConstantStringType('memory'),
                                new \PHPStan\Type\Constant\ConstantStringType('disk'),
                                new \PHPStan\Type\Constant\ConstantStringType('machineType'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GENERAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NVME'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fleetArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PARAMETER_STORE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('credential'),
                                new \PHPStan\Type\Constant\ConstantStringType('credentialProvider'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CODEBUILD'),
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ROLE'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('url'),
                            new \PHPStan\Type\Constant\ConstantStringType('payloadUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('secret'),
                            new \PHPStan\Type\Constant\ConstantStringType('branchFilter'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildType'),
                            new \PHPStan\Type\Constant\ConstantStringType('manualCreation'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModifiedSecret'),
                            new \PHPStan\Type\Constant\ConstantStringType('scopeConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                                        new \PHPStan\Type\Constant\ConstantStringType('excludeMatchedPattern'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BASE_REF'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HEAD_REF'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ACTOR_ACCOUNT_ID'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FILE_PATH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('COMMIT_MESSAGE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_NAME'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TAG_NAME'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RELEASE_NAME'),
                                            new \PHPStan\Type\Constant\ConstantStringType('REPOSITORY_NAME'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                ])),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_BATCH'),
                                new \PHPStan\Type\Constant\ConstantStringType('RUNNER_BUILDKITE_BUILD'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('domain'),
                                new \PHPStan\Type\Constant\ConstantStringType('scope'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ORGANIZATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GITHUB_GLOBAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GITLAB_GROUP'),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('badgeEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('badgeRequestUrl'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Logs'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('streamName'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                                new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('location'),
                                new \PHPStan\Type\Constant\ConstantStringType('mountPoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('EFS'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                            new \PHPStan\Type\Constant\ConstantStringType('combineArtifacts'),
                            new \PHPStan\Type\Constant\ConstantStringType('restrictions'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeoutInMins'),
                            new \PHPStan\Type\Constant\ConstantStringType('batchReportMode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('maximumBuildsAllowed'),
                                new \PHPStan\Type\Constant\ConstantStringType('computeTypesAllowed'),
                                new \PHPStan\Type\Constant\ConstantStringType('fleetsAllowed'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('REPORT_INDIVIDUAL_BUILDS'),
                                new \PHPStan\Type\Constant\ConstantStringType('REPORT_AGGREGATED_BATCH'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_READ'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchGetReportGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('reportGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('reportGroupsNotFound'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('exportConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('created'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('CODE_COVERAGE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('exportConfigType'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Destination'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_EXPORT'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketOwner'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('packaging'),
                                new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchGetReports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('reports'),
                new \PHPStan\Type\Constant\ConstantStringType('reportsNotFound'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('reportGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('created'),
                        new \PHPStan\Type\Constant\ConstantStringType('expired'),
                        new \PHPStan\Type\Constant\ConstantStringType('exportConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('truncated'),
                        new \PHPStan\Type\Constant\ConstantStringType('testSummary'),
                        new \PHPStan\Type\Constant\ConstantStringType('codeCoverageSummary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('CODE_COVERAGE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GENERATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INCOMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('exportConfigType'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Destination'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_EXPORT'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucketOwner'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('packaging'),
                                new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('total'),
                            new \PHPStan\Type\Constant\ConstantStringType('statusCounts'),
                            new \PHPStan\Type\Constant\ConstantStringType('durationInNanoSeconds'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\IntegerType()),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lineCoveragePercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('linesCovered'),
                            new \PHPStan\Type\Constant\ConstantStringType('linesMissed'),
                            new \PHPStan\Type\Constant\ConstantStringType('branchCoveragePercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('branchesCovered'),
                            new \PHPStan\Type\Constant\ConstantStringType('branchesMissed'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\IntegerType(),
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
    private function createFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('fleet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('baseCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('scalingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('overflowBehavior'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('proxyConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageId'),
                    new \PHPStan\Type\Constant\ConstantStringType('fleetServiceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('context'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTION_REQUIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_CAPACITY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CONTAINER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINUX_CONTAINER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINUX_GPU_CONTAINER'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARM_CONTAINER'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_CONTAINER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINUX_LAMBDA_CONTAINER'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARM_LAMBDA_CONTAINER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINUX_EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARM_EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAC_ARM'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_SMALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_LARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_XLARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_2XLARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_1GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_2GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_4GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_8GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_10GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('ATTRIBUTE_BASED_COMPUTE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vCpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('disk'),
                        new \PHPStan\Type\Constant\ConstantStringType('machineType'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GENERAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('NVME'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('scalingType'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetTrackingScalingConfigs'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('desiredCapacity'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('TARGET_TRACKING_SCALING'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metricType'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetValue'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('FLEET_UTILIZATION_RATE'),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('defaultBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('orderedProxyRules'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALLOW_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DENY_ALL'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('effect'),
                                new \PHPStan\Type\Constant\ConstantStringType('entities'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IP'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('project'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondarySources'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondarySourceVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('artifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondaryArtifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('cache'),
                    new \PHPStan\Type\Constant\ConstantStringType('environment'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('queuedTimeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('webhook'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('badge'),
                    new \PHPStan\Type\Constant\ConstantStringType('logsConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('fileSystemLocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildBatchConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('concurrentBuildLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('projectVisibility'),
                    new \PHPStan\Type\Constant\ConstantStringType('publicProjectAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceAccessRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoRetryLimit'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                        new \PHPStan\Type\Constant\ConstantStringType('auth'),
                        new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('context'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                            new \PHPStan\Type\Constant\ConstantStringType('auth'),
                            new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('context'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('path'),
                        new \PHPStan\Type\Constant\ConstantStringType('namespaceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('packaging'),
                        new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_ID'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                            new \PHPStan\Type\Constant\ConstantStringType('namespaceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('packaging'),
                            new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_ID'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('modes'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_CACHE'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_DOCKER_LAYER_CACHE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_SOURCE_CACHE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_CUSTOM_CACHE'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleet'),
                        new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                        new \PHPStan\Type\Constant\ConstantStringType('privilegedMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('registryCredential'),
                        new \PHPStan\Type\Constant\ConstantStringType('imagePullCredentialsType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_GPU_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_LAMBDA_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_LAMBDA_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAC_ARM'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_SMALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_LARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_2XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_1GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_2GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_4GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_8GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_10GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTRIBUTE_BASED_COMPUTE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vCpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('disk'),
                            new \PHPStan\Type\Constant\ConstantStringType('machineType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GENERAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('NVME'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fleetArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARAMETER_STORE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credential'),
                            new \PHPStan\Type\Constant\ConstantStringType('credentialProvider'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CODEBUILD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ROLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                        new \PHPStan\Type\Constant\ConstantStringType('payloadUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('secret'),
                        new \PHPStan\Type\Constant\ConstantStringType('branchFilter'),
                        new \PHPStan\Type\Constant\ConstantStringType('filterGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildType'),
                        new \PHPStan\Type\Constant\ConstantStringType('manualCreation'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModifiedSecret'),
                        new \PHPStan\Type\Constant\ConstantStringType('scopeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                                    new \PHPStan\Type\Constant\ConstantStringType('excludeMatchedPattern'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BASE_REF'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD_REF'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTOR_ACCOUNT_ID'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FILE_PATH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('COMMIT_MESSAGE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_NAME'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TAG_NAME'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RELEASE_NAME'),
                                        new \PHPStan\Type\Constant\ConstantStringType('REPOSITORY_NAME'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ])),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_BATCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNER_BUILDKITE_BUILD'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('domain'),
                            new \PHPStan\Type\Constant\ConstantStringType('scope'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ORGANIZATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB_GLOBAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB_GROUP'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('badgeEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('badgeRequestUrl'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogs'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Logs'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('streamName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('mountPoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('EFS'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('combineArtifacts'),
                        new \PHPStan\Type\Constant\ConstantStringType('restrictions'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutInMins'),
                        new \PHPStan\Type\Constant\ConstantStringType('batchReportMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('maximumBuildsAllowed'),
                            new \PHPStan\Type\Constant\ConstantStringType('computeTypesAllowed'),
                            new \PHPStan\Type\Constant\ConstantStringType('fleetsAllowed'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REPORT_INDIVIDUAL_BUILDS'),
                            new \PHPStan\Type\Constant\ConstantStringType('REPORT_AGGREGATED_BATCH'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_READ'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function createReportGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('reportGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('exportConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CODE_COVERAGE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('exportConfigType'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Destination'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_EXPORT'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwner'),
                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                            new \PHPStan\Type\Constant\ConstantStringType('packaging'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createWebhook(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('webhook'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                    new \PHPStan\Type\Constant\ConstantStringType('payloadUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('secret'),
                    new \PHPStan\Type\Constant\ConstantStringType('branchFilter'),
                    new \PHPStan\Type\Constant\ConstantStringType('filterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildType'),
                    new \PHPStan\Type\Constant\ConstantStringType('manualCreation'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedSecret'),
                    new \PHPStan\Type\Constant\ConstantStringType('scopeConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                                new \PHPStan\Type\Constant\ConstantStringType('excludeMatchedPattern'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BASE_REF'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD_REF'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTOR_ACCOUNT_ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FILE_PATH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMMIT_MESSAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TAG_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RELEASE_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REPOSITORY_NAME'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_BATCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNER_BUILDKITE_BUILD'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('domain'),
                        new \PHPStan\Type\Constant\ConstantStringType('scope'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_GLOBAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB_GROUP'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteBuildBatch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('buildsDeleted'),
                new \PHPStan\Type\Constant\ConstantStringType('buildsNotDeleted'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function deleteFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteReportGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSourceCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteWebhook(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeCodeCoverages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('codeCoverages'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('reportARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('lineCoveragePercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('linesCovered'),
                        new \PHPStan\Type\Constant\ConstantStringType('linesMissed'),
                        new \PHPStan\Type\Constant\ConstantStringType('branchCoveragePercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('branchesCovered'),
                        new \PHPStan\Type\Constant\ConstantStringType('branchesMissed'),
                        new \PHPStan\Type\Constant\ConstantStringType('expired'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeTestCases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('testCases'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('reportArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('testRawDataPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('durationInNanoSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                        new \PHPStan\Type\Constant\ConstantStringType('expired'),
                        new \PHPStan\Type\Constant\ConstantStringType('testSuiteName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getReportGroupTrend(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('stats'),
                new \PHPStan\Type\Constant\ConstantStringType('rawData'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('average'),
                    new \PHPStan\Type\Constant\ConstantStringType('max'),
                    new \PHPStan\Type\Constant\ConstantStringType('min'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('reportArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('data'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function importSourceCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function invalidateProjectCache(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function listBuildBatches(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ids'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBuildBatchesForProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ids'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBuilds(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ids'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBuildsForProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ids'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCuratedEnvironmentImages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('platforms'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('platform'),
                        new \PHPStan\Type\Constant\ConstantStringType('languages'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEBIAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX'),
                            new \PHPStan\Type\Constant\ConstantStringType('UBUNTU'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('language'),
                                new \PHPStan\Type\Constant\ConstantStringType('images'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('JAVA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PYTHON'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NODE_JS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RUBY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GOLANG'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOCKER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ANDROID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOTNET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BASE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PHP'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                                        new \PHPStan\Type\Constant\ConstantStringType('versions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listFleets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('fleets'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listProjects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('projects'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listReportGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('reportGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listReports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('reports'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listReportsForReportGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('reports'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listSharedProjects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('projects'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listSharedReportGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('reportGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listSourceCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sourceCredentialsInfos'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('serverType'),
                        new \PHPStan\Type\Constant\ConstantStringType('authType'),
                        new \PHPStan\Type\Constant\ConstantStringType('resource'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('BASIC_AUTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('PERSONAL_ACCESS_TOKEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function putResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function retryBuild(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('build'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentPhase'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolvedSourceVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('projectName'),
                    new \PHPStan\Type\Constant\ConstantStringType('phases'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondarySources'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondarySourceVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('artifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondaryArtifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('cache'),
                    new \PHPStan\Type\Constant\ConstantStringType('environment'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('logs'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('queuedTimeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildComplete'),
                    new \PHPStan\Type\Constant\ConstantStringType('initiator'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterface'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('exportedEnvironmentVariables'),
                    new \PHPStan\Type\Constant\ConstantStringType('reportArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('fileSystemLocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('debugSession'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildBatchArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoRetryConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('phaseType'),
                            new \PHPStan\Type\Constant\ConstantStringType('phaseStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('durationInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('contexts'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOWNLOAD_SOURCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSTALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('PRE_BUILD'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD'),
                                new \PHPStan\Type\Constant\ConstantStringType('POST_BUILD'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ARTIFACTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FINALIZING'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                        new \PHPStan\Type\Constant\ConstantStringType('auth'),
                        new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('context'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                            new \PHPStan\Type\Constant\ConstantStringType('auth'),
                            new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('context'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('sha256sum'),
                        new \PHPStan\Type\Constant\ConstantStringType('md5sum'),
                        new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('sha256sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('md5sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('modes'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_CACHE'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_DOCKER_LAYER_CACHE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_SOURCE_CACHE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_CUSTOM_CACHE'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleet'),
                        new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                        new \PHPStan\Type\Constant\ConstantStringType('privilegedMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('registryCredential'),
                        new \PHPStan\Type\Constant\ConstantStringType('imagePullCredentialsType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_GPU_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_LAMBDA_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_LAMBDA_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAC_ARM'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_SMALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_LARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_2XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_1GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_2GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_4GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_8GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_10GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTRIBUTE_BASED_COMPUTE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vCpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('disk'),
                            new \PHPStan\Type\Constant\ConstantStringType('machineType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GENERAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('NVME'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fleetArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARAMETER_STORE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credential'),
                            new \PHPStan\Type\Constant\ConstantStringType('credentialProvider'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CODEBUILD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ROLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('streamName'),
                        new \PHPStan\Type\Constant\ConstantStringType('deepLink'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3DeepLink'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3LogsArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogs'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Logs'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('streamName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('mountPoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('EFS'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sessionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('sessionTarget'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('autoRetryLimit'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoRetryNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('nextAutoRetry'),
                        new \PHPStan\Type\Constant\ConstantStringType('previousAutoRetry'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function retryBuildBatch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('buildBatch'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentPhase'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildBatchStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolvedSourceVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('projectName'),
                    new \PHPStan\Type\Constant\ConstantStringType('phases'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondarySources'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondarySourceVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('artifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondaryArtifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('cache'),
                    new \PHPStan\Type\Constant\ConstantStringType('environment'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('logConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildTimeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('queuedTimeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('complete'),
                    new \PHPStan\Type\Constant\ConstantStringType('initiator'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildBatchNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('fileSystemLocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildBatchConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('debugSessionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('reportArns'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('phaseType'),
                            new \PHPStan\Type\Constant\ConstantStringType('phaseStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('durationInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('contexts'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOWNLOAD_BATCHSPEC'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMBINE_ARTIFACTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                        new \PHPStan\Type\Constant\ConstantStringType('auth'),
                        new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('context'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                            new \PHPStan\Type\Constant\ConstantStringType('auth'),
                            new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('context'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('sha256sum'),
                        new \PHPStan\Type\Constant\ConstantStringType('md5sum'),
                        new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('sha256sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('md5sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('modes'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_CACHE'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_DOCKER_LAYER_CACHE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_SOURCE_CACHE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_CUSTOM_CACHE'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleet'),
                        new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                        new \PHPStan\Type\Constant\ConstantStringType('privilegedMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('registryCredential'),
                        new \PHPStan\Type\Constant\ConstantStringType('imagePullCredentialsType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_GPU_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_LAMBDA_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_LAMBDA_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAC_ARM'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_SMALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_LARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_2XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_1GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_2GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_4GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_8GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_10GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTRIBUTE_BASED_COMPUTE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vCpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('disk'),
                            new \PHPStan\Type\Constant\ConstantStringType('machineType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GENERAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('NVME'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fleetArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARAMETER_STORE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credential'),
                            new \PHPStan\Type\Constant\ConstantStringType('credentialProvider'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CODEBUILD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ROLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogs'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Logs'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('streamName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('mountPoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('EFS'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('combineArtifacts'),
                        new \PHPStan\Type\Constant\ConstantStringType('restrictions'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutInMins'),
                        new \PHPStan\Type\Constant\ConstantStringType('batchReportMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('maximumBuildsAllowed'),
                            new \PHPStan\Type\Constant\ConstantStringType('computeTypesAllowed'),
                            new \PHPStan\Type\Constant\ConstantStringType('fleetsAllowed'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REPORT_INDIVIDUAL_BUILDS'),
                            new \PHPStan\Type\Constant\ConstantStringType('REPORT_AGGREGATED_BATCH'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('dependsOn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ignoreFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('currentBuildSummary'),
                            new \PHPStan\Type\Constant\ConstantStringType('priorBuildSummaryList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('requestedOn'),
                                new \PHPStan\Type\Constant\ConstantStringType('buildStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('primaryArtifact'),
                                new \PHPStan\Type\Constant\ConstantStringType('secondaryArtifacts'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('requestedOn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('buildStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('primaryArtifact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('secondaryArtifacts'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function startBuild(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('build'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentPhase'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolvedSourceVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('projectName'),
                    new \PHPStan\Type\Constant\ConstantStringType('phases'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondarySources'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondarySourceVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('artifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondaryArtifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('cache'),
                    new \PHPStan\Type\Constant\ConstantStringType('environment'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('logs'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('queuedTimeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildComplete'),
                    new \PHPStan\Type\Constant\ConstantStringType('initiator'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterface'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('exportedEnvironmentVariables'),
                    new \PHPStan\Type\Constant\ConstantStringType('reportArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('fileSystemLocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('debugSession'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildBatchArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoRetryConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('phaseType'),
                            new \PHPStan\Type\Constant\ConstantStringType('phaseStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('durationInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('contexts'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOWNLOAD_SOURCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSTALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('PRE_BUILD'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD'),
                                new \PHPStan\Type\Constant\ConstantStringType('POST_BUILD'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ARTIFACTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FINALIZING'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                        new \PHPStan\Type\Constant\ConstantStringType('auth'),
                        new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('context'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                            new \PHPStan\Type\Constant\ConstantStringType('auth'),
                            new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('context'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('sha256sum'),
                        new \PHPStan\Type\Constant\ConstantStringType('md5sum'),
                        new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('sha256sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('md5sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('modes'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_CACHE'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_DOCKER_LAYER_CACHE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_SOURCE_CACHE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_CUSTOM_CACHE'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleet'),
                        new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                        new \PHPStan\Type\Constant\ConstantStringType('privilegedMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('registryCredential'),
                        new \PHPStan\Type\Constant\ConstantStringType('imagePullCredentialsType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_GPU_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_LAMBDA_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_LAMBDA_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAC_ARM'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_SMALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_LARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_2XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_1GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_2GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_4GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_8GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_10GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTRIBUTE_BASED_COMPUTE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vCpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('disk'),
                            new \PHPStan\Type\Constant\ConstantStringType('machineType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GENERAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('NVME'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fleetArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARAMETER_STORE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credential'),
                            new \PHPStan\Type\Constant\ConstantStringType('credentialProvider'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CODEBUILD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ROLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('streamName'),
                        new \PHPStan\Type\Constant\ConstantStringType('deepLink'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3DeepLink'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3LogsArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogs'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Logs'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('streamName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('mountPoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('EFS'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sessionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('sessionTarget'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('autoRetryLimit'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoRetryNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('nextAutoRetry'),
                        new \PHPStan\Type\Constant\ConstantStringType('previousAutoRetry'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function startBuildBatch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('buildBatch'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentPhase'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildBatchStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolvedSourceVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('projectName'),
                    new \PHPStan\Type\Constant\ConstantStringType('phases'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondarySources'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondarySourceVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('artifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondaryArtifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('cache'),
                    new \PHPStan\Type\Constant\ConstantStringType('environment'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('logConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildTimeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('queuedTimeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('complete'),
                    new \PHPStan\Type\Constant\ConstantStringType('initiator'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildBatchNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('fileSystemLocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildBatchConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('debugSessionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('reportArns'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('phaseType'),
                            new \PHPStan\Type\Constant\ConstantStringType('phaseStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('durationInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('contexts'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOWNLOAD_BATCHSPEC'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMBINE_ARTIFACTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                        new \PHPStan\Type\Constant\ConstantStringType('auth'),
                        new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('context'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                            new \PHPStan\Type\Constant\ConstantStringType('auth'),
                            new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('context'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('sha256sum'),
                        new \PHPStan\Type\Constant\ConstantStringType('md5sum'),
                        new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('sha256sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('md5sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('modes'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_CACHE'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_DOCKER_LAYER_CACHE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_SOURCE_CACHE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_CUSTOM_CACHE'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleet'),
                        new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                        new \PHPStan\Type\Constant\ConstantStringType('privilegedMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('registryCredential'),
                        new \PHPStan\Type\Constant\ConstantStringType('imagePullCredentialsType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_GPU_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_LAMBDA_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_LAMBDA_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAC_ARM'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_SMALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_LARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_2XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_1GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_2GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_4GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_8GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_10GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTRIBUTE_BASED_COMPUTE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vCpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('disk'),
                            new \PHPStan\Type\Constant\ConstantStringType('machineType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GENERAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('NVME'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fleetArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARAMETER_STORE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credential'),
                            new \PHPStan\Type\Constant\ConstantStringType('credentialProvider'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CODEBUILD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ROLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogs'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Logs'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('streamName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('mountPoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('EFS'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('combineArtifacts'),
                        new \PHPStan\Type\Constant\ConstantStringType('restrictions'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutInMins'),
                        new \PHPStan\Type\Constant\ConstantStringType('batchReportMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('maximumBuildsAllowed'),
                            new \PHPStan\Type\Constant\ConstantStringType('computeTypesAllowed'),
                            new \PHPStan\Type\Constant\ConstantStringType('fleetsAllowed'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REPORT_INDIVIDUAL_BUILDS'),
                            new \PHPStan\Type\Constant\ConstantStringType('REPORT_AGGREGATED_BATCH'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('dependsOn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ignoreFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('currentBuildSummary'),
                            new \PHPStan\Type\Constant\ConstantStringType('priorBuildSummaryList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('requestedOn'),
                                new \PHPStan\Type\Constant\ConstantStringType('buildStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('primaryArtifact'),
                                new \PHPStan\Type\Constant\ConstantStringType('secondaryArtifacts'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('requestedOn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('buildStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('primaryArtifact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('secondaryArtifacts'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function stopBuild(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('build'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentPhase'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolvedSourceVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('projectName'),
                    new \PHPStan\Type\Constant\ConstantStringType('phases'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondarySources'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondarySourceVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('artifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondaryArtifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('cache'),
                    new \PHPStan\Type\Constant\ConstantStringType('environment'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('logs'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('queuedTimeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildComplete'),
                    new \PHPStan\Type\Constant\ConstantStringType('initiator'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterface'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('exportedEnvironmentVariables'),
                    new \PHPStan\Type\Constant\ConstantStringType('reportArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('fileSystemLocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('debugSession'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildBatchArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoRetryConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('phaseType'),
                            new \PHPStan\Type\Constant\ConstantStringType('phaseStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('durationInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('contexts'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOWNLOAD_SOURCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INSTALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('PRE_BUILD'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD'),
                                new \PHPStan\Type\Constant\ConstantStringType('POST_BUILD'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPLOAD_ARTIFACTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FINALIZING'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                        new \PHPStan\Type\Constant\ConstantStringType('auth'),
                        new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('context'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                            new \PHPStan\Type\Constant\ConstantStringType('auth'),
                            new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('context'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('sha256sum'),
                        new \PHPStan\Type\Constant\ConstantStringType('md5sum'),
                        new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('sha256sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('md5sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('modes'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_CACHE'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_DOCKER_LAYER_CACHE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_SOURCE_CACHE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_CUSTOM_CACHE'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleet'),
                        new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                        new \PHPStan\Type\Constant\ConstantStringType('privilegedMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('registryCredential'),
                        new \PHPStan\Type\Constant\ConstantStringType('imagePullCredentialsType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_GPU_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_LAMBDA_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_LAMBDA_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAC_ARM'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_SMALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_LARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_2XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_1GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_2GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_4GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_8GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_10GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTRIBUTE_BASED_COMPUTE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vCpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('disk'),
                            new \PHPStan\Type\Constant\ConstantStringType('machineType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GENERAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('NVME'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fleetArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARAMETER_STORE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credential'),
                            new \PHPStan\Type\Constant\ConstantStringType('credentialProvider'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CODEBUILD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ROLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('streamName'),
                        new \PHPStan\Type\Constant\ConstantStringType('deepLink'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3DeepLink'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3LogsArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogs'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Logs'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('streamName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('mountPoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('EFS'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sessionEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('sessionTarget'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('autoRetryLimit'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoRetryNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('nextAutoRetry'),
                        new \PHPStan\Type\Constant\ConstantStringType('previousAutoRetry'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function stopBuildBatch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('buildBatch'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentPhase'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildBatchStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolvedSourceVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('projectName'),
                    new \PHPStan\Type\Constant\ConstantStringType('phases'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondarySources'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondarySourceVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('artifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondaryArtifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('cache'),
                    new \PHPStan\Type\Constant\ConstantStringType('environment'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('logConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildTimeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('queuedTimeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('complete'),
                    new \PHPStan\Type\Constant\ConstantStringType('initiator'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildBatchNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('fileSystemLocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildBatchConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('debugSessionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('reportArns'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('phaseType'),
                            new \PHPStan\Type\Constant\ConstantStringType('phaseStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('durationInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('contexts'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOWNLOAD_BATCHSPEC'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMBINE_ARTIFACTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                        new \PHPStan\Type\Constant\ConstantStringType('auth'),
                        new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('context'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                            new \PHPStan\Type\Constant\ConstantStringType('auth'),
                            new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('context'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('sha256sum'),
                        new \PHPStan\Type\Constant\ConstantStringType('md5sum'),
                        new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('sha256sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('md5sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('modes'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_CACHE'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_DOCKER_LAYER_CACHE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_SOURCE_CACHE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_CUSTOM_CACHE'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleet'),
                        new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                        new \PHPStan\Type\Constant\ConstantStringType('privilegedMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('registryCredential'),
                        new \PHPStan\Type\Constant\ConstantStringType('imagePullCredentialsType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_GPU_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_LAMBDA_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_LAMBDA_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAC_ARM'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_SMALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_LARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_2XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_1GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_2GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_4GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_8GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_10GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTRIBUTE_BASED_COMPUTE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vCpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('disk'),
                            new \PHPStan\Type\Constant\ConstantStringType('machineType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GENERAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('NVME'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fleetArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARAMETER_STORE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credential'),
                            new \PHPStan\Type\Constant\ConstantStringType('credentialProvider'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CODEBUILD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ROLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogs'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Logs'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('streamName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('mountPoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('EFS'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('combineArtifacts'),
                        new \PHPStan\Type\Constant\ConstantStringType('restrictions'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutInMins'),
                        new \PHPStan\Type\Constant\ConstantStringType('batchReportMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('maximumBuildsAllowed'),
                            new \PHPStan\Type\Constant\ConstantStringType('computeTypesAllowed'),
                            new \PHPStan\Type\Constant\ConstantStringType('fleetsAllowed'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REPORT_INDIVIDUAL_BUILDS'),
                            new \PHPStan\Type\Constant\ConstantStringType('REPORT_AGGREGATED_BATCH'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('dependsOn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ignoreFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('currentBuildSummary'),
                            new \PHPStan\Type\Constant\ConstantStringType('priorBuildSummaryList'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('requestedOn'),
                                new \PHPStan\Type\Constant\ConstantStringType('buildStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('primaryArtifact'),
                                new \PHPStan\Type\Constant\ConstantStringType('secondaryArtifacts'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('requestedOn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('buildStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('primaryArtifact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('secondaryArtifacts'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FAULT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                                        new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                                new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('fleet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('baseCapacity'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('scalingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('overflowBehavior'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('proxyConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageId'),
                    new \PHPStan\Type\Constant\ConstantStringType('fleetServiceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('context'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTION_REQUIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_CAPACITY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CONTAINER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINUX_CONTAINER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINUX_GPU_CONTAINER'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARM_CONTAINER'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_CONTAINER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINUX_LAMBDA_CONTAINER'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARM_LAMBDA_CONTAINER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINUX_EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARM_EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAC_ARM'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_SMALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_LARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_XLARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_2XLARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_1GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_2GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_4GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_8GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_10GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('ATTRIBUTE_BASED_COMPUTE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vCpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('disk'),
                        new \PHPStan\Type\Constant\ConstantStringType('machineType'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GENERAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('NVME'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('scalingType'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetTrackingScalingConfigs'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('desiredCapacity'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('TARGET_TRACKING_SCALING'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metricType'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetValue'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('FLEET_UTILIZATION_RATE'),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('defaultBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('orderedProxyRules'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALLOW_ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DENY_ALL'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('effect'),
                                new \PHPStan\Type\Constant\ConstantStringType('entities'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DOMAIN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IP'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('project'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondarySources'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondarySourceVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('artifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('secondaryArtifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('cache'),
                    new \PHPStan\Type\Constant\ConstantStringType('environment'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('queuedTimeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('webhook'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('badge'),
                    new \PHPStan\Type\Constant\ConstantStringType('logsConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('fileSystemLocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildBatchConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('concurrentBuildLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('projectVisibility'),
                    new \PHPStan\Type\Constant\ConstantStringType('publicProjectAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceAccessRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoRetryLimit'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                        new \PHPStan\Type\Constant\ConstantStringType('auth'),
                        new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('context'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitCloneDepth'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitSubmodulesConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildspec'),
                            new \PHPStan\Type\Constant\ConstantStringType('auth'),
                            new \PHPStan\Type\Constant\ConstantStringType('reportBuildStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('buildStatusConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('insecureSsl'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CODECOMMIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB_SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_SOURCE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('fetchSubmodules'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OAUTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CODECONNECTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('context'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetUrl'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sourceIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('path'),
                        new \PHPStan\Type\Constant\ConstantStringType('namespaceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('packaging'),
                        new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_ID'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                            new \PHPStan\Type\Constant\ConstantStringType('namespaceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('packaging'),
                            new \PHPStan\Type\Constant\ConstantStringType('overrideArtifactName'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('artifactIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CODEPIPELINE'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_ARTIFACTS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('BUILD_ID'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('modes'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_CACHE'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_DOCKER_LAYER_CACHE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_SOURCE_CACHE'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCAL_CUSTOM_CACHE'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('fleet'),
                        new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                        new \PHPStan\Type\Constant\ConstantStringType('privilegedMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('registryCredential'),
                        new \PHPStan\Type\Constant\ConstantStringType('imagePullCredentialsType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_GPU_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_LAMBDA_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_LAMBDA_CONTAINER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARM_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAC_ARM'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_SMALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_LARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_GENERAL1_2XLARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_1GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_2GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_4GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_8GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_LAMBDA_10GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTRIBUTE_BASED_COMPUTE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vCpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('disk'),
                            new \PHPStan\Type\Constant\ConstantStringType('machineType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GENERAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('NVME'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fleetArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARAMETER_STORE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('credential'),
                            new \PHPStan\Type\Constant\ConstantStringType('credentialProvider'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('SECRETS_MANAGER'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CODEBUILD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ROLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                        new \PHPStan\Type\Constant\ConstantStringType('payloadUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('secret'),
                        new \PHPStan\Type\Constant\ConstantStringType('branchFilter'),
                        new \PHPStan\Type\Constant\ConstantStringType('filterGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildType'),
                        new \PHPStan\Type\Constant\ConstantStringType('manualCreation'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastModifiedSecret'),
                        new \PHPStan\Type\Constant\ConstantStringType('scopeConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                                    new \PHPStan\Type\Constant\ConstantStringType('excludeMatchedPattern'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BASE_REF'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD_REF'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTOR_ACCOUNT_ID'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FILE_PATH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('COMMIT_MESSAGE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_NAME'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TAG_NAME'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RELEASE_NAME'),
                                        new \PHPStan\Type\Constant\ConstantStringType('REPOSITORY_NAME'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ])),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILD_BATCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNER_BUILDKITE_BUILD'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('domain'),
                            new \PHPStan\Type\Constant\ConstantStringType('scope'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ORGANIZATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB_GLOBAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITLAB_GROUP'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('badgeEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('badgeRequestUrl'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogs'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Logs'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('streamName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwnerAccess'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('READ_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('location'),
                            new \PHPStan\Type\Constant\ConstantStringType('mountPoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('mountOptions'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('EFS'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('combineArtifacts'),
                        new \PHPStan\Type\Constant\ConstantStringType('restrictions'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutInMins'),
                        new \PHPStan\Type\Constant\ConstantStringType('batchReportMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('maximumBuildsAllowed'),
                            new \PHPStan\Type\Constant\ConstantStringType('computeTypesAllowed'),
                            new \PHPStan\Type\Constant\ConstantStringType('fleetsAllowed'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REPORT_INDIVIDUAL_BUILDS'),
                            new \PHPStan\Type\Constant\ConstantStringType('REPORT_AGGREGATED_BATCH'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_READ'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function updateProjectVisibility(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('projectArn'),
                new \PHPStan\Type\Constant\ConstantStringType('publicProjectAlias'),
                new \PHPStan\Type\Constant\ConstantStringType('projectVisibility'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_READ'),
                    new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                ]),
            ]),
        ]);
    }
    private function updateReportGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('reportGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('exportConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('CODE_COVERAGE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('exportConfigType'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Destination'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_EXPORT'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucketOwner'),
                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                            new \PHPStan\Type\Constant\ConstantStringType('packaging'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionDisabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateWebhook(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('webhook'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('url'),
                    new \PHPStan\Type\Constant\ConstantStringType('payloadUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('secret'),
                    new \PHPStan\Type\Constant\ConstantStringType('branchFilter'),
                    new \PHPStan\Type\Constant\ConstantStringType('filterGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildType'),
                    new \PHPStan\Type\Constant\ConstantStringType('manualCreation'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedSecret'),
                    new \PHPStan\Type\Constant\ConstantStringType('scopeConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                                new \PHPStan\Type\Constant\ConstantStringType('excludeMatchedPattern'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BASE_REF'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD_REF'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTOR_ACCOUNT_ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FILE_PATH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMMIT_MESSAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TAG_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RELEASE_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REPOSITORY_NAME'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD_BATCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNER_BUILDKITE_BUILD'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('domain'),
                        new \PHPStan\Type\Constant\ConstantStringType('scope'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_GLOBAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITLAB_GROUP'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}