<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MWAAClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MWAA\MWAAClient>
     */
    public function getClass(): string
    {
        return \Aws\MWAA\MWAAClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createCliToken',
            'createEnvironment',
            'createWebLoginToken',
            'deleteEnvironment',
            'getEnvironment',
            'invokeRestApi',
            'listEnvironments',
            'listTagsForResource',
            'publishMetrics',
            'tagResource',
            'untagResource',
            'updateEnvironment',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createCliToken' => $this->createCliToken(),
            'createEnvironment' => $this->createEnvironment(),
            'createWebLoginToken' => $this->createWebLoginToken(),
            'deleteEnvironment' => $this->deleteEnvironment(),
            'getEnvironment' => $this->getEnvironment(),
            'invokeRestApi' => $this->invokeRestApi(),
            'listEnvironments' => $this->listEnvironments(),
            'listTagsForResource' => $this->listTagsForResource(),
            'publishMetrics' => $this->publishMetrics(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateEnvironment' => $this->updateEnvironment(),
        };
    }
    private function createCliToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CliToken'),
                new \PHPStan\Type\Constant\ConstantStringType('WebServerHostname'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWebLoginToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WebToken'),
                new \PHPStan\Type\Constant\ConstantStringType('WebServerHostname'),
                new \PHPStan\Type\Constant\ConstantStringType('IamIdentity'),
                new \PHPStan\Type\Constant\ConstantStringType('AirflowIdentity'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Environment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('WebserverUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('AirflowVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceBucketArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DagS3Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('PluginsS3Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('PluginsS3ObjectVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequirementsS3Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequirementsS3ObjectVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartupScriptS3Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartupScriptS3ObjectVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AirflowConfigurationOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxWorkers'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdate'),
                    new \PHPStan\Type\Constant\ConstantStringType('WeeklyMaintenanceWindowStart'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('WebserverAccessMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinWorkers'),
                    new \PHPStan\Type\Constant\ConstantStringType('Schedulers'),
                    new \PHPStan\Type\Constant\ConstantStringType('WebserverVpcEndpointService'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseVpcEndpointService'),
                    new \PHPStan\Type\Constant\ConstantStringType('CeleryExecutorQueue'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointManagement'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinWebservers'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxWebservers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNAVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING_SNAPSHOT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DagProcessingLogs'),
                        new \PHPStan\Type\Constant\ConstantStringType('SchedulerLogs'),
                        new \PHPStan\Type\Constant\ConstantStringType('WebserverLogs'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkerLogs'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaskLogs'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogGroupArn'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogGroupArn'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogGroupArn'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogGroupArn'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogGroupArn'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Error'),
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_ONLY'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function invokeRestApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RestApiStatusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('RestApiResponse'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([], []),
            ]),
        ]);
    }
    private function listEnvironments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Environments'),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function publishMetrics(): ?\PHPStan\Type\Type
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
    private function updateEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}