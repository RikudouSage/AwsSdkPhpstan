<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ElasticBeanstalkClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ElasticBeanstalk\ElasticBeanstalkClient>
     */
    public function getClass(): string
    {
        return \Aws\ElasticBeanstalk\ElasticBeanstalkClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'abortEnvironmentUpdate',
            'applyEnvironmentManagedAction',
            'associateEnvironmentOperationsRole',
            'checkDNSAvailability',
            'composeEnvironments',
            'createApplication',
            'createApplicationVersion',
            'createConfigurationTemplate',
            'createEnvironment',
            'createPlatformVersion',
            'createStorageLocation',
            'deleteApplication',
            'deleteApplicationVersion',
            'deleteConfigurationTemplate',
            'deleteEnvironmentConfiguration',
            'deletePlatformVersion',
            'describeAccountAttributes',
            'describeApplicationVersions',
            'describeApplications',
            'describeConfigurationOptions',
            'describeConfigurationSettings',
            'describeEnvironmentHealth',
            'describeEnvironmentManagedActionHistory',
            'describeEnvironmentManagedActions',
            'describeEnvironmentResources',
            'describeEnvironments',
            'describeEvents',
            'describeInstancesHealth',
            'describePlatformVersion',
            'disassociateEnvironmentOperationsRole',
            'listAvailableSolutionStacks',
            'listPlatformBranches',
            'listPlatformVersions',
            'listTagsForResource',
            'rebuildEnvironment',
            'requestEnvironmentInfo',
            'restartAppServer',
            'retrieveEnvironmentInfo',
            'swapEnvironmentCNAMEs',
            'terminateEnvironment',
            'updateApplication',
            'updateApplicationResourceLifecycle',
            'updateApplicationVersion',
            'updateConfigurationTemplate',
            'updateEnvironment',
            'updateTagsForResource',
            'validateConfigurationSettings',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'abortEnvironmentUpdate' => $this->abortEnvironmentUpdate(),
            'applyEnvironmentManagedAction' => $this->applyEnvironmentManagedAction(),
            'associateEnvironmentOperationsRole' => $this->associateEnvironmentOperationsRole(),
            'checkDNSAvailability' => $this->checkDNSAvailability(),
            'composeEnvironments' => $this->composeEnvironments(),
            'createApplication' => $this->createApplication(),
            'createApplicationVersion' => $this->createApplicationVersion(),
            'createConfigurationTemplate' => $this->createConfigurationTemplate(),
            'createEnvironment' => $this->createEnvironment(),
            'createPlatformVersion' => $this->createPlatformVersion(),
            'createStorageLocation' => $this->createStorageLocation(),
            'deleteApplication' => $this->deleteApplication(),
            'deleteApplicationVersion' => $this->deleteApplicationVersion(),
            'deleteConfigurationTemplate' => $this->deleteConfigurationTemplate(),
            'deleteEnvironmentConfiguration' => $this->deleteEnvironmentConfiguration(),
            'deletePlatformVersion' => $this->deletePlatformVersion(),
            'describeAccountAttributes' => $this->describeAccountAttributes(),
            'describeApplicationVersions' => $this->describeApplicationVersions(),
            'describeApplications' => $this->describeApplications(),
            'describeConfigurationOptions' => $this->describeConfigurationOptions(),
            'describeConfigurationSettings' => $this->describeConfigurationSettings(),
            'describeEnvironmentHealth' => $this->describeEnvironmentHealth(),
            'describeEnvironmentManagedActionHistory' => $this->describeEnvironmentManagedActionHistory(),
            'describeEnvironmentManagedActions' => $this->describeEnvironmentManagedActions(),
            'describeEnvironmentResources' => $this->describeEnvironmentResources(),
            'describeEnvironments' => $this->describeEnvironments(),
            'describeEvents' => $this->describeEvents(),
            'describeInstancesHealth' => $this->describeInstancesHealth(),
            'describePlatformVersion' => $this->describePlatformVersion(),
            'disassociateEnvironmentOperationsRole' => $this->disassociateEnvironmentOperationsRole(),
            'listAvailableSolutionStacks' => $this->listAvailableSolutionStacks(),
            'listPlatformBranches' => $this->listPlatformBranches(),
            'listPlatformVersions' => $this->listPlatformVersions(),
            'listTagsForResource' => $this->listTagsForResource(),
            'rebuildEnvironment' => $this->rebuildEnvironment(),
            'requestEnvironmentInfo' => $this->requestEnvironmentInfo(),
            'restartAppServer' => $this->restartAppServer(),
            'retrieveEnvironmentInfo' => $this->retrieveEnvironmentInfo(),
            'swapEnvironmentCNAMEs' => $this->swapEnvironmentCNAMEs(),
            'terminateEnvironment' => $this->terminateEnvironment(),
            'updateApplication' => $this->updateApplication(),
            'updateApplicationResourceLifecycle' => $this->updateApplicationResourceLifecycle(),
            'updateApplicationVersion' => $this->updateApplicationVersion(),
            'updateConfigurationTemplate' => $this->updateConfigurationTemplate(),
            'updateEnvironment' => $this->updateEnvironment(),
            'updateTagsForResource' => $this->updateTagsForResource(),
            'validateConfigurationSettings' => $this->validateConfigurationSettings(),
        };
    }
    private function abortEnvironmentUpdate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function applyEnvironmentManagedAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ActionId'),
                new \PHPStan\Type\Constant\ConstantStringType('ActionDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('ActionType'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceRefresh'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformUpdate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function associateEnvironmentOperationsRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function checkDNSAvailability(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Available'),
                new \PHPStan\Type\Constant\ConstantStringType('FullyQualifiedCNAME'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function composeEnvironments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Environments'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('SolutionStackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('AbortableOperationInProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Health'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentLinks'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationsRole'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Aborting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Launching'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                        new \PHPStan\Type\Constant\ConstantStringType('LinkingFrom'),
                        new \PHPStan\Type\Constant\ConstantStringType('LinkingTo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terminating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terminated'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Green'),
                        new \PHPStan\Type\Constant\ConstantStringType('Yellow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Red'),
                        new \PHPStan\Type\Constant\ConstantStringType('Grey'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NoData'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ok'),
                        new \PHPStan\Type\Constant\ConstantStringType('Info'),
                        new \PHPStan\Type\Constant\ConstantStringType('Warning'),
                        new \PHPStan\Type\Constant\ConstantStringType('Degraded'),
                        new \PHPStan\Type\Constant\ConstantStringType('Severe'),
                        new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LoadBalancer'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                            new \PHPStan\Type\Constant\ConstantStringType('Listeners'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LinkName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnvironmentName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Application'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Versions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationTemplates'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceLifecycleConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionLifecycleConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxCountRule'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxAgeRule'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeleteSourceFromS3'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxAgeInDays'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeleteSourceFromS3'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createApplicationVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceBuildInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('BuildArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceBundle'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceLocation'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Git'),
                            new \PHPStan\Type\Constant\ConstantStringType('Zip'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CodeCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Processed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unprocessed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Building'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createConfigurationTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SolutionStackName'),
                new \PHPStan\Type\Constant\ConstantStringType('PlatformArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('DateCreated'),
                new \PHPStan\Type\Constant\ConstantStringType('DateUpdated'),
                new \PHPStan\Type\Constant\ConstantStringType('OptionSettings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('deployed'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('failed'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function createEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionLabel'),
                new \PHPStan\Type\Constant\ConstantStringType('SolutionStackName'),
                new \PHPStan\Type\Constant\ConstantStringType('PlatformArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointURL'),
                new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                new \PHPStan\Type\Constant\ConstantStringType('DateCreated'),
                new \PHPStan\Type\Constant\ConstantStringType('DateUpdated'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('AbortableOperationInProgress'),
                new \PHPStan\Type\Constant\ConstantStringType('Health'),
                new \PHPStan\Type\Constant\ConstantStringType('HealthStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentLinks'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentArn'),
                new \PHPStan\Type\Constant\ConstantStringType('OperationsRole'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Aborting'),
                    new \PHPStan\Type\Constant\ConstantStringType('Launching'),
                    new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkingFrom'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkingTo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terminating'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terminated'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Green'),
                    new \PHPStan\Type\Constant\ConstantStringType('Yellow'),
                    new \PHPStan\Type\Constant\ConstantStringType('Red'),
                    new \PHPStan\Type\Constant\ConstantStringType('Grey'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NoData'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ok'),
                    new \PHPStan\Type\Constant\ConstantStringType('Info'),
                    new \PHPStan\Type\Constant\ConstantStringType('Warning'),
                    new \PHPStan\Type\Constant\ConstantStringType('Degraded'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severe'),
                    new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancer'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                        new \PHPStan\Type\Constant\ConstantStringType('Listeners'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LinkName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPlatformVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PlatformSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('Builder'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformCategory'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingSystemName'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingSystemVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedTierList'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedAddonList'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformLifecycleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformBranchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformBranchLifecycleState'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createStorageLocation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
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
    private function deleteApplicationVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteConfigurationTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteEnvironmentConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deletePlatformVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PlatformSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformCategory'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingSystemName'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingSystemVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedTierList'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedAddonList'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformLifecycleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformBranchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformBranchLifecycleState'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeAccountAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceQuotas'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationTemplateQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomPlatformQuota'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeApplicationVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceBuildInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('BuildArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceBundle'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceLocation'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Git'),
                            new \PHPStan\Type\Constant\ConstantStringType('Zip'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CodeCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Processed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unprocessed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Building'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Applications'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Versions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationTemplates'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceLifecycleConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionLifecycleConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxCountRule'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxAgeRule'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeleteSourceFromS3'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxAgeInDays'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeleteSourceFromS3'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeConfigurationOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SolutionStackName'),
                new \PHPStan\Type\Constant\ConstantStringType('PlatformArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Options'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeSeverity'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserDefined'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValueType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValueOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxLength'),
                    new \PHPStan\Type\Constant\ConstantStringType('Regex'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Scalar'),
                        new \PHPStan\Type\Constant\ConstantStringType('List'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pattern'),
                        new \PHPStan\Type\Constant\ConstantStringType('Label'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeConfigurationSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSettings'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SolutionStackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptionSettings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('deployed'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('OptionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function describeEnvironmentHealth(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('HealthStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Color'),
                new \PHPStan\Type\Constant\ConstantStringType('Causes'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('InstancesHealth'),
                new \PHPStan\Type\Constant\ConstantStringType('RefreshedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Green'),
                    new \PHPStan\Type\Constant\ConstantStringType('Yellow'),
                    new \PHPStan\Type\Constant\ConstantStringType('Red'),
                    new \PHPStan\Type\Constant\ConstantStringType('Grey'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusCodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Latency'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status2xx'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status3xx'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status4xx'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status5xx'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('P999'),
                        new \PHPStan\Type\Constant\ConstantStringType('P99'),
                        new \PHPStan\Type\Constant\ConstantStringType('P95'),
                        new \PHPStan\Type\Constant\ConstantStringType('P90'),
                        new \PHPStan\Type\Constant\ConstantStringType('P85'),
                        new \PHPStan\Type\Constant\ConstantStringType('P75'),
                        new \PHPStan\Type\Constant\ConstantStringType('P50'),
                        new \PHPStan\Type\Constant\ConstantStringType('P10'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NoData'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ok'),
                    new \PHPStan\Type\Constant\ConstantStringType('Info'),
                    new \PHPStan\Type\Constant\ConstantStringType('Warning'),
                    new \PHPStan\Type\Constant\ConstantStringType('Degraded'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severe'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeEnvironmentManagedActionHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ManagedActionHistoryItems'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('FinishedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceRefresh'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlatformUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateCancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('CancellationFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('RollbackFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('RollbackSuccessful'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidEnvironmentState'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsError'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeEnvironmentManagedActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ManagedActions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('WindowStartTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceRefresh'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlatformUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Scheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Running'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function describeEnvironmentResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentResources'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('Instances'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplates'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancers'),
                    new \PHPStan\Type\Constant\ConstantStringType('Triggers'),
                    new \PHPStan\Type\Constant\ConstantStringType('Queues'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('URL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeEnvironments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Environments'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('SolutionStackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('AbortableOperationInProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Health'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentLinks'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationsRole'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Aborting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Launching'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                        new \PHPStan\Type\Constant\ConstantStringType('LinkingFrom'),
                        new \PHPStan\Type\Constant\ConstantStringType('LinkingTo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terminating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terminated'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Green'),
                        new \PHPStan\Type\Constant\ConstantStringType('Yellow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Red'),
                        new \PHPStan\Type\Constant\ConstantStringType('Grey'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NoData'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ok'),
                        new \PHPStan\Type\Constant\ConstantStringType('Info'),
                        new \PHPStan\Type\Constant\ConstantStringType('Warning'),
                        new \PHPStan\Type\Constant\ConstantStringType('Degraded'),
                        new \PHPStan\Type\Constant\ConstantStringType('Severe'),
                        new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LoadBalancer'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                            new \PHPStan\Type\Constant\ConstantStringType('Listeners'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LinkName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnvironmentName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Events'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EventDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('FATAL'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeInstancesHealth(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceHealthList'),
                new \PHPStan\Type\Constant\ConstantStringType('RefreshedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Color'),
                    new \PHPStan\Type\Constant\ConstantStringType('Causes'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationMetrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('System'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deployment'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusCodes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Latency'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status2xx'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status3xx'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status4xx'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status5xx'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('P999'),
                            new \PHPStan\Type\Constant\ConstantStringType('P99'),
                            new \PHPStan\Type\Constant\ConstantStringType('P95'),
                            new \PHPStan\Type\Constant\ConstantStringType('P90'),
                            new \PHPStan\Type\Constant\ConstantStringType('P85'),
                            new \PHPStan\Type\Constant\ConstantStringType('P75'),
                            new \PHPStan\Type\Constant\ConstantStringType('P50'),
                            new \PHPStan\Type\Constant\ConstantStringType('P10'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CPUUtilization'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoadAverage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('User'),
                            new \PHPStan\Type\Constant\ConstantStringType('Nice'),
                            new \PHPStan\Type\Constant\ConstantStringType('System'),
                            new \PHPStan\Type\Constant\ConstantStringType('Idle'),
                            new \PHPStan\Type\Constant\ConstantStringType('IOWait'),
                            new \PHPStan\Type\Constant\ConstantStringType('IRQ'),
                            new \PHPStan\Type\Constant\ConstantStringType('SoftIRQ'),
                            new \PHPStan\Type\Constant\ConstantStringType('Privileged'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VersionLabel'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeploymentTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describePlatformVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PlatformDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SolutionStackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformCategory'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Maintainer'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingSystemName'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingSystemVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProgrammingLanguages'),
                    new \PHPStan\Type\Constant\ConstantStringType('Frameworks'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomAmiList'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedTierList'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedAddonList'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformLifecycleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformBranchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformBranchLifecycleState'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VirtualizationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function disassociateEnvironmentOperationsRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function listAvailableSolutionStacks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SolutionStacks'),
                new \PHPStan\Type\Constant\ConstantStringType('SolutionStackDetails'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SolutionStackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermittedFileTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
            ]),
        ]);
    }
    private function listPlatformBranches(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PlatformBranchSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformName'),
                    new \PHPStan\Type\Constant\ConstantStringType('BranchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LifecycleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('BranchOrder'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedTierList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPlatformVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PlatformSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformCategory'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingSystemName'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperatingSystemVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedTierList'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedAddonList'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformLifecycleState'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformBranchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformBranchLifecycleState'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
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
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceTags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function rebuildEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function requestEnvironmentInfo(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function restartAppServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function retrieveEnvironmentInfo(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentInfo'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InfoType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ec2InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SampleTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('tail'),
                        new \PHPStan\Type\Constant\ConstantStringType('bundle'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function swapEnvironmentCNAMEs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function terminateEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionLabel'),
                new \PHPStan\Type\Constant\ConstantStringType('SolutionStackName'),
                new \PHPStan\Type\Constant\ConstantStringType('PlatformArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointURL'),
                new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                new \PHPStan\Type\Constant\ConstantStringType('DateCreated'),
                new \PHPStan\Type\Constant\ConstantStringType('DateUpdated'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('AbortableOperationInProgress'),
                new \PHPStan\Type\Constant\ConstantStringType('Health'),
                new \PHPStan\Type\Constant\ConstantStringType('HealthStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentLinks'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentArn'),
                new \PHPStan\Type\Constant\ConstantStringType('OperationsRole'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Aborting'),
                    new \PHPStan\Type\Constant\ConstantStringType('Launching'),
                    new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkingFrom'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkingTo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terminating'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terminated'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Green'),
                    new \PHPStan\Type\Constant\ConstantStringType('Yellow'),
                    new \PHPStan\Type\Constant\ConstantStringType('Red'),
                    new \PHPStan\Type\Constant\ConstantStringType('Grey'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NoData'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ok'),
                    new \PHPStan\Type\Constant\ConstantStringType('Info'),
                    new \PHPStan\Type\Constant\ConstantStringType('Warning'),
                    new \PHPStan\Type\Constant\ConstantStringType('Degraded'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severe'),
                    new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancer'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                        new \PHPStan\Type\Constant\ConstantStringType('Listeners'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LinkName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Application'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Versions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigurationTemplates'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceLifecycleConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionLifecycleConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxCountRule'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxAgeRule'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeleteSourceFromS3'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxAgeInDays'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeleteSourceFromS3'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateApplicationResourceLifecycle(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceLifecycleConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionLifecycleConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCountRule'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxAgeRule'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeleteSourceFromS3'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxAgeInDays'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeleteSourceFromS3'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateApplicationVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceBuildInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('BuildArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceBundle'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceLocation'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Git'),
                            new \PHPStan\Type\Constant\ConstantStringType('Zip'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CodeCommit'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Processed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unprocessed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Building'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateConfigurationTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SolutionStackName'),
                new \PHPStan\Type\Constant\ConstantStringType('PlatformArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('DateCreated'),
                new \PHPStan\Type\Constant\ConstantStringType('DateUpdated'),
                new \PHPStan\Type\Constant\ConstantStringType('OptionSettings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('deployed'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('failed'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function updateEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionLabel'),
                new \PHPStan\Type\Constant\ConstantStringType('SolutionStackName'),
                new \PHPStan\Type\Constant\ConstantStringType('PlatformArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointURL'),
                new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                new \PHPStan\Type\Constant\ConstantStringType('DateCreated'),
                new \PHPStan\Type\Constant\ConstantStringType('DateUpdated'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('AbortableOperationInProgress'),
                new \PHPStan\Type\Constant\ConstantStringType('Health'),
                new \PHPStan\Type\Constant\ConstantStringType('HealthStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentLinks'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentArn'),
                new \PHPStan\Type\Constant\ConstantStringType('OperationsRole'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Aborting'),
                    new \PHPStan\Type\Constant\ConstantStringType('Launching'),
                    new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkingFrom'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkingTo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terminating'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terminated'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Green'),
                    new \PHPStan\Type\Constant\ConstantStringType('Yellow'),
                    new \PHPStan\Type\Constant\ConstantStringType('Red'),
                    new \PHPStan\Type\Constant\ConstantStringType('Grey'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NoData'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ok'),
                    new \PHPStan\Type\Constant\ConstantStringType('Info'),
                    new \PHPStan\Type\Constant\ConstantStringType('Warning'),
                    new \PHPStan\Type\Constant\ConstantStringType('Degraded'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severe'),
                    new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancer'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                        new \PHPStan\Type\Constant\ConstantStringType('Listeners'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LinkName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function validateConfigurationSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Messages'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptionName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('warning'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
}