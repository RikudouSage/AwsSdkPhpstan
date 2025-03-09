<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CodeDeployClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CodeDeploy\CodeDeployClient>
     */
    public function getClass(): string
    {
        return \Aws\CodeDeploy\CodeDeployClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addTagsToOnPremisesInstances',
            'batchGetApplicationRevisions',
            'batchGetApplications',
            'batchGetDeploymentGroups',
            'batchGetDeploymentInstances',
            'batchGetDeploymentTargets',
            'batchGetDeployments',
            'batchGetOnPremisesInstances',
            'continueDeployment',
            'createApplication',
            'createDeployment',
            'createDeploymentConfig',
            'createDeploymentGroup',
            'deleteApplication',
            'deleteDeploymentConfig',
            'deleteDeploymentGroup',
            'deleteGitHubAccountToken',
            'deleteResourcesByExternalId',
            'deregisterOnPremisesInstance',
            'getApplication',
            'getApplicationRevision',
            'getDeployment',
            'getDeploymentConfig',
            'getDeploymentGroup',
            'getDeploymentInstance',
            'getDeploymentTarget',
            'getOnPremisesInstance',
            'listApplicationRevisions',
            'listApplications',
            'listDeploymentConfigs',
            'listDeploymentGroups',
            'listDeploymentInstances',
            'listDeploymentTargets',
            'listDeployments',
            'listGitHubAccountTokenNames',
            'listOnPremisesInstances',
            'listTagsForResource',
            'putLifecycleEventHookExecutionStatus',
            'registerApplicationRevision',
            'registerOnPremisesInstance',
            'removeTagsFromOnPremisesInstances',
            'skipWaitTimeForInstanceTermination',
            'stopDeployment',
            'tagResource',
            'untagResource',
            'updateApplication',
            'updateDeploymentGroup',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addTagsToOnPremisesInstances' => $this->addTagsToOnPremisesInstances(),
            'batchGetApplicationRevisions' => $this->batchGetApplicationRevisions(),
            'batchGetApplications' => $this->batchGetApplications(),
            'batchGetDeploymentGroups' => $this->batchGetDeploymentGroups(),
            'batchGetDeploymentInstances' => $this->batchGetDeploymentInstances(),
            'batchGetDeploymentTargets' => $this->batchGetDeploymentTargets(),
            'batchGetDeployments' => $this->batchGetDeployments(),
            'batchGetOnPremisesInstances' => $this->batchGetOnPremisesInstances(),
            'continueDeployment' => $this->continueDeployment(),
            'createApplication' => $this->createApplication(),
            'createDeployment' => $this->createDeployment(),
            'createDeploymentConfig' => $this->createDeploymentConfig(),
            'createDeploymentGroup' => $this->createDeploymentGroup(),
            'deleteApplication' => $this->deleteApplication(),
            'deleteDeploymentConfig' => $this->deleteDeploymentConfig(),
            'deleteDeploymentGroup' => $this->deleteDeploymentGroup(),
            'deleteGitHubAccountToken' => $this->deleteGitHubAccountToken(),
            'deleteResourcesByExternalId' => $this->deleteResourcesByExternalId(),
            'deregisterOnPremisesInstance' => $this->deregisterOnPremisesInstance(),
            'getApplication' => $this->getApplication(),
            'getApplicationRevision' => $this->getApplicationRevision(),
            'getDeployment' => $this->getDeployment(),
            'getDeploymentConfig' => $this->getDeploymentConfig(),
            'getDeploymentGroup' => $this->getDeploymentGroup(),
            'getDeploymentInstance' => $this->getDeploymentInstance(),
            'getDeploymentTarget' => $this->getDeploymentTarget(),
            'getOnPremisesInstance' => $this->getOnPremisesInstance(),
            'listApplicationRevisions' => $this->listApplicationRevisions(),
            'listApplications' => $this->listApplications(),
            'listDeploymentConfigs' => $this->listDeploymentConfigs(),
            'listDeploymentGroups' => $this->listDeploymentGroups(),
            'listDeploymentInstances' => $this->listDeploymentInstances(),
            'listDeploymentTargets' => $this->listDeploymentTargets(),
            'listDeployments' => $this->listDeployments(),
            'listGitHubAccountTokenNames' => $this->listGitHubAccountTokenNames(),
            'listOnPremisesInstances' => $this->listOnPremisesInstances(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putLifecycleEventHookExecutionStatus' => $this->putLifecycleEventHookExecutionStatus(),
            'registerApplicationRevision' => $this->registerApplicationRevision(),
            'registerOnPremisesInstance' => $this->registerOnPremisesInstance(),
            'removeTagsFromOnPremisesInstances' => $this->removeTagsFromOnPremisesInstances(),
            'skipWaitTimeForInstanceTermination' => $this->skipWaitTimeForInstanceTermination(),
            'stopDeployment' => $this->stopDeployment(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateApplication' => $this->updateApplication(),
            'updateDeploymentGroup' => $this->updateDeploymentGroup(),
        };
    }
    private function addTagsToOnPremisesInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function batchGetApplicationRevisions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationName'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('revisions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('revisionLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('genericRevisionInfo'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('revisionType'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitHubLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('string'),
                            new \PHPStan\Type\Constant\ConstantStringType('appSpecContent'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('AppSpecContent'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('bundleType'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                                new \PHPStan\Type\Constant\ConstantStringType('eTag'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('tar'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tgz'),
                                    new \PHPStan\Type\Constant\ConstantStringType('zip'),
                                    new \PHPStan\Type\Constant\ConstantStringType('YAML'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('repository'),
                                new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                                new \PHPStan\Type\Constant\ConstantStringType('sha256'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                                new \PHPStan\Type\Constant\ConstantStringType('sha256'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('deploymentGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('firstUsedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUsedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('registerTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchGetApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationsInfo'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('applicationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('applicationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('linkedToGitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitHubAccountName'),
                        new \PHPStan\Type\Constant\ConstantStringType('computePlatform'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Server'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchGetDeploymentGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deploymentGroupsInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('applicationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentConfigName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2TagFilters'),
                        new \PHPStan\Type\Constant\ConstantStringType('onPremisesInstanceTagFilters'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('triggerConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('alarmConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoRollbackConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentStyle'),
                        new \PHPStan\Type\Constant\ConstantStringType('outdatedInstancesStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('blueGreenDeploymentConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('loadBalancerInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastSuccessfulDeployment'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeployment'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2TagSet'),
                        new \PHPStan\Type\Constant\ConstantStringType('onPremisesTagSet'),
                        new \PHPStan\Type\Constant\ConstantStringType('computePlatform'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecsServices'),
                        new \PHPStan\Type\Constant\ConstantStringType('terminationHookEnabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KEY_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VALUE_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KEY_AND_VALUE'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KEY_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VALUE_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KEY_AND_VALUE'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('hook'),
                                new \PHPStan\Type\Constant\ConstantStringType('terminationHook'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('revisionType'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitHubLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('string'),
                            new \PHPStan\Type\Constant\ConstantStringType('appSpecContent'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('AppSpecContent'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('bundleType'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                                new \PHPStan\Type\Constant\ConstantStringType('eTag'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('tar'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tgz'),
                                    new \PHPStan\Type\Constant\ConstantStringType('zip'),
                                    new \PHPStan\Type\Constant\ConstantStringType('YAML'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('repository'),
                                new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                                new \PHPStan\Type\Constant\ConstantStringType('sha256'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                                new \PHPStan\Type\Constant\ConstantStringType('sha256'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('triggerName'),
                                new \PHPStan\Type\Constant\ConstantStringType('triggerTargetArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('triggerEvents'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DeploymentStart'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DeploymentSuccess'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DeploymentFailure'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DeploymentStop'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DeploymentRollback'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DeploymentReady'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InstanceStart'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InstanceSuccess'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InstanceFailure'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InstanceReady'),
                                    ]),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ignorePollAlarmFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('alarms'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('events'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_STOP_ON_ALARM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_STOP_ON_REQUEST'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('deploymentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('deploymentOption'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PLACE'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLUE_GREEN'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('WITH_TRAFFIC_CONTROL'),
                                new \PHPStan\Type\Constant\ConstantStringType('WITHOUT_TRAFFIC_CONTROL'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IGNORE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('terminateBlueInstancesOnDeploymentSuccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('deploymentReadyOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('greenFleetProvisioningOption'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                new \PHPStan\Type\Constant\ConstantStringType('terminationWaitTimeInMinutes'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KEEP_ALIVE'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('actionOnTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('waitTimeInMinutes'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CONTINUE_DEPLOYMENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOP_DEPLOYMENT'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DISCOVER_EXISTING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COPY_AUTO_SCALING_GROUP'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('elbInfoList'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetGroupInfoList'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetGroupPairInfoList'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('targetGroups'),
                                    new \PHPStan\Type\Constant\ConstantStringType('prodTrafficRoute'),
                                    new \PHPStan\Type\Constant\ConstantStringType('testTrafficRoute'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('listenerArns'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('listenerArns'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Created'),
                                new \PHPStan\Type\Constant\ConstantStringType('Queued'),
                                new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                new \PHPStan\Type\Constant\ConstantStringType('Baking'),
                                new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Created'),
                                new \PHPStan\Type\Constant\ConstantStringType('Queued'),
                                new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                new \PHPStan\Type\Constant\ConstantStringType('Baking'),
                                new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ec2TagSetList'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_ONLY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VALUE_ONLY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_AND_VALUE'),
                                        ]),
                                    ]),
                                ])),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('onPremisesTagSetList'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_ONLY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VALUE_ONLY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_AND_VALUE'),
                                        ]),
                                    ]),
                                ])),
                            ])),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Server'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function batchGetDeploymentInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('instancesSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lifecycleEvents'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('lifecycleEventName'),
                                new \PHPStan\Type\Constant\ConstantStringType('diagnostics'),
                                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('scriptName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                                    new \PHPStan\Type\Constant\ConstantStringType('logTail'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptMissing'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptNotExecutable'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptTimedOut'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptFailed'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UnknownError'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                            new \PHPStan\Type\Constant\ConstantStringType('Green'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function batchGetDeploymentTargets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deploymentTargets'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentTargetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceTarget'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaTarget'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecsTarget'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloudFormationTarget'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceTarget'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaTarget'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECSTarget'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFormationTarget'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('lifecycleEvents'),
                            new \PHPStan\Type\Constant\ConstantStringType('instanceLabel'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                                new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('lifecycleEventName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('diagnostics'),
                                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('scriptName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                                        new \PHPStan\Type\Constant\ConstantStringType('logTail'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Success'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScriptMissing'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScriptNotExecutable'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScriptTimedOut'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScriptFailed'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UnknownError'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                                new \PHPStan\Type\Constant\ConstantStringType('Green'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('lifecycleEvents'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionInfo'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                                new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('lifecycleEventName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('diagnostics'),
                                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('scriptName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                                        new \PHPStan\Type\Constant\ConstantStringType('logTail'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Success'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScriptMissing'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScriptNotExecutable'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScriptTimedOut'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScriptFailed'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UnknownError'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('functionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('functionAlias'),
                                new \PHPStan\Type\Constant\ConstantStringType('currentVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetVersionWeight'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('lifecycleEvents'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('taskSetsInfo'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('lifecycleEventName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('diagnostics'),
                                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('scriptName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                                        new \PHPStan\Type\Constant\ConstantStringType('logTail'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Success'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScriptMissing'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScriptNotExecutable'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScriptTimedOut'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScriptFailed'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UnknownError'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                                new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('identifer'),
                                    new \PHPStan\Type\Constant\ConstantStringType('desiredCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('pendingCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('runningCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                                    new \PHPStan\Type\Constant\ConstantStringType('trafficWeight'),
                                    new \PHPStan\Type\Constant\ConstantStringType('targetGroup'),
                                    new \PHPStan\Type\Constant\ConstantStringType('taskSetLabel'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Green'),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('lifecycleEvents'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetVersionWeight'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('lifecycleEventName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('diagnostics'),
                                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('scriptName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                                        new \PHPStan\Type\Constant\ConstantStringType('logTail'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Success'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScriptMissing'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScriptNotExecutable'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScriptTimedOut'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ScriptFailed'),
                                            new \PHPStan\Type\Constant\ConstantStringType('UnknownError'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                                new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchGetDeployments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deploymentsInfo'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('applicationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentConfigName'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('previousRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('revision'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorInformation'),
                        new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('completeTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentOverview'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('creator'),
                        new \PHPStan\Type\Constant\ConstantStringType('ignoreApplicationStopFailures'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoRollbackConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('updateOutdatedInstancesOnly'),
                        new \PHPStan\Type\Constant\ConstantStringType('rollbackInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentStyle'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetInstances'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceTerminationWaitTimeStarted'),
                        new \PHPStan\Type\Constant\ConstantStringType('blueGreenDeploymentConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('loadBalancerInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('additionalDeploymentStatusInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('fileExistsBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessages'),
                        new \PHPStan\Type\Constant\ConstantStringType('computePlatform'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('relatedDeployments'),
                        new \PHPStan\Type\Constant\ConstantStringType('overrideAlarmConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('revisionType'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitHubLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('string'),
                            new \PHPStan\Type\Constant\ConstantStringType('appSpecContent'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('AppSpecContent'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('bundleType'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                                new \PHPStan\Type\Constant\ConstantStringType('eTag'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('tar'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tgz'),
                                    new \PHPStan\Type\Constant\ConstantStringType('zip'),
                                    new \PHPStan\Type\Constant\ConstantStringType('YAML'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('repository'),
                                new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                                new \PHPStan\Type\Constant\ConstantStringType('sha256'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                                new \PHPStan\Type\Constant\ConstantStringType('sha256'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('revisionType'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                            new \PHPStan\Type\Constant\ConstantStringType('gitHubLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('string'),
                            new \PHPStan\Type\Constant\ConstantStringType('appSpecContent'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                                new \PHPStan\Type\Constant\ConstantStringType('String'),
                                new \PHPStan\Type\Constant\ConstantStringType('AppSpecContent'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                new \PHPStan\Type\Constant\ConstantStringType('bundleType'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                                new \PHPStan\Type\Constant\ConstantStringType('eTag'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('tar'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tgz'),
                                    new \PHPStan\Type\Constant\ConstantStringType('zip'),
                                    new \PHPStan\Type\Constant\ConstantStringType('YAML'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('repository'),
                                new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                                new \PHPStan\Type\Constant\ConstantStringType('sha256'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('content'),
                                new \PHPStan\Type\Constant\ConstantStringType('sha256'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Created'),
                            new \PHPStan\Type\Constant\ConstantStringType('Queued'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Baking'),
                            new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AGENT_ISSUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALARM_ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('APPLICATION_MISSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('AUTOSCALING_VALIDATION_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('AUTO_SCALING_CONFIGURATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('AUTO_SCALING_IAM_ROLE_PERMISSIONS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODEDEPLOY_RESOURCE_CANNOT_BE_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_APPLICATION_UNHEALTHY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_GROUP_MISSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ECS_UPDATE_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('ELASTIC_LOAD_BALANCING_INVALID'),
                                new \PHPStan\Type\Constant\ConstantStringType('ELB_INVALID_INSTANCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEALTH_CONSTRAINTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEALTH_CONSTRAINTS_INVALID'),
                                new \PHPStan\Type\Constant\ConstantStringType('HOOK_EXECUTION_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('IAM_ROLE_MISSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('IAM_ROLE_PERMISSIONS'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_ECS_SERVICE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_LAMBDA_CONFIGURATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_LAMBDA_FUNCTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_REVISION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MANUAL_STOP'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISSING_BLUE_GREEN_DEPLOYMENT_CONFIGURATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISSING_ELB_INFORMATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISSING_GITHUB_TOKEN'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_EC2_SUBSCRIPTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_INSTANCES'),
                                new \PHPStan\Type\Constant\ConstantStringType('OVER_MAX_INSTANCES'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('REVISION_MISSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('THROTTLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIMEOUT'),
                                new \PHPStan\Type\Constant\ConstantStringType('CLOUDFORMATION_STACK_FAILURE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('user'),
                            new \PHPStan\Type\Constant\ConstantStringType('autoscaling'),
                            new \PHPStan\Type\Constant\ConstantStringType('codeDeployRollback'),
                            new \PHPStan\Type\Constant\ConstantStringType('CodeDeploy'),
                            new \PHPStan\Type\Constant\ConstantStringType('CodeDeployAutoUpdate'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFormationRollback'),
                            new \PHPStan\Type\Constant\ConstantStringType('autoscalingTermination'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('events'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_STOP_ON_ALARM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_STOP_ON_REQUEST'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('rollbackDeploymentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('rollbackTriggeringDeploymentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('rollbackMessage'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('deploymentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('deploymentOption'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PLACE'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLUE_GREEN'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('WITH_TRAFFIC_CONTROL'),
                                new \PHPStan\Type\Constant\ConstantStringType('WITHOUT_TRAFFIC_CONTROL'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('tagFilters'),
                            new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('ec2TagSet'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('KEY_ONLY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VALUE_ONLY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KEY_AND_VALUE'),
                                    ]),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ec2TagSetList'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('KEY_ONLY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('VALUE_ONLY'),
                                                new \PHPStan\Type\Constant\ConstantStringType('KEY_AND_VALUE'),
                                            ]),
                                        ]),
                                    ])),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('terminateBlueInstancesOnDeploymentSuccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('deploymentReadyOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('greenFleetProvisioningOption'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                new \PHPStan\Type\Constant\ConstantStringType('terminationWaitTimeInMinutes'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KEEP_ALIVE'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('actionOnTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('waitTimeInMinutes'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CONTINUE_DEPLOYMENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STOP_DEPLOYMENT'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DISCOVER_EXISTING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COPY_AUTO_SCALING_GROUP'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('elbInfoList'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetGroupInfoList'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetGroupPairInfoList'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('targetGroups'),
                                    new \PHPStan\Type\Constant\ConstantStringType('prodTrafficRoute'),
                                    new \PHPStan\Type\Constant\ConstantStringType('testTrafficRoute'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('listenerArns'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('listenerArns'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DISALLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('OVERWRITE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETAIN'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Server'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('autoUpdateOutdatedInstancesRootDeploymentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('autoUpdateOutdatedInstancesDeploymentIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ignorePollAlarmFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('alarms'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchGetOnPremisesInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('instanceInfos'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('instanceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('iamSessionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('iamUserArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('registerTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('deregisterTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function continueDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDeploymentConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deploymentConfigId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDeploymentGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deploymentGroupId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDeploymentConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDeploymentGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('hooksNotCleanedUp'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('hook'),
                        new \PHPStan\Type\Constant\ConstantStringType('terminationHook'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function deleteGitHubAccountToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tokenName'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteResourcesByExternalId(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterOnPremisesInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('application'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('applicationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('applicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('linkedToGitHub'),
                    new \PHPStan\Type\Constant\ConstantStringType('gitHubAccountName'),
                    new \PHPStan\Type\Constant\ConstantStringType('computePlatform'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Server'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getApplicationRevision(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationName'),
                new \PHPStan\Type\Constant\ConstantStringType('revision'),
                new \PHPStan\Type\Constant\ConstantStringType('revisionInfo'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('revisionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('gitHubLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('string'),
                    new \PHPStan\Type\Constant\ConstantStringType('appSpecContent'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('String'),
                        new \PHPStan\Type\Constant\ConstantStringType('AppSpecContent'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('bundleType'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                        new \PHPStan\Type\Constant\ConstantStringType('eTag'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('tar'),
                            new \PHPStan\Type\Constant\ConstantStringType('tgz'),
                            new \PHPStan\Type\Constant\ConstantStringType('zip'),
                            new \PHPStan\Type\Constant\ConstantStringType('YAML'),
                            new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('repository'),
                        new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('sha256'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('sha256'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstUsedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUsedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('registerTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deploymentInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('applicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentConfigName'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('previousRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('completeTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentOverview'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('creator'),
                    new \PHPStan\Type\Constant\ConstantStringType('ignoreApplicationStopFailures'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoRollbackConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateOutdatedInstancesOnly'),
                    new \PHPStan\Type\Constant\ConstantStringType('rollbackInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStyle'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceTerminationWaitTimeStarted'),
                    new \PHPStan\Type\Constant\ConstantStringType('blueGreenDeploymentConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('loadBalancerInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('additionalDeploymentStatusInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('fileExistsBehavior'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessages'),
                    new \PHPStan\Type\Constant\ConstantStringType('computePlatform'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('relatedDeployments'),
                    new \PHPStan\Type\Constant\ConstantStringType('overrideAlarmConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('revisionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitHubLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('string'),
                        new \PHPStan\Type\Constant\ConstantStringType('appSpecContent'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                            new \PHPStan\Type\Constant\ConstantStringType('String'),
                            new \PHPStan\Type\Constant\ConstantStringType('AppSpecContent'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('bundleType'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                            new \PHPStan\Type\Constant\ConstantStringType('eTag'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('tar'),
                                new \PHPStan\Type\Constant\ConstantStringType('tgz'),
                                new \PHPStan\Type\Constant\ConstantStringType('zip'),
                                new \PHPStan\Type\Constant\ConstantStringType('YAML'),
                                new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repository'),
                            new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                            new \PHPStan\Type\Constant\ConstantStringType('sha256'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                            new \PHPStan\Type\Constant\ConstantStringType('sha256'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('revisionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitHubLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('string'),
                        new \PHPStan\Type\Constant\ConstantStringType('appSpecContent'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                            new \PHPStan\Type\Constant\ConstantStringType('String'),
                            new \PHPStan\Type\Constant\ConstantStringType('AppSpecContent'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('bundleType'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                            new \PHPStan\Type\Constant\ConstantStringType('eTag'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('tar'),
                                new \PHPStan\Type\Constant\ConstantStringType('tgz'),
                                new \PHPStan\Type\Constant\ConstantStringType('zip'),
                                new \PHPStan\Type\Constant\ConstantStringType('YAML'),
                                new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repository'),
                            new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                            new \PHPStan\Type\Constant\ConstantStringType('sha256'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                            new \PHPStan\Type\Constant\ConstantStringType('sha256'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('Queued'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Baking'),
                        new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AGENT_ISSUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALARM_ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPLICATION_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOSCALING_VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO_SCALING_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO_SCALING_IAM_ROLE_PERMISSIONS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CODEDEPLOY_RESOURCE_CANNOT_BE_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_APPLICATION_UNHEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_GROUP_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECS_UPDATE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('ELASTIC_LOAD_BALANCING_INVALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('ELB_INVALID_INSTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTH_CONSTRAINTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTH_CONSTRAINTS_INVALID'),
                            new \PHPStan\Type\Constant\ConstantStringType('HOOK_EXECUTION_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_ROLE_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_ROLE_PERMISSIONS'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_ECS_SERVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_LAMBDA_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_LAMBDA_FUNCTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_REVISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL_STOP'),
                            new \PHPStan\Type\Constant\ConstantStringType('MISSING_BLUE_GREEN_DEPLOYMENT_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MISSING_ELB_INFORMATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MISSING_GITHUB_TOKEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_EC2_SUBSCRIPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_INSTANCES'),
                            new \PHPStan\Type\Constant\ConstantStringType('OVER_MAX_INSTANCES'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REVISION_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('THROTTLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMEOUT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUDFORMATION_STACK_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('user'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoscaling'),
                        new \PHPStan\Type\Constant\ConstantStringType('codeDeployRollback'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeDeploy'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeDeployAutoUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudFormation'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudFormationRollback'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoscalingTermination'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('events'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_STOP_ON_ALARM'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_STOP_ON_REQUEST'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('rollbackDeploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('rollbackTriggeringDeploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('rollbackMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentOption'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PLACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BLUE_GREEN'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WITH_TRAFFIC_CONTROL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WITHOUT_TRAFFIC_CONTROL'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('tagFilters'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('ec2TagSet'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KEY_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VALUE_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KEY_AND_VALUE'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ec2TagSetList'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_ONLY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('VALUE_ONLY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('KEY_AND_VALUE'),
                                        ]),
                                    ]),
                                ])),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('terminateBlueInstancesOnDeploymentSuccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentReadyOption'),
                        new \PHPStan\Type\Constant\ConstantStringType('greenFleetProvisioningOption'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('terminationWaitTimeInMinutes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('KEEP_ALIVE'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('actionOnTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('waitTimeInMinutes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CONTINUE_DEPLOYMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOP_DEPLOYMENT'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DISCOVER_EXISTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('COPY_AUTO_SCALING_GROUP'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('elbInfoList'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroupInfoList'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroupPairInfoList'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('targetGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('prodTrafficRoute'),
                                new \PHPStan\Type\Constant\ConstantStringType('testTrafficRoute'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('listenerArns'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('listenerArns'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DISALLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('OVERWRITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RETAIN'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Server'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('autoUpdateOutdatedInstancesRootDeploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('autoUpdateOutdatedInstancesDeploymentIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ignorePollAlarmFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('alarms'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getDeploymentConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deploymentConfigInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentConfigId'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentConfigName'),
                    new \PHPStan\Type\Constant\ConstantStringType('minimumHealthyHosts'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('computePlatform'),
                    new \PHPStan\Type\Constant\ConstantStringType('trafficRoutingConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('zonalConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HOST_COUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_PERCENT'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Server'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeBasedCanary'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeBasedLinear'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TimeBasedCanary'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimeBasedLinear'),
                            new \PHPStan\Type\Constant\ConstantStringType('AllAtOnce'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('canaryPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('canaryInterval'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('linearPercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('linearInterval'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('firstZoneMonitorDurationInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('monitorDurationInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('minimumHealthyHostsPerZone'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HOST_COUNT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLEET_PERCENT'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getDeploymentGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deploymentGroupInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('applicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentConfigName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2TagFilters'),
                    new \PHPStan\Type\Constant\ConstantStringType('onPremisesInstanceTagFilters'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('triggerConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('alarmConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoRollbackConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStyle'),
                    new \PHPStan\Type\Constant\ConstantStringType('outdatedInstancesStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('blueGreenDeploymentConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('loadBalancerInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSuccessfulDeployment'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeployment'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2TagSet'),
                    new \PHPStan\Type\Constant\ConstantStringType('onPremisesTagSet'),
                    new \PHPStan\Type\Constant\ConstantStringType('computePlatform'),
                    new \PHPStan\Type\Constant\ConstantStringType('ecsServices'),
                    new \PHPStan\Type\Constant\ConstantStringType('terminationHookEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('KEY_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('VALUE_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('KEY_AND_VALUE'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('KEY_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('VALUE_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('KEY_AND_VALUE'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('hook'),
                            new \PHPStan\Type\Constant\ConstantStringType('terminationHook'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('revisionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitHubLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('string'),
                        new \PHPStan\Type\Constant\ConstantStringType('appSpecContent'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                            new \PHPStan\Type\Constant\ConstantStringType('String'),
                            new \PHPStan\Type\Constant\ConstantStringType('AppSpecContent'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('bundleType'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                            new \PHPStan\Type\Constant\ConstantStringType('eTag'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('tar'),
                                new \PHPStan\Type\Constant\ConstantStringType('tgz'),
                                new \PHPStan\Type\Constant\ConstantStringType('zip'),
                                new \PHPStan\Type\Constant\ConstantStringType('YAML'),
                                new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repository'),
                            new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                            new \PHPStan\Type\Constant\ConstantStringType('sha256'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                            new \PHPStan\Type\Constant\ConstantStringType('sha256'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('triggerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('triggerTargetArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('triggerEvents'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentStart'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentSuccess'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentFailure'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentStop'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentRollback'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentReady'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceStart'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceSuccess'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceFailure'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InstanceReady'),
                                ]),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ignorePollAlarmFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('alarms'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('events'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_STOP_ON_ALARM'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_STOP_ON_REQUEST'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentOption'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PLACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BLUE_GREEN'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WITH_TRAFFIC_CONTROL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WITHOUT_TRAFFIC_CONTROL'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IGNORE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('terminateBlueInstancesOnDeploymentSuccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentReadyOption'),
                        new \PHPStan\Type\Constant\ConstantStringType('greenFleetProvisioningOption'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('terminationWaitTimeInMinutes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('KEEP_ALIVE'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('actionOnTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('waitTimeInMinutes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CONTINUE_DEPLOYMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOP_DEPLOYMENT'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DISCOVER_EXISTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('COPY_AUTO_SCALING_GROUP'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('elbInfoList'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroupInfoList'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroupPairInfoList'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('targetGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('prodTrafficRoute'),
                                new \PHPStan\Type\Constant\ConstantStringType('testTrafficRoute'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('listenerArns'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('listenerArns'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Created'),
                            new \PHPStan\Type\Constant\ConstantStringType('Queued'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Baking'),
                            new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Created'),
                            new \PHPStan\Type\Constant\ConstantStringType('Queued'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Baking'),
                            new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ec2TagSetList'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('KEY_ONLY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VALUE_ONLY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KEY_AND_VALUE'),
                                    ]),
                                ]),
                            ])),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('onPremisesTagSetList'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('KEY_ONLY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VALUE_ONLY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KEY_AND_VALUE'),
                                    ]),
                                ]),
                            ])),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Server'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECS'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getDeploymentInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('instanceSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lifecycleEvents'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lifecycleEventName'),
                            new \PHPStan\Type\Constant\ConstantStringType('diagnostics'),
                            new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('scriptName'),
                                new \PHPStan\Type\Constant\ConstantStringType('message'),
                                new \PHPStan\Type\Constant\ConstantStringType('logTail'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Success'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ScriptMissing'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ScriptNotExecutable'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ScriptTimedOut'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ScriptFailed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UnknownError'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                                new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Green'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getDeploymentTarget(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deploymentTarget'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentTargetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceTarget'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaTarget'),
                    new \PHPStan\Type\Constant\ConstantStringType('ecsTarget'),
                    new \PHPStan\Type\Constant\ConstantStringType('cloudFormationTarget'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceTarget'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaTarget'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECSTarget'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudFormationTarget'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lifecycleEvents'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceLabel'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('lifecycleEventName'),
                                new \PHPStan\Type\Constant\ConstantStringType('diagnostics'),
                                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('scriptName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                                    new \PHPStan\Type\Constant\ConstantStringType('logTail'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptMissing'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptNotExecutable'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptTimedOut'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptFailed'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UnknownError'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                            new \PHPStan\Type\Constant\ConstantStringType('Green'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lifecycleEvents'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionInfo'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('lifecycleEventName'),
                                new \PHPStan\Type\Constant\ConstantStringType('diagnostics'),
                                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('scriptName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                                    new \PHPStan\Type\Constant\ConstantStringType('logTail'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptMissing'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptNotExecutable'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptTimedOut'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptFailed'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UnknownError'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('functionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('functionAlias'),
                            new \PHPStan\Type\Constant\ConstantStringType('currentVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetVersionWeight'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lifecycleEvents'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskSetsInfo'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('lifecycleEventName'),
                                new \PHPStan\Type\Constant\ConstantStringType('diagnostics'),
                                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('scriptName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                                    new \PHPStan\Type\Constant\ConstantStringType('logTail'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptMissing'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptNotExecutable'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptTimedOut'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptFailed'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UnknownError'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('identifer'),
                                new \PHPStan\Type\Constant\ConstantStringType('desiredCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('pendingCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('runningCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('trafficWeight'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetGroup'),
                                new \PHPStan\Type\Constant\ConstantStringType('taskSetLabel'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Blue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Green'),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lifecycleEvents'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetVersionWeight'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('lifecycleEventName'),
                                new \PHPStan\Type\Constant\ConstantStringType('diagnostics'),
                                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('scriptName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                                    new \PHPStan\Type\Constant\ConstantStringType('logTail'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptMissing'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptNotExecutable'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptTimedOut'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ScriptFailed'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UnknownError'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Skipped'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getOnPremisesInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('instanceInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamSessionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamUserArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('registerTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('deregisterTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listApplicationRevisions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('revisions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('revisionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitHubLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('string'),
                        new \PHPStan\Type\Constant\ConstantStringType('appSpecContent'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                            new \PHPStan\Type\Constant\ConstantStringType('String'),
                            new \PHPStan\Type\Constant\ConstantStringType('AppSpecContent'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('bundleType'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                            new \PHPStan\Type\Constant\ConstantStringType('eTag'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('tar'),
                                new \PHPStan\Type\Constant\ConstantStringType('tgz'),
                                new \PHPStan\Type\Constant\ConstantStringType('zip'),
                                new \PHPStan\Type\Constant\ConstantStringType('YAML'),
                                new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repository'),
                            new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                            new \PHPStan\Type\Constant\ConstantStringType('sha256'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                            new \PHPStan\Type\Constant\ConstantStringType('sha256'),
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
    private function listApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applications'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDeploymentConfigs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deploymentConfigsList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDeploymentGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationName'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDeploymentInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('instancesList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDeploymentTargets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('targetIds'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDeployments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deployments'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGitHubAccountTokenNames(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tokenNameList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOnPremisesInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('instanceNames'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
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
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putLifecycleEventHookExecutionStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('lifecycleEventHookExecutionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerApplicationRevision(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function registerOnPremisesInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function removeTagsFromOnPremisesInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function skipWaitTimeForInstanceTermination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function stopDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                ]),
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
    private function updateApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateDeploymentGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('hooksNotCleanedUp'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('hook'),
                        new \PHPStan\Type\Constant\ConstantStringType('terminationHook'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
}