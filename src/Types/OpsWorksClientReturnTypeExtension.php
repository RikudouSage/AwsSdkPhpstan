<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class OpsWorksClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\OpsWorks\OpsWorksClient>
     */
    public function getClass(): string
    {
        return \Aws\OpsWorks\OpsWorksClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'assignInstance',
            'assignVolume',
            'associateElasticIp',
            'attachElasticLoadBalancer',
            'cloneStack',
            'createApp',
            'createDeployment',
            'createInstance',
            'createLayer',
            'createStack',
            'createUserProfile',
            'deleteApp',
            'deleteInstance',
            'deleteLayer',
            'deleteStack',
            'deleteUserProfile',
            'deregisterEcsCluster',
            'deregisterElasticIp',
            'deregisterInstance',
            'deregisterRdsDbInstance',
            'deregisterVolume',
            'describeAgentVersions',
            'describeApps',
            'describeCommands',
            'describeDeployments',
            'describeEcsClusters',
            'describeElasticIps',
            'describeElasticLoadBalancers',
            'describeInstances',
            'describeLayers',
            'describeLoadBasedAutoScaling',
            'describeMyUserProfile',
            'describeOperatingSystems',
            'describePermissions',
            'describeRaidArrays',
            'describeRdsDbInstances',
            'describeServiceErrors',
            'describeStackProvisioningParameters',
            'describeStackSummary',
            'describeStacks',
            'describeTimeBasedAutoScaling',
            'describeUserProfiles',
            'describeVolumes',
            'detachElasticLoadBalancer',
            'disassociateElasticIp',
            'getHostnameSuggestion',
            'grantAccess',
            'listTags',
            'rebootInstance',
            'registerEcsCluster',
            'registerElasticIp',
            'registerInstance',
            'registerRdsDbInstance',
            'registerVolume',
            'setLoadBasedAutoScaling',
            'setPermission',
            'setTimeBasedAutoScaling',
            'startInstance',
            'startStack',
            'stopInstance',
            'stopStack',
            'tagResource',
            'unassignInstance',
            'unassignVolume',
            'untagResource',
            'updateApp',
            'updateElasticIp',
            'updateInstance',
            'updateLayer',
            'updateMyUserProfile',
            'updateRdsDbInstance',
            'updateStack',
            'updateUserProfile',
            'updateVolume',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'assignInstance' => $this->assignInstance(),
            'assignVolume' => $this->assignVolume(),
            'associateElasticIp' => $this->associateElasticIp(),
            'attachElasticLoadBalancer' => $this->attachElasticLoadBalancer(),
            'cloneStack' => $this->cloneStack(),
            'createApp' => $this->createApp(),
            'createDeployment' => $this->createDeployment(),
            'createInstance' => $this->createInstance(),
            'createLayer' => $this->createLayer(),
            'createStack' => $this->createStack(),
            'createUserProfile' => $this->createUserProfile(),
            'deleteApp' => $this->deleteApp(),
            'deleteInstance' => $this->deleteInstance(),
            'deleteLayer' => $this->deleteLayer(),
            'deleteStack' => $this->deleteStack(),
            'deleteUserProfile' => $this->deleteUserProfile(),
            'deregisterEcsCluster' => $this->deregisterEcsCluster(),
            'deregisterElasticIp' => $this->deregisterElasticIp(),
            'deregisterInstance' => $this->deregisterInstance(),
            'deregisterRdsDbInstance' => $this->deregisterRdsDbInstance(),
            'deregisterVolume' => $this->deregisterVolume(),
            'describeAgentVersions' => $this->describeAgentVersions(),
            'describeApps' => $this->describeApps(),
            'describeCommands' => $this->describeCommands(),
            'describeDeployments' => $this->describeDeployments(),
            'describeEcsClusters' => $this->describeEcsClusters(),
            'describeElasticIps' => $this->describeElasticIps(),
            'describeElasticLoadBalancers' => $this->describeElasticLoadBalancers(),
            'describeInstances' => $this->describeInstances(),
            'describeLayers' => $this->describeLayers(),
            'describeLoadBasedAutoScaling' => $this->describeLoadBasedAutoScaling(),
            'describeMyUserProfile' => $this->describeMyUserProfile(),
            'describeOperatingSystems' => $this->describeOperatingSystems(),
            'describePermissions' => $this->describePermissions(),
            'describeRaidArrays' => $this->describeRaidArrays(),
            'describeRdsDbInstances' => $this->describeRdsDbInstances(),
            'describeServiceErrors' => $this->describeServiceErrors(),
            'describeStackProvisioningParameters' => $this->describeStackProvisioningParameters(),
            'describeStackSummary' => $this->describeStackSummary(),
            'describeStacks' => $this->describeStacks(),
            'describeTimeBasedAutoScaling' => $this->describeTimeBasedAutoScaling(),
            'describeUserProfiles' => $this->describeUserProfiles(),
            'describeVolumes' => $this->describeVolumes(),
            'detachElasticLoadBalancer' => $this->detachElasticLoadBalancer(),
            'disassociateElasticIp' => $this->disassociateElasticIp(),
            'getHostnameSuggestion' => $this->getHostnameSuggestion(),
            'grantAccess' => $this->grantAccess(),
            'listTags' => $this->listTags(),
            'rebootInstance' => $this->rebootInstance(),
            'registerEcsCluster' => $this->registerEcsCluster(),
            'registerElasticIp' => $this->registerElasticIp(),
            'registerInstance' => $this->registerInstance(),
            'registerRdsDbInstance' => $this->registerRdsDbInstance(),
            'registerVolume' => $this->registerVolume(),
            'setLoadBasedAutoScaling' => $this->setLoadBasedAutoScaling(),
            'setPermission' => $this->setPermission(),
            'setTimeBasedAutoScaling' => $this->setTimeBasedAutoScaling(),
            'startInstance' => $this->startInstance(),
            'startStack' => $this->startStack(),
            'stopInstance' => $this->stopInstance(),
            'stopStack' => $this->stopStack(),
            'tagResource' => $this->tagResource(),
            'unassignInstance' => $this->unassignInstance(),
            'unassignVolume' => $this->unassignVolume(),
            'untagResource' => $this->untagResource(),
            'updateApp' => $this->updateApp(),
            'updateElasticIp' => $this->updateElasticIp(),
            'updateInstance' => $this->updateInstance(),
            'updateLayer' => $this->updateLayer(),
            'updateMyUserProfile' => $this->updateMyUserProfile(),
            'updateRdsDbInstance' => $this->updateRdsDbInstance(),
            'updateStack' => $this->updateStack(),
            'updateUserProfile' => $this->updateUserProfile(),
            'updateVolume' => $this->updateVolume(),
        };
    }
    private function assignInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function assignVolume(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function associateElasticIp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function attachElasticLoadBalancer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function cloneStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLayer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LayerId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createUserProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IamUserArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteLayer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteUserProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deregisterEcsCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deregisterElasticIp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deregisterInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deregisterRdsDbInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deregisterVolume(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeAgentVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AgentVersions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationManager'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeApps(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Apps'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                        new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Shortname'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSources'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('AppSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('Domains'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnableSsl'),
                        new \PHPStan\Type\Constant\ConstantStringType('SslConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Environment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('aws-flow-ruby'),
                            new \PHPStan\Type\Constant\ConstantStringType('java'),
                            new \PHPStan\Type\Constant\ConstantStringType('rails'),
                            new \PHPStan\Type\Constant\ConstantStringType('php'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs'),
                            new \PHPStan\Type\Constant\ConstantStringType('static'),
                            new \PHPStan\Type\Constant\ConstantStringType('other'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                            new \PHPStan\Type\Constant\ConstantStringType('Username'),
                            new \PHPStan\Type\Constant\ConstantStringType('Password'),
                            new \PHPStan\Type\Constant\ConstantStringType('SshKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('git'),
                                new \PHPStan\Type\Constant\ConstantStringType('svn'),
                                new \PHPStan\Type\Constant\ConstantStringType('archive'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('Chain'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentRoot'),
                            new \PHPStan\Type\Constant\ConstantStringType('RailsEnv'),
                            new \PHPStan\Type\Constant\ConstantStringType('AutoBundleOnDeploy'),
                            new \PHPStan\Type\Constant\ConstantStringType('AwsFlowRubySettings'),
                        ]), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Secure'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeCommands(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Commands'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CommandId'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('AcknowledgedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExitCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
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
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeDeployments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Deployments'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DeploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IamUserArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Command'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomJson'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Args'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('install_dependencies'),
                                new \PHPStan\Type\Constant\ConstantStringType('update_dependencies'),
                                new \PHPStan\Type\Constant\ConstantStringType('update_custom_cookbooks'),
                                new \PHPStan\Type\Constant\ConstantStringType('execute_recipes'),
                                new \PHPStan\Type\Constant\ConstantStringType('configure'),
                                new \PHPStan\Type\Constant\ConstantStringType('setup'),
                                new \PHPStan\Type\Constant\ConstantStringType('deploy'),
                                new \PHPStan\Type\Constant\ConstantStringType('rollback'),
                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                new \PHPStan\Type\Constant\ConstantStringType('stop'),
                                new \PHPStan\Type\Constant\ConstantStringType('restart'),
                                new \PHPStan\Type\Constant\ConstantStringType('undeploy'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ]))),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeEcsClusters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EcsClusters'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EcsClusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('EcsClusterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RegisteredAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeElasticIps(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ElasticIps'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Ip'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeElasticLoadBalancers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ElasticLoadBalancers'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticLoadBalancerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('DnsName'),
                        new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LayerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ec2InstanceIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Instances'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AgentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AmiId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Architecture'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('BlockDeviceMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('EbsOptimized'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ec2InstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EcsClusterArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('EcsContainerInstanceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Hostname'),
                        new \PHPStan\Type\Constant\ConstantStringType('InfrastructureClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstallUpdatesOnBoot'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceProfileArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastServiceErrorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LayerIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Os'),
                        new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrivateDns'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('PublicDns'),
                        new \PHPStan\Type\Constant\ConstantStringType('PublicIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('RegisteredBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReportedAgentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReportedOs'),
                        new \PHPStan\Type\Constant\ConstantStringType('RootDeviceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('RootDeviceVolumeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SshHostDsaKeyFingerprint'),
                        new \PHPStan\Type\Constant\ConstantStringType('SshHostRsaKeyFingerprint'),
                        new \PHPStan\Type\Constant\ConstantStringType('SshKeyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tenancy'),
                        new \PHPStan\Type\Constant\ConstantStringType('VirtualizationType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('x86_64'),
                            new \PHPStan\Type\Constant\ConstantStringType('i386'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('load'),
                            new \PHPStan\Type\Constant\ConstantStringType('timer'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DeviceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('NoDevice'),
                                new \PHPStan\Type\Constant\ConstantStringType('VirtualName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ebs'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VolumeSize'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DeleteOnTermination'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('gp2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('io1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('standard'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Family'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ebs'),
                            new \PHPStan\Type\Constant\ConstantStringType('instance-store'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('paravirtual'),
                            new \PHPStan\Type\Constant\ConstantStringType('hvm'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeLayers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Layers'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LayerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Shortname'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomInstanceProfileArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomJson'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomSecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultSecurityGroupNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('Packages'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnableAutoHealing'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoAssignElasticIps'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoAssignPublicIps'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultRecipes'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomRecipes'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstallUpdatesOnBoot'),
                        new \PHPStan\Type\Constant\ConstantStringType('UseEbsOptimizedInstances'),
                        new \PHPStan\Type\Constant\ConstantStringType('LifecycleEventConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('aws-flow-ruby'),
                            new \PHPStan\Type\Constant\ConstantStringType('ecs-cluster'),
                            new \PHPStan\Type\Constant\ConstantStringType('java-app'),
                            new \PHPStan\Type\Constant\ConstantStringType('lb'),
                            new \PHPStan\Type\Constant\ConstantStringType('web'),
                            new \PHPStan\Type\Constant\ConstantStringType('php-app'),
                            new \PHPStan\Type\Constant\ConstantStringType('rails-app'),
                            new \PHPStan\Type\Constant\ConstantStringType('nodejs-app'),
                            new \PHPStan\Type\Constant\ConstantStringType('memcached'),
                            new \PHPStan\Type\Constant\ConstantStringType('db-master'),
                            new \PHPStan\Type\Constant\ConstantStringType('monitoring-master'),
                            new \PHPStan\Type\Constant\ConstantStringType('custom'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EcsClusterArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnableHaproxyStats'),
                            new \PHPStan\Type\Constant\ConstantStringType('HaproxyStatsUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('HaproxyStatsUser'),
                            new \PHPStan\Type\Constant\ConstantStringType('HaproxyStatsPassword'),
                            new \PHPStan\Type\Constant\ConstantStringType('HaproxyHealthCheckUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('HaproxyHealthCheckMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('MysqlRootPassword'),
                            new \PHPStan\Type\Constant\ConstantStringType('MysqlRootPasswordUbiquitous'),
                            new \PHPStan\Type\Constant\ConstantStringType('GangliaUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('GangliaUser'),
                            new \PHPStan\Type\Constant\ConstantStringType('GangliaPassword'),
                            new \PHPStan\Type\Constant\ConstantStringType('MemcachedMemory'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodejsVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('RubyVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('RubygemsVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('ManageBundler'),
                            new \PHPStan\Type\Constant\ConstantStringType('BundlerVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('RailsStack'),
                            new \PHPStan\Type\Constant\ConstantStringType('PassengerVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Jvm'),
                            new \PHPStan\Type\Constant\ConstantStringType('JvmVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('JvmOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('JavaAppServer'),
                            new \PHPStan\Type\Constant\ConstantStringType('JavaAppServerVersion'),
                        ]), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogStreams'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DatetimeFormat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TimeZone'),
                                    new \PHPStan\Type\Constant\ConstantStringType('File'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FileFingerprintLines'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MultiLineStartPattern'),
                                    new \PHPStan\Type\Constant\ConstantStringType('InitialPosition'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Encoding'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BufferDuration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BatchCount'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BatchSize'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LOCAL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UTC'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('start_of_file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('end_of_file'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ascii'),
                                        new \PHPStan\Type\Constant\ConstantStringType('big5'),
                                        new \PHPStan\Type\Constant\ConstantStringType('big5hkscs'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp037'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp424'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp437'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp500'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp720'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp737'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp775'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp850'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp852'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp855'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp856'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp857'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp858'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp860'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp861'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp862'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp863'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp864'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp865'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp866'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp869'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp874'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp875'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp932'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp949'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp950'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp1006'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp1026'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp1140'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp1250'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp1251'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp1252'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp1253'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp1254'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp1255'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp1256'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp1257'),
                                        new \PHPStan\Type\Constant\ConstantStringType('cp1258'),
                                        new \PHPStan\Type\Constant\ConstantStringType('euc_jp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('euc_jis_2004'),
                                        new \PHPStan\Type\Constant\ConstantStringType('euc_jisx0213'),
                                        new \PHPStan\Type\Constant\ConstantStringType('euc_kr'),
                                        new \PHPStan\Type\Constant\ConstantStringType('gb2312'),
                                        new \PHPStan\Type\Constant\ConstantStringType('gbk'),
                                        new \PHPStan\Type\Constant\ConstantStringType('gb18030'),
                                        new \PHPStan\Type\Constant\ConstantStringType('hz'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso2022_jp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso2022_jp_1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso2022_jp_2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso2022_jp_2004'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso2022_jp_3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso2022_jp_ext'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso2022_kr'),
                                        new \PHPStan\Type\Constant\ConstantStringType('latin_1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso8859_2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso8859_3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso8859_4'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso8859_5'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso8859_6'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso8859_7'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso8859_8'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso8859_9'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso8859_10'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso8859_13'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso8859_14'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso8859_15'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iso8859_16'),
                                        new \PHPStan\Type\Constant\ConstantStringType('johab'),
                                        new \PHPStan\Type\Constant\ConstantStringType('koi8_r'),
                                        new \PHPStan\Type\Constant\ConstantStringType('koi8_u'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mac_cyrillic'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mac_greek'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mac_iceland'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mac_latin2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mac_roman'),
                                        new \PHPStan\Type\Constant\ConstantStringType('mac_turkish'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ptcp154'),
                                        new \PHPStan\Type\Constant\ConstantStringType('shift_jis'),
                                        new \PHPStan\Type\Constant\ConstantStringType('shift_jis_2004'),
                                        new \PHPStan\Type\Constant\ConstantStringType('shift_jisx0213'),
                                        new \PHPStan\Type\Constant\ConstantStringType('utf_32'),
                                        new \PHPStan\Type\Constant\ConstantStringType('utf_32_be'),
                                        new \PHPStan\Type\Constant\ConstantStringType('utf_32_le'),
                                        new \PHPStan\Type\Constant\ConstantStringType('utf_16'),
                                        new \PHPStan\Type\Constant\ConstantStringType('utf_16_be'),
                                        new \PHPStan\Type\Constant\ConstantStringType('utf_16_le'),
                                        new \PHPStan\Type\Constant\ConstantStringType('utf_7'),
                                        new \PHPStan\Type\Constant\ConstantStringType('utf_8'),
                                        new \PHPStan\Type\Constant\ConstantStringType('utf_8_sig'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MountPoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('RaidLevel'),
                                new \PHPStan\Type\Constant\ConstantStringType('NumberOfDisks'),
                                new \PHPStan\Type\Constant\ConstantStringType('Size'),
                                new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                                new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Setup'),
                            new \PHPStan\Type\Constant\ConstantStringType('Configure'),
                            new \PHPStan\Type\Constant\ConstantStringType('Deploy'),
                            new \PHPStan\Type\Constant\ConstantStringType('Undeploy'),
                            new \PHPStan\Type\Constant\ConstantStringType('Shutdown'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Setup'),
                            new \PHPStan\Type\Constant\ConstantStringType('Configure'),
                            new \PHPStan\Type\Constant\ConstantStringType('Deploy'),
                            new \PHPStan\Type\Constant\ConstantStringType('Undeploy'),
                            new \PHPStan\Type\Constant\ConstantStringType('Shutdown'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Shutdown'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ExecutionTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('DelayUntilElbConnectionsDrained'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeLoadBasedAutoScaling(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoadBasedAutoScalingConfigurations'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LayerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enable'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpScaling'),
                        new \PHPStan\Type\Constant\ConstantStringType('DownScaling'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThresholdsWaitTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('IgnoreMetricsTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('CpuThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('MemoryThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('LoadThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThresholdsWaitTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('IgnoreMetricsTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('CpuThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('MemoryThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('LoadThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('Alarms'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeMyUserProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IamUserArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('SshUsername'),
                    new \PHPStan\Type\Constant\ConstantStringType('SshPublicKey'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeOperatingSystems(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperatingSystems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationManagers'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReportedName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReportedVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Supported'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describePermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                        new \PHPStan\Type\Constant\ConstantStringType('IamUserArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowSsh'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowSudo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Level'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeRaidArrays(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RaidArrays'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RaidArrayId'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('RaidLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfDisks'),
                        new \PHPStan\Type\Constant\ConstantStringType('Size'),
                        new \PHPStan\Type\Constant\ConstantStringType('Device'),
                        new \PHPStan\Type\Constant\ConstantStringType('MountPoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeRdsDbInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RdsDbInstances'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RdsDbInstanceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DbInstanceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('DbUser'),
                        new \PHPStan\Type\Constant\ConstantStringType('DbPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Engine'),
                        new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingOnRds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeServiceErrors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceErrors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceErrorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeStackProvisioningParameters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AgentInstallerUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeStackSummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LayersCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstancesCount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Assigning'),
                        new \PHPStan\Type\Constant\ConstantStringType('Booting'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionLost'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deregistering'),
                        new \PHPStan\Type\Constant\ConstantStringType('Online'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rebooting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Registered'),
                        new \PHPStan\Type\Constant\ConstantStringType('Registering'),
                        new \PHPStan\Type\Constant\ConstantStringType('Requested'),
                        new \PHPStan\Type\Constant\ConstantStringType('RunningSetup'),
                        new \PHPStan\Type\Constant\ConstantStringType('SetupFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShuttingDown'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('StopFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stopping'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terminated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terminating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unassigning'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeStacks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Stacks'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultInstanceProfileArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultOs'),
                        new \PHPStan\Type\Constant\ConstantStringType('HostnameTheme'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultAvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultSubnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomJson'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationManager'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChefConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('UseCustomCookbooks'),
                        new \PHPStan\Type\Constant\ConstantStringType('UseOpsworksSecurityGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomCookbooksSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultSshKeyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultRootDeviceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AgentVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\Constant\ConstantStringType('Color'), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ManageBerkshelf'),
                            new \PHPStan\Type\Constant\ConstantStringType('BerkshelfVersion'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                            new \PHPStan\Type\Constant\ConstantStringType('Username'),
                            new \PHPStan\Type\Constant\ConstantStringType('Password'),
                            new \PHPStan\Type\Constant\ConstantStringType('SshKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('Revision'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('git'),
                                new \PHPStan\Type\Constant\ConstantStringType('svn'),
                                new \PHPStan\Type\Constant\ConstantStringType('archive'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ebs'),
                            new \PHPStan\Type\Constant\ConstantStringType('instance-store'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeTimeBasedAutoScaling(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TimeBasedAutoScalingConfigurations'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingSchedule'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Monday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tuesday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Wednesday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Thursday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Friday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Saturday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sunday'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeUserProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserProfiles'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IamUserArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('SshUsername'),
                        new \PHPStan\Type\Constant\ConstantStringType('SshPublicKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowSelfManagement'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeVolumes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Volumes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ec2VolumeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('RaidArrayId'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Size'),
                        new \PHPStan\Type\Constant\ConstantStringType('Device'),
                        new \PHPStan\Type\Constant\ConstantStringType('MountPoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                        new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function detachElasticLoadBalancer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociateElasticIp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getHostnameSuggestion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LayerId'),
                new \PHPStan\Type\Constant\ConstantStringType('Hostname'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function grantAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TemporaryCredential'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                    new \PHPStan\Type\Constant\ConstantStringType('Password'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValidForInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function rebootInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function registerEcsCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EcsClusterArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerElasticIp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ElasticIp'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerRdsDbInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function registerVolume(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VolumeId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function setLoadBasedAutoScaling(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function setPermission(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function setTimeBasedAutoScaling(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function stopInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function stopStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function unassignInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function unassignVolume(): ?\PHPStan\Type\Type
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
    private function updateApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateElasticIp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateLayer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateMyUserProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateRdsDbInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateUserProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateVolume(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}