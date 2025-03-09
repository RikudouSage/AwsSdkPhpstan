<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class Cloud9ClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Cloud9\Cloud9Client>
     */
    public function getClass(): string
    {
        return \Aws\Cloud9\Cloud9Client::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createEnvironmentEC2',
            'createEnvironmentMembership',
            'deleteEnvironment',
            'deleteEnvironmentMembership',
            'describeEnvironmentMemberships',
            'describeEnvironmentStatus',
            'describeEnvironments',
            'listEnvironments',
            'listTagsForResource',
            'tagResource',
            'untagResource',
            'updateEnvironment',
            'updateEnvironmentMembership',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createEnvironmentEC2' => $this->createEnvironmentEC2(),
            'createEnvironmentMembership' => $this->createEnvironmentMembership(),
            'deleteEnvironment' => $this->deleteEnvironment(),
            'deleteEnvironmentMembership' => $this->deleteEnvironmentMembership(),
            'describeEnvironmentMemberships' => $this->describeEnvironmentMemberships(),
            'describeEnvironmentStatus' => $this->describeEnvironmentStatus(),
            'describeEnvironments' => $this->describeEnvironments(),
            'listEnvironments' => $this->listEnvironments(),
            'listTagsForResource' => $this->listTagsForResource(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateEnvironment' => $this->updateEnvironment(),
            'updateEnvironmentMembership' => $this->updateEnvironmentMembership(),
        };
    }
    private function createEnvironmentEC2(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createEnvironmentMembership(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('membership'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('permissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('userId'),
                    new \PHPStan\Type\Constant\ConstantStringType('userArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAccess'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('read-write'),
                        new \PHPStan\Type\Constant\ConstantStringType('read-only'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deleteEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEnvironmentMembership(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeEnvironmentMemberships(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('memberships'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('permissions'),
                        new \PHPStan\Type\Constant\ConstantStringType('userId'),
                        new \PHPStan\Type\Constant\ConstantStringType('userArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastAccess'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('owner'),
                            new \PHPStan\Type\Constant\ConstantStringType('read-write'),
                            new \PHPStan\Type\Constant\ConstantStringType('read-only'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeEnvironmentStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('message'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('error'),
                    new \PHPStan\Type\Constant\ConstantStringType('creating'),
                    new \PHPStan\Type\Constant\ConstantStringType('connecting'),
                    new \PHPStan\Type\Constant\ConstantStringType('ready'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopping'),
                    new \PHPStan\Type\Constant\ConstantStringType('stopped'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeEnvironments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environments'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('lifecycle'),
                        new \PHPStan\Type\Constant\ConstantStringType('managedCredentialsStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ssh'),
                            new \PHPStan\Type\Constant\ConstantStringType('ec2'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECT_SSH'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECT_SSM'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            new \PHPStan\Type\Constant\ConstantStringType('failureResource'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED_ON_CREATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED_BY_OWNER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_BY_DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_BY_OWNER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_BY_COLLABORATOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_REMOVAL_BY_COLLABORATOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_START_REMOVAL_BY_COLLABORATOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_REMOVAL_BY_OWNER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_START_REMOVAL_BY_OWNER'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_REMOVAL_BY_COLLABORATOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_REMOVAL_BY_OWNER'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listEnvironments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentIds'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
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
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateEnvironmentMembership(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('membership'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('permissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('userId'),
                    new \PHPStan\Type\Constant\ConstantStringType('userArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAccess'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('read-write'),
                        new \PHPStan\Type\Constant\ConstantStringType('read-only'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
}