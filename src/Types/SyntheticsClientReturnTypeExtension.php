<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SyntheticsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Synthetics\SyntheticsClient>
     */
    public function getClass(): string
    {
        return \Aws\Synthetics\SyntheticsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateResource',
            'createCanary',
            'createGroup',
            'deleteCanary',
            'deleteGroup',
            'describeCanaries',
            'describeCanariesLastRun',
            'describeRuntimeVersions',
            'disassociateResource',
            'getCanary',
            'getCanaryRuns',
            'getGroup',
            'listAssociatedGroups',
            'listGroupResources',
            'listGroups',
            'listTagsForResource',
            'startCanary',
            'stopCanary',
            'tagResource',
            'untagResource',
            'updateCanary',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateResource' => $this->associateResource(),
            'createCanary' => $this->createCanary(),
            'createGroup' => $this->createGroup(),
            'deleteCanary' => $this->deleteCanary(),
            'deleteGroup' => $this->deleteGroup(),
            'describeCanaries' => $this->describeCanaries(),
            'describeCanariesLastRun' => $this->describeCanariesLastRun(),
            'describeRuntimeVersions' => $this->describeRuntimeVersions(),
            'disassociateResource' => $this->disassociateResource(),
            'getCanary' => $this->getCanary(),
            'getCanaryRuns' => $this->getCanaryRuns(),
            'getGroup' => $this->getGroup(),
            'listAssociatedGroups' => $this->listAssociatedGroups(),
            'listGroupResources' => $this->listGroupResources(),
            'listGroups' => $this->listGroups(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startCanary' => $this->startCanary(),
            'stopCanary' => $this->stopCanary(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateCanary' => $this->updateCanary(),
        };
    }
    private function associateResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createCanary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Canary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Schedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('RunConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('SuccessRetentionPeriodInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureRetentionPeriodInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timeline'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArtifactS3Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('VisualReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedResourceCleanup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArtifactConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceLocationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Handler'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                        new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TimeoutInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MemoryInMB'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveTracing'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateReasonCode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_PERMISSIONS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_DELETE_IN_PROGRESS'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastStarted'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastStopped'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6AllowedForDualStack'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BaseScreenshots'),
                        new \PHPStan\Type\Constant\ConstantStringType('BaseCanaryRunId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ScreenshotName'),
                                new \PHPStan\Type\Constant\ConstantStringType('IgnoreCoordinates'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Encryption'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSE_S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSE_KMS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Group'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deleteCanary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeCanaries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Canaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Schedule'),
                        new \PHPStan\Type\Constant\ConstantStringType('RunConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('SuccessRetentionPeriodInDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureRetentionPeriodInDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timeline'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArtifactS3Location'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('VisualReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisionedResourceCleanup'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArtifactConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourceLocationArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Handler'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TimeoutInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('MemoryInMB'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveTracing'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                            new \PHPStan\Type\Constant\ConstantStringType('StateReasonCode'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('READY'),
                                new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                                new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_PERMISSIONS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATE_PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_COMPLETE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SYNC_DELETE_IN_PROGRESS'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Created'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastStarted'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastStopped'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ipv6AllowedForDualStack'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BaseScreenshots'),
                            new \PHPStan\Type\Constant\ConstantStringType('BaseCanaryRunId'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ScreenshotName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IgnoreCoordinates'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Encryption'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionMode'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SSE_S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SSE_KMS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeCanariesLastRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CanariesLastRun'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CanaryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastRun'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('Timeline'),
                            new \PHPStan\Type\Constant\ConstantStringType('ArtifactS3Location'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                                new \PHPStan\Type\Constant\ConstantStringType('StateReasonCode'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CANARY_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_FAILURE'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Started'),
                                new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRuntimeVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VersionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReleaseDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeprecationDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getCanary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Canary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Schedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('RunConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('SuccessRetentionPeriodInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureRetentionPeriodInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timeline'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArtifactS3Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('VisualReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedResourceCleanup'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArtifactConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceLocationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Handler'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                        new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TimeoutInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MemoryInMB'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveTracing'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateReasonCode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                            new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_PERMISSIONS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYNC_DELETE_IN_PROGRESS'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Created'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastStarted'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastStopped'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6AllowedForDualStack'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BaseScreenshots'),
                        new \PHPStan\Type\Constant\ConstantStringType('BaseCanaryRunId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ScreenshotName'),
                                new \PHPStan\Type\Constant\ConstantStringType('IgnoreCoordinates'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Encryption'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSE_S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSE_KMS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getCanaryRuns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CanaryRuns'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timeline'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArtifactS3Location'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                            new \PHPStan\Type\Constant\ConstantStringType('StateReasonCode'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CANARY_FAILURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_FAILURE'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Started'),
                            new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Group'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function listAssociatedGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
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
    private function listGroupResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
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
    private function startCanary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function stopCanary(): ?\PHPStan\Type\Type
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
    private function updateCanary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}