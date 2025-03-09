<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class AppRunnerClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\AppRunner\AppRunnerClient>
     */
    public function getClass(): string
    {
        return \Aws\AppRunner\AppRunnerClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateCustomDomain',
            'createAutoScalingConfiguration',
            'createConnection',
            'createObservabilityConfiguration',
            'createService',
            'createVpcConnector',
            'createVpcIngressConnection',
            'deleteAutoScalingConfiguration',
            'deleteConnection',
            'deleteObservabilityConfiguration',
            'deleteService',
            'deleteVpcConnector',
            'deleteVpcIngressConnection',
            'describeAutoScalingConfiguration',
            'describeCustomDomains',
            'describeObservabilityConfiguration',
            'describeService',
            'describeVpcConnector',
            'describeVpcIngressConnection',
            'disassociateCustomDomain',
            'listAutoScalingConfigurations',
            'listConnections',
            'listObservabilityConfigurations',
            'listOperations',
            'listServices',
            'listServicesForAutoScalingConfiguration',
            'listTagsForResource',
            'listVpcConnectors',
            'listVpcIngressConnections',
            'pauseService',
            'resumeService',
            'startDeployment',
            'tagResource',
            'untagResource',
            'updateDefaultAutoScalingConfiguration',
            'updateService',
            'updateVpcIngressConnection',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateCustomDomain' => $this->associateCustomDomain(),
            'createAutoScalingConfiguration' => $this->createAutoScalingConfiguration(),
            'createConnection' => $this->createConnection(),
            'createObservabilityConfiguration' => $this->createObservabilityConfiguration(),
            'createService' => $this->createService(),
            'createVpcConnector' => $this->createVpcConnector(),
            'createVpcIngressConnection' => $this->createVpcIngressConnection(),
            'deleteAutoScalingConfiguration' => $this->deleteAutoScalingConfiguration(),
            'deleteConnection' => $this->deleteConnection(),
            'deleteObservabilityConfiguration' => $this->deleteObservabilityConfiguration(),
            'deleteService' => $this->deleteService(),
            'deleteVpcConnector' => $this->deleteVpcConnector(),
            'deleteVpcIngressConnection' => $this->deleteVpcIngressConnection(),
            'describeAutoScalingConfiguration' => $this->describeAutoScalingConfiguration(),
            'describeCustomDomains' => $this->describeCustomDomains(),
            'describeObservabilityConfiguration' => $this->describeObservabilityConfiguration(),
            'describeService' => $this->describeService(),
            'describeVpcConnector' => $this->describeVpcConnector(),
            'describeVpcIngressConnection' => $this->describeVpcIngressConnection(),
            'disassociateCustomDomain' => $this->disassociateCustomDomain(),
            'listAutoScalingConfigurations' => $this->listAutoScalingConfigurations(),
            'listConnections' => $this->listConnections(),
            'listObservabilityConfigurations' => $this->listObservabilityConfigurations(),
            'listOperations' => $this->listOperations(),
            'listServices' => $this->listServices(),
            'listServicesForAutoScalingConfiguration' => $this->listServicesForAutoScalingConfiguration(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listVpcConnectors' => $this->listVpcConnectors(),
            'listVpcIngressConnections' => $this->listVpcIngressConnections(),
            'pauseService' => $this->pauseService(),
            'resumeService' => $this->resumeService(),
            'startDeployment' => $this->startDeployment(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateDefaultAutoScalingConfiguration' => $this->updateDefaultAutoScalingConfiguration(),
            'updateService' => $this->updateService(),
            'updateVpcIngressConnection' => $this->updateVpcIngressConnection(),
        };
    }
    private function associateCustomDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DNSTarget'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CustomDomain'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcDNSTargets'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableWWWSubdomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateValidationRecords'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING_VALIDATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CERTIFICATE_DNS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('BINDING_CERTIFICATE'),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcIngressConnectionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createAutoScalingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('Latest'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('HasAssociatedService'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function createConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Connection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_HANDSHAKE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createObservabilityConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TraceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfigurationRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('Latest'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Vendor'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('AWSXRAY'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Service'),
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPERATION_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CodeRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoDeploymentsEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticationConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RepositoryUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceCodeVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('CodeConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceDirectory'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('BRANCH'),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSource'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeConfigurationValues'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('REPOSITORY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('API'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BuildCommand'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StartCommand'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentVariables'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentSecrets'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PYTHON_3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_12'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_14'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CORRETTO_8'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CORRETTO_11'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_16'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GO_1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DOTNET_6'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PHP_81'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RUBY_31'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PYTHON_311'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_18'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ImageIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageRepositoryType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentVariables'),
                                new \PHPStan\Type\Constant\ConstantStringType('StartCommand'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentSecrets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ECR'),
                                new \PHPStan\Type\Constant\ConstantStringType('ECR_PUBLIC'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessRoleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceRoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthyThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnhealthyThreshold'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('HasAssociatedService'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EgressConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IngressConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EgressType'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConnectorArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IsPubliclyAccessible'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                            new \PHPStan\Type\Constant\ConstantStringType('DUAL_STACK'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ObservabilityEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfigurationArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createVpcConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcConnector'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConnectorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConnectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConnectorRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createVpcIngressConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcIngressConnection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcIngressConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcIngressConnectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngressVpcConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CREATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_CREATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_DELETION'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deleteAutoScalingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('Latest'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('HasAssociatedService'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function deleteConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Connection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_HANDSHAKE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deleteObservabilityConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TraceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfigurationRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('Latest'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Vendor'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('AWSXRAY'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deleteService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Service'),
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPERATION_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CodeRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoDeploymentsEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticationConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RepositoryUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceCodeVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('CodeConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceDirectory'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('BRANCH'),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSource'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeConfigurationValues'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('REPOSITORY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('API'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BuildCommand'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StartCommand'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentVariables'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentSecrets'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PYTHON_3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_12'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_14'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CORRETTO_8'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CORRETTO_11'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_16'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GO_1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DOTNET_6'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PHP_81'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RUBY_31'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PYTHON_311'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_18'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ImageIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageRepositoryType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentVariables'),
                                new \PHPStan\Type\Constant\ConstantStringType('StartCommand'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentSecrets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ECR'),
                                new \PHPStan\Type\Constant\ConstantStringType('ECR_PUBLIC'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessRoleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceRoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthyThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnhealthyThreshold'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('HasAssociatedService'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EgressConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IngressConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EgressType'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConnectorArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IsPubliclyAccessible'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                            new \PHPStan\Type\Constant\ConstantStringType('DUAL_STACK'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ObservabilityEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfigurationArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteVpcConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcConnector'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConnectorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConnectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConnectorRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deleteVpcIngressConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcIngressConnection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcIngressConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcIngressConnectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngressVpcConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CREATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_CREATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_DELETION'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeAutoScalingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('Latest'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('HasAssociatedService'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function describeCustomDomains(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DNSTarget'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CustomDomains'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcDNSTargets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnableWWWSubdomain'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateValidationRecords'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_VALIDATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_CERTIFICATE_DNS_VALIDATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BINDING_CERTIFICATE'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcIngressConnectionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
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
    private function describeObservabilityConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TraceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfigurationRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('Latest'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Vendor'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('AWSXRAY'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Service'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPERATION_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CodeRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoDeploymentsEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticationConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RepositoryUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceCodeVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('CodeConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceDirectory'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('BRANCH'),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSource'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeConfigurationValues'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('REPOSITORY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('API'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BuildCommand'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StartCommand'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentVariables'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentSecrets'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PYTHON_3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_12'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_14'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CORRETTO_8'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CORRETTO_11'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_16'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GO_1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DOTNET_6'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PHP_81'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RUBY_31'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PYTHON_311'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_18'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ImageIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageRepositoryType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentVariables'),
                                new \PHPStan\Type\Constant\ConstantStringType('StartCommand'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentSecrets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ECR'),
                                new \PHPStan\Type\Constant\ConstantStringType('ECR_PUBLIC'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessRoleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceRoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthyThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnhealthyThreshold'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('HasAssociatedService'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EgressConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IngressConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EgressType'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConnectorArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IsPubliclyAccessible'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                            new \PHPStan\Type\Constant\ConstantStringType('DUAL_STACK'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ObservabilityEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfigurationArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeVpcConnector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcConnector'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConnectorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConnectorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConnectorRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeVpcIngressConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcIngressConnection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcIngressConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcIngressConnectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngressVpcConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CREATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_CREATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_DELETION'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function disassociateCustomDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DNSTarget'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CustomDomain'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcDNSTargets'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableWWWSubdomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateValidationRecords'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING_VALIDATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CERTIFICATE_DNS_VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('BINDING_CERTIFICATE'),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcIngressConnectionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listAutoScalingConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('HasAssociatedService'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listConnections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProviderType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_HANDSHAKE'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listObservabilityConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfigurationSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfigurationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfigurationRevision'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOperations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('START_DEPLOYMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_SERVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAUSE_SERVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESUME_SERVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_SERVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_SERVICE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_SUCCEEDED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPERATION_IN_PROGRESS'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServicesForAutoScalingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceArnList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
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
            ]),
        ]);
    }
    private function listVpcConnectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcConnectors'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConnectorName'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConnectorArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConnectorRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listVpcIngressConnections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcIngressConnectionSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcIngressConnectionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function pauseService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Service'),
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPERATION_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CodeRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoDeploymentsEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticationConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RepositoryUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceCodeVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('CodeConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceDirectory'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('BRANCH'),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSource'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeConfigurationValues'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('REPOSITORY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('API'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BuildCommand'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StartCommand'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentVariables'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentSecrets'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PYTHON_3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_12'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_14'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CORRETTO_8'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CORRETTO_11'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_16'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GO_1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DOTNET_6'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PHP_81'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RUBY_31'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PYTHON_311'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_18'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ImageIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageRepositoryType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentVariables'),
                                new \PHPStan\Type\Constant\ConstantStringType('StartCommand'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentSecrets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ECR'),
                                new \PHPStan\Type\Constant\ConstantStringType('ECR_PUBLIC'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessRoleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceRoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthyThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnhealthyThreshold'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('HasAssociatedService'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EgressConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IngressConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EgressType'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConnectorArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IsPubliclyAccessible'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                            new \PHPStan\Type\Constant\ConstantStringType('DUAL_STACK'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ObservabilityEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfigurationArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function resumeService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Service'),
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPERATION_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CodeRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoDeploymentsEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticationConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RepositoryUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceCodeVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('CodeConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceDirectory'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('BRANCH'),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSource'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeConfigurationValues'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('REPOSITORY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('API'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BuildCommand'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StartCommand'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentVariables'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentSecrets'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PYTHON_3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_12'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_14'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CORRETTO_8'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CORRETTO_11'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_16'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GO_1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DOTNET_6'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PHP_81'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RUBY_31'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PYTHON_311'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_18'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ImageIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageRepositoryType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentVariables'),
                                new \PHPStan\Type\Constant\ConstantStringType('StartCommand'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentSecrets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ECR'),
                                new \PHPStan\Type\Constant\ConstantStringType('ECR_PUBLIC'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessRoleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceRoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthyThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnhealthyThreshold'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('HasAssociatedService'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EgressConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IngressConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EgressType'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConnectorArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IsPubliclyAccessible'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                            new \PHPStan\Type\Constant\ConstantStringType('DUAL_STACK'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ObservabilityEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfigurationArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
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
    private function updateDefaultAutoScalingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('Latest'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrency'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('HasAssociatedService'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function updateService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Service'),
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPERATION_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CodeRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageRepository'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoDeploymentsEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticationConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RepositoryUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceCodeVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('CodeConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceDirectory'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('BRANCH'),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSource'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeConfigurationValues'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('REPOSITORY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('API'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BuildCommand'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StartCommand'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentVariables'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentSecrets'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PYTHON_3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_12'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_14'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CORRETTO_8'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CORRETTO_11'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_16'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GO_1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DOTNET_6'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PHP_81'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RUBY_31'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PYTHON_311'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NODEJS_18'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ImageIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageRepositoryType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentVariables'),
                                new \PHPStan\Type\Constant\ConstantStringType('StartCommand'),
                                new \PHPStan\Type\Constant\ConstantStringType('Port'),
                                new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironmentSecrets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ECR'),
                                new \PHPStan\Type\Constant\ConstantStringType('ECR_PUBLIC'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessRoleArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                        new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceRoleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthyThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnhealthyThreshold'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoScalingConfigurationRevision'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('HasAssociatedService'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EgressConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IngressConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EgressType'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConnectorArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IsPubliclyAccessible'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                            new \PHPStan\Type\Constant\ConstantStringType('DUAL_STACK'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ObservabilityEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObservabilityConfigurationArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateVpcIngressConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcIngressConnection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcIngressConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcIngressConnectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngressVpcConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CREATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_CREATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_DELETION'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
}