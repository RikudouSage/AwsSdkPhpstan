<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class AppConfigClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\AppConfig\AppConfigClient>
     */
    public function getClass(): string
    {
        return \Aws\AppConfig\AppConfigClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createApplication',
            'createConfigurationProfile',
            'createDeploymentStrategy',
            'createEnvironment',
            'createExtension',
            'createExtensionAssociation',
            'createHostedConfigurationVersion',
            'deleteApplication',
            'deleteConfigurationProfile',
            'deleteDeploymentStrategy',
            'deleteEnvironment',
            'deleteExtension',
            'deleteExtensionAssociation',
            'deleteHostedConfigurationVersion',
            'getAccountSettings',
            'getApplication',
            'getConfiguration',
            'getConfigurationProfile',
            'getDeployment',
            'getDeploymentStrategy',
            'getEnvironment',
            'getExtension',
            'getExtensionAssociation',
            'getHostedConfigurationVersion',
            'listApplications',
            'listConfigurationProfiles',
            'listDeploymentStrategies',
            'listDeployments',
            'listEnvironments',
            'listExtensionAssociations',
            'listExtensions',
            'listHostedConfigurationVersions',
            'listTagsForResource',
            'startDeployment',
            'stopDeployment',
            'tagResource',
            'untagResource',
            'updateAccountSettings',
            'updateApplication',
            'updateConfigurationProfile',
            'updateDeploymentStrategy',
            'updateEnvironment',
            'updateExtension',
            'updateExtensionAssociation',
            'validateConfiguration',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createApplication' => $this->createApplication(),
            'createConfigurationProfile' => $this->createConfigurationProfile(),
            'createDeploymentStrategy' => $this->createDeploymentStrategy(),
            'createEnvironment' => $this->createEnvironment(),
            'createExtension' => $this->createExtension(),
            'createExtensionAssociation' => $this->createExtensionAssociation(),
            'createHostedConfigurationVersion' => $this->createHostedConfigurationVersion(),
            'deleteApplication' => $this->deleteApplication(),
            'deleteConfigurationProfile' => $this->deleteConfigurationProfile(),
            'deleteDeploymentStrategy' => $this->deleteDeploymentStrategy(),
            'deleteEnvironment' => $this->deleteEnvironment(),
            'deleteExtension' => $this->deleteExtension(),
            'deleteExtensionAssociation' => $this->deleteExtensionAssociation(),
            'deleteHostedConfigurationVersion' => $this->deleteHostedConfigurationVersion(),
            'getAccountSettings' => $this->getAccountSettings(),
            'getApplication' => $this->getApplication(),
            'getConfiguration' => $this->getConfiguration(),
            'getConfigurationProfile' => $this->getConfigurationProfile(),
            'getDeployment' => $this->getDeployment(),
            'getDeploymentStrategy' => $this->getDeploymentStrategy(),
            'getEnvironment' => $this->getEnvironment(),
            'getExtension' => $this->getExtension(),
            'getExtensionAssociation' => $this->getExtensionAssociation(),
            'getHostedConfigurationVersion' => $this->getHostedConfigurationVersion(),
            'listApplications' => $this->listApplications(),
            'listConfigurationProfiles' => $this->listConfigurationProfiles(),
            'listDeploymentStrategies' => $this->listDeploymentStrategies(),
            'listDeployments' => $this->listDeployments(),
            'listEnvironments' => $this->listEnvironments(),
            'listExtensionAssociations' => $this->listExtensionAssociations(),
            'listExtensions' => $this->listExtensions(),
            'listHostedConfigurationVersions' => $this->listHostedConfigurationVersions(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startDeployment' => $this->startDeployment(),
            'stopDeployment' => $this->stopDeployment(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAccountSettings' => $this->updateAccountSettings(),
            'updateApplication' => $this->updateApplication(),
            'updateConfigurationProfile' => $this->updateConfigurationProfile(),
            'updateDeploymentStrategy' => $this->updateDeploymentStrategy(),
            'updateEnvironment' => $this->updateEnvironment(),
            'updateExtension' => $this->updateExtension(),
            'updateExtensionAssociation' => $this->updateExtensionAssociation(),
            'validateConfiguration' => $this->validateConfiguration(),
        };
    }
    private function createApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createConfigurationProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('RetrievalRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Validators'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyIdentifier'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Content'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('JSON_SCHEMA'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDeploymentStrategy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentDurationInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('GrowthType'),
                new \PHPStan\Type\Constant\ConstantStringType('GrowthFactor'),
                new \PHPStan\Type\Constant\ConstantStringType('FinalBakeTimeInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicateTo'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LINEAR'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPONENTIAL'),
                ]),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSM_DOCUMENT'),
                ]),
            ]),
        ]);
    }
    private function createEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('Monitors'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_DEPLOYMENT'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLED_BACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVERTED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmRoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createExtension(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PRE_CREATE_HOSTED_CONFIGURATION_VERSION'),
                    new \PHPStan\Type\Constant\ConstantStringType('PRE_START_DEPLOYMENT'),
                    new \PHPStan\Type\Constant\ConstantStringType('AT_DEPLOYMENT_TICK'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON_DEPLOYMENT_START'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON_DEPLOYMENT_STEP'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON_DEPLOYMENT_BAKING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON_DEPLOYMENT_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON_DEPLOYMENT_ROLLED_BACK'),
                ]), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]))),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Required'),
                    new \PHPStan\Type\Constant\ConstantStringType('Dynamic'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function createExtensionAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('ExtensionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                new \PHPStan\Type\Constant\ConstantStringType('ExtensionVersionNumber'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function createHostedConfigurationVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationProfileId'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Content'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionLabel'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
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
    private function deleteConfigurationProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDeploymentStrategy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteExtension(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteExtensionAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteHostedConfigurationVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getAccountSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectionPeriodInMinutes'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Content'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getConfigurationProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('RetrievalRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Validators'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyIdentifier'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Content'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('JSON_SCHEMA'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentStrategyId'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationProfileId'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationName'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationLocationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentDurationInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('GrowthType'),
                new \PHPStan\Type\Constant\ConstantStringType('GrowthFactor'),
                new \PHPStan\Type\Constant\ConstantStringType('FinalBakeTimeInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('EventLog'),
                new \PHPStan\Type\Constant\ConstantStringType('PercentageComplete'),
                new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('CompletedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('AppliedExtensions'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionLabel'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LINEAR'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPONENTIAL'),
                ]),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BAKING'),
                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLED_BACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVERTED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TriggeredBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActionInvocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('OccurredAt'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PERCENTAGE_UPDATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('BAKE_TIME_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REVERT_COMPLETED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('USER'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPCONFIG'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUDWATCH_ALARM'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ExtensionIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('ActionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Uri'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('InvocationId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExtensionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExtensionAssociationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDeploymentStrategy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentDurationInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('GrowthType'),
                new \PHPStan\Type\Constant\ConstantStringType('GrowthFactor'),
                new \PHPStan\Type\Constant\ConstantStringType('FinalBakeTimeInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicateTo'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LINEAR'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPONENTIAL'),
                ]),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSM_DOCUMENT'),
                ]),
            ]),
        ]);
    }
    private function getEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('Monitors'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_DEPLOYMENT'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLED_BACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVERTED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmRoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getExtension(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PRE_CREATE_HOSTED_CONFIGURATION_VERSION'),
                    new \PHPStan\Type\Constant\ConstantStringType('PRE_START_DEPLOYMENT'),
                    new \PHPStan\Type\Constant\ConstantStringType('AT_DEPLOYMENT_TICK'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON_DEPLOYMENT_START'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON_DEPLOYMENT_STEP'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON_DEPLOYMENT_BAKING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON_DEPLOYMENT_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON_DEPLOYMENT_ROLLED_BACK'),
                ]), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]))),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Required'),
                    new \PHPStan\Type\Constant\ConstantStringType('Dynamic'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function getExtensionAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('ExtensionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                new \PHPStan\Type\Constant\ConstantStringType('ExtensionVersionNumber'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getHostedConfigurationVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationProfileId'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Content'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionLabel'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listConfigurationProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocationUri'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValidatorTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('JSON_SCHEMA'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDeploymentStrategies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeploymentDurationInMinutes'),
                        new \PHPStan\Type\Constant\ConstantStringType('GrowthType'),
                        new \PHPStan\Type\Constant\ConstantStringType('GrowthFactor'),
                        new \PHPStan\Type\Constant\ConstantStringType('FinalBakeTimeInMinutes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicateTo'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LINEAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPONENTIAL'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSM_DOCUMENT'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDeployments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DeploymentNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeploymentDurationInMinutes'),
                        new \PHPStan\Type\Constant\ConstantStringType('GrowthType'),
                        new \PHPStan\Type\Constant\ConstantStringType('GrowthFactor'),
                        new \PHPStan\Type\Constant\ConstantStringType('FinalBakeTimeInMinutes'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PercentageComplete'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionLabel'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LINEAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPONENTIAL'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BAKING'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLED_BACK'),
                            new \PHPStan\Type\Constant\ConstantStringType('REVERTED'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEnvironments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Monitors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_DEPLOYMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOYING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLED_BACK'),
                            new \PHPStan\Type\Constant\ConstantStringType('REVERTED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AlarmArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('AlarmRoleArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listExtensionAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExtensionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listExtensions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listHostedConfigurationVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigurationProfileId'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionLabel'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
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
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function startDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentStrategyId'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationProfileId'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationName'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationLocationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentDurationInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('GrowthType'),
                new \PHPStan\Type\Constant\ConstantStringType('GrowthFactor'),
                new \PHPStan\Type\Constant\ConstantStringType('FinalBakeTimeInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('EventLog'),
                new \PHPStan\Type\Constant\ConstantStringType('PercentageComplete'),
                new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('CompletedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('AppliedExtensions'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionLabel'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LINEAR'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPONENTIAL'),
                ]),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BAKING'),
                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLED_BACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVERTED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TriggeredBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActionInvocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('OccurredAt'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PERCENTAGE_UPDATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('BAKE_TIME_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REVERT_COMPLETED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('USER'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPCONFIG'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUDWATCH_ALARM'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ExtensionIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('ActionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Uri'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('InvocationId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExtensionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExtensionAssociationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentStrategyId'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationProfileId'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationName'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationLocationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentDurationInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('GrowthType'),
                new \PHPStan\Type\Constant\ConstantStringType('GrowthFactor'),
                new \PHPStan\Type\Constant\ConstantStringType('FinalBakeTimeInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('EventLog'),
                new \PHPStan\Type\Constant\ConstantStringType('PercentageComplete'),
                new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('CompletedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('AppliedExtensions'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionLabel'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LINEAR'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPONENTIAL'),
                ]),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BAKING'),
                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLED_BACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVERTED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TriggeredBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActionInvocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('OccurredAt'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PERCENTAGE_UPDATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('BAKE_TIME_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOYMENT_COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REVERT_COMPLETED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('USER'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPCONFIG'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUDWATCH_ALARM'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ExtensionIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('ActionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Uri'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('InvocationId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExtensionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExtensionAssociationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
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
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateAccountSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeletionProtection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtectionPeriodInMinutes'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function updateApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateConfigurationProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('RetrievalRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Validators'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyIdentifier'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Content'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('JSON_SCHEMA'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateDeploymentStrategy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentDurationInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('GrowthType'),
                new \PHPStan\Type\Constant\ConstantStringType('GrowthFactor'),
                new \PHPStan\Type\Constant\ConstantStringType('FinalBakeTimeInMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicateTo'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LINEAR'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPONENTIAL'),
                ]),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSM_DOCUMENT'),
                ]),
            ]),
        ]);
    }
    private function updateEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('Monitors'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('READY_FOR_DEPLOYMENT'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLED_BACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('REVERTED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmRoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function updateExtension(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PRE_CREATE_HOSTED_CONFIGURATION_VERSION'),
                    new \PHPStan\Type\Constant\ConstantStringType('PRE_START_DEPLOYMENT'),
                    new \PHPStan\Type\Constant\ConstantStringType('AT_DEPLOYMENT_TICK'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON_DEPLOYMENT_START'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON_DEPLOYMENT_STEP'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON_DEPLOYMENT_BAKING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON_DEPLOYMENT_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON_DEPLOYMENT_ROLLED_BACK'),
                ]), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]))),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Required'),
                    new \PHPStan\Type\Constant\ConstantStringType('Dynamic'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function updateExtensionAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('ExtensionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                new \PHPStan\Type\Constant\ConstantStringType('ExtensionVersionNumber'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function validateConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}