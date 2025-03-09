<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class EMRContainersClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\EMRContainers\EMRContainersClient>
     */
    public function getClass(): string
    {
        return \Aws\EMRContainers\EMRContainersClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelJobRun',
            'createJobTemplate',
            'createManagedEndpoint',
            'createSecurityConfiguration',
            'createVirtualCluster',
            'deleteJobTemplate',
            'deleteManagedEndpoint',
            'deleteVirtualCluster',
            'describeJobRun',
            'describeJobTemplate',
            'describeManagedEndpoint',
            'describeSecurityConfiguration',
            'describeVirtualCluster',
            'getManagedEndpointSessionCredentials',
            'listJobRuns',
            'listJobTemplates',
            'listManagedEndpoints',
            'listSecurityConfigurations',
            'listTagsForResource',
            'listVirtualClusters',
            'startJobRun',
            'tagResource',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelJobRun' => $this->cancelJobRun(),
            'createJobTemplate' => $this->createJobTemplate(),
            'createManagedEndpoint' => $this->createManagedEndpoint(),
            'createSecurityConfiguration' => $this->createSecurityConfiguration(),
            'createVirtualCluster' => $this->createVirtualCluster(),
            'deleteJobTemplate' => $this->deleteJobTemplate(),
            'deleteManagedEndpoint' => $this->deleteManagedEndpoint(),
            'deleteVirtualCluster' => $this->deleteVirtualCluster(),
            'describeJobRun' => $this->describeJobRun(),
            'describeJobTemplate' => $this->describeJobTemplate(),
            'describeManagedEndpoint' => $this->describeManagedEndpoint(),
            'describeSecurityConfiguration' => $this->describeSecurityConfiguration(),
            'describeVirtualCluster' => $this->describeVirtualCluster(),
            'getManagedEndpointSessionCredentials' => $this->getManagedEndpointSessionCredentials(),
            'listJobRuns' => $this->listJobRuns(),
            'listJobTemplates' => $this->listJobTemplates(),
            'listManagedEndpoints' => $this->listManagedEndpoints(),
            'listSecurityConfigurations' => $this->listSecurityConfigurations(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listVirtualClusters' => $this->listVirtualClusters(),
            'startJobRun' => $this->startJobRun(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function cancelJobRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualClusterId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createJobTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createManagedEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualClusterId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSecurityConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createVirtualCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteJobTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteManagedEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualClusterId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteVirtualCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeJobRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobRun'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('releaseLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('configurationOverrides'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobDriver'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('finishedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('retryPolicyConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('retryPolicyExecution'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('applicationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('monitoringConfiguration'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('classification'),
                                new \PHPStan\Type\Constant\ConstantStringType('properties'),
                                new \PHPStan\Type\Constant\ConstantStringType('configurations'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\MixedType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('managedLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('persistentAppUI'),
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchMonitoringConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3MonitoringConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerLogRotationConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowAWSToRetainLogs'),
                                new \PHPStan\Type\Constant\ConstantStringType('encryptionKeyArn'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('logGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('logStreamNamePrefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('logUri'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('rotationSize'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxFilesToKeep'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sparkSubmitJobDriver'),
                        new \PHPStan\Type\Constant\ConstantStringType('sparkSqlJobDriver'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('entryPoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('entryPointArguments'),
                            new \PHPStan\Type\Constant\ConstantStringType('sparkSubmitParameters'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('entryPoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('sparkSqlParameters'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('USER_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLUSTER_UNAVAILABLE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('maxAttempts'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('currentAttemptCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeJobTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobTemplateData'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('decryptionError'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('releaseLabel'),
                        new \PHPStan\Type\Constant\ConstantStringType('configurationOverrides'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobDriver'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameterConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobTags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('applicationConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('monitoringConfiguration'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('classification'),
                                    new \PHPStan\Type\Constant\ConstantStringType('properties'),
                                    new \PHPStan\Type\Constant\ConstantStringType('configurations'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\MixedType(),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('persistentAppUI'),
                                new \PHPStan\Type\Constant\ConstantStringType('cloudWatchMonitoringConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3MonitoringConfiguration'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('logGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('logStreamNamePrefix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('logUri'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sparkSubmitJobDriver'),
                            new \PHPStan\Type\Constant\ConstantStringType('sparkSqlJobDriver'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('entryPoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('entryPointArguments'),
                                new \PHPStan\Type\Constant\ConstantStringType('sparkSubmitParameters'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('entryPoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('sparkSqlParameters'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NUMBER'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeManagedEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('releaseLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateAuthority'),
                    new \PHPStan\Type\Constant\ConstantStringType('configurationOverrides'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATED_WITH_ERRORS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateData'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('applicationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('monitoringConfiguration'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('classification'),
                                new \PHPStan\Type\Constant\ConstantStringType('properties'),
                                new \PHPStan\Type\Constant\ConstantStringType('configurations'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\MixedType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('managedLogs'),
                            new \PHPStan\Type\Constant\ConstantStringType('persistentAppUI'),
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchMonitoringConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3MonitoringConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerLogRotationConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('allowAWSToRetainLogs'),
                                new \PHPStan\Type\Constant\ConstantStringType('encryptionKeyArn'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('logGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('logStreamNamePrefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('logUri'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('rotationSize'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxFilesToKeep'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('USER_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLUSTER_UNAVAILABLE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function describeSecurityConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('securityConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityConfigurationData'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authorizationConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lakeFormationConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('encryptionConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('authorizedSessionTagValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('secureNamespaceInfo'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryEngineRoleArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('clusterId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('inTransitEncryptionConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('tlsCertificateConfiguration'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('certificateProviderType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('publicCertificateSecretArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('privateCertificateSecretArn'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantStringType('PEM'),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function describeVirtualCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualCluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('containerProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityConfigurationId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARRESTED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('info'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('eksInfo'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getManagedEndpointSessionCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                new \PHPStan\Type\Constant\ConstantStringType('expiresAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('token'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function listJobRuns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobRuns'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('virtualClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('releaseLabel'),
                        new \PHPStan\Type\Constant\ConstantStringType('configurationOverrides'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobDriver'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('finishedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('stateDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('retryPolicyConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('retryPolicyExecution'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCEL_PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('applicationConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('monitoringConfiguration'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('classification'),
                                    new \PHPStan\Type\Constant\ConstantStringType('properties'),
                                    new \PHPStan\Type\Constant\ConstantStringType('configurations'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\MixedType(),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('managedLogs'),
                                new \PHPStan\Type\Constant\ConstantStringType('persistentAppUI'),
                                new \PHPStan\Type\Constant\ConstantStringType('cloudWatchMonitoringConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3MonitoringConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('containerLogRotationConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('allowAWSToRetainLogs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKeyArn'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('logGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('logStreamNamePrefix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('logUri'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('rotationSize'),
                                    new \PHPStan\Type\Constant\ConstantStringType('maxFilesToKeep'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('sparkSubmitJobDriver'),
                            new \PHPStan\Type\Constant\ConstantStringType('sparkSqlJobDriver'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('entryPoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('entryPointArguments'),
                                new \PHPStan\Type\Constant\ConstantStringType('sparkSubmitParameters'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('entryPoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('sparkSqlParameters'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('USER_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLUSTER_UNAVAILABLE'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('maxAttempts'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('currentAttemptCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listJobTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('templates'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobTemplateData'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('decryptionError'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('releaseLabel'),
                            new \PHPStan\Type\Constant\ConstantStringType('configurationOverrides'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobDriver'),
                            new \PHPStan\Type\Constant\ConstantStringType('parameterConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('jobTags'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('applicationConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('monitoringConfiguration'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('classification'),
                                        new \PHPStan\Type\Constant\ConstantStringType('properties'),
                                        new \PHPStan\Type\Constant\ConstantStringType('configurations'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        new \PHPStan\Type\MixedType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('persistentAppUI'),
                                    new \PHPStan\Type\Constant\ConstantStringType('cloudWatchMonitoringConfiguration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('s3MonitoringConfiguration'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('logGroupName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('logStreamNamePrefix'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('logUri'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sparkSubmitJobDriver'),
                                new \PHPStan\Type\Constant\ConstantStringType('sparkSqlJobDriver'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('entryPoint'),
                                    new \PHPStan\Type\Constant\ConstantStringType('entryPointArguments'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sparkSubmitParameters'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('entryPoint'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sparkSqlParameters'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NUMBER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listManagedEndpoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('endpoints'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('virtualClusterId'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('releaseLabel'),
                        new \PHPStan\Type\Constant\ConstantStringType('executionRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateAuthority'),
                        new \PHPStan\Type\Constant\ConstantStringType('configurationOverrides'),
                        new \PHPStan\Type\Constant\ConstantStringType('serverUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('stateDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED_WITH_ERRORS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('certificateData'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('applicationConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('monitoringConfiguration'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('classification'),
                                    new \PHPStan\Type\Constant\ConstantStringType('properties'),
                                    new \PHPStan\Type\Constant\ConstantStringType('configurations'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\MixedType(),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('managedLogs'),
                                new \PHPStan\Type\Constant\ConstantStringType('persistentAppUI'),
                                new \PHPStan\Type\Constant\ConstantStringType('cloudWatchMonitoringConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3MonitoringConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('containerLogRotationConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('allowAWSToRetainLogs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKeyArn'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('logGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('logStreamNamePrefix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('logUri'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('rotationSize'),
                                    new \PHPStan\Type\Constant\ConstantStringType('maxFilesToKeep'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('USER_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLUSTER_UNAVAILABLE'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSecurityConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('securityConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityConfigurationData'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authorizationConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('lakeFormationConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('encryptionConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('authorizedSessionTagValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('secureNamespaceInfo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('queryEngineRoleArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('clusterId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('inTransitEncryptionConfiguration'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('tlsCertificateConfiguration'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateProviderType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('publicCertificateSecretArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privateCertificateSecretArn'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantStringType('PEM'),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
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
    private function listVirtualClusters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualClusters'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityConfigurationId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARRESTED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('info'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('EKS'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('eksInfo'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startJobRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualClusterId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
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
}