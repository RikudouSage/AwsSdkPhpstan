<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class EvsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Evs\EvsClient>
     */
    public function getClass(): string
    {
        return \Aws\Evs\EvsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createEnvironment',
            'createEnvironmentHost',
            'deleteEnvironment',
            'deleteEnvironmentHost',
            'getEnvironment',
            'listEnvironmentHosts',
            'listEnvironmentVlans',
            'listEnvironments',
            'listTagsForResource',
            'tagResource',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createEnvironment' => $this->createEnvironment(),
            'createEnvironmentHost' => $this->createEnvironmentHost(),
            'deleteEnvironment' => $this->deleteEnvironment(),
            'deleteEnvironmentHost' => $this->deleteEnvironmentHost(),
            'getEnvironment' => $this->getEnvironment(),
            'listEnvironmentHosts' => $this->listEnvironmentHosts(),
            'listEnvironmentVlans' => $this->listEnvironmentVlans(),
            'listEnvironments' => $this->listEnvironments(),
            'listTagsForResource' => $this->listTagsForResource(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function createEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentState'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceAccessSubnetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('vcfVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('termsAccepted'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('siteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('checks'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectivityInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('vcfHostnames'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceAccessSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('VCF-5.2.1'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('solutionKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('vsanKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('result'),
                        new \PHPStan\Type\Constant\ConstantStringType('impairedSince'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('KEY_REUSE'),
                            new \PHPStan\Type\Constant\ConstantStringType('KEY_COVERAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REACHABILITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('HOST_COUNT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('privateRouteServerPeerings'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vCenter'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsx'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsxManager1'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsxManager2'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsxManager3'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsxEdge1'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsxEdge2'),
                        new \PHPStan\Type\Constant\ConstantStringType('sddcManager'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloudBuilder'),
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
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('secretArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createEnvironmentHost(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('host'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vcfVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentState'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('VCF-5.2.1'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('hostName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('keyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('placementGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('dedicatedHostId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostState'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('i4i.metal'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deleteEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentState'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceAccessSubnetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('vcfVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('termsAccepted'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('siteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('checks'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectivityInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('vcfHostnames'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceAccessSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('VCF-5.2.1'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('solutionKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('vsanKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('result'),
                        new \PHPStan\Type\Constant\ConstantStringType('impairedSince'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('KEY_REUSE'),
                            new \PHPStan\Type\Constant\ConstantStringType('KEY_COVERAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REACHABILITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('HOST_COUNT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('privateRouteServerPeerings'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vCenter'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsx'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsxManager1'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsxManager2'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsxManager3'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsxEdge1'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsxEdge2'),
                        new \PHPStan\Type\Constant\ConstantStringType('sddcManager'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloudBuilder'),
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
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('secretArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deleteEnvironmentHost(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('host'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vcfVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentState'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('VCF-5.2.1'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('hostName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('keyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('placementGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('dedicatedHostId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostState'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('i4i.metal'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentState'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceAccessSubnetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('vcfVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('termsAccepted'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('siteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('checks'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectivityInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('vcfHostnames'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceAccessSecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('VCF-5.2.1'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('solutionKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('vsanKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('result'),
                        new \PHPStan\Type\Constant\ConstantStringType('impairedSince'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('KEY_REUSE'),
                            new \PHPStan\Type\Constant\ConstantStringType('KEY_COVERAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REACHABILITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('HOST_COUNT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('privateRouteServerPeerings'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vCenter'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsx'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsxManager1'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsxManager2'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsxManager3'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsxEdge1'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsxEdge2'),
                        new \PHPStan\Type\Constant\ConstantStringType('sddcManager'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloudBuilder'),
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
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroups'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('secretArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listEnvironmentHosts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentHosts'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('hostName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('keyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('placementGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('dedicatedHostId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostState'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('ec2InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkInterfaces'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('i4i.metal'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('networkInterfaceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function listEnvironmentVlans(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentVlans'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('vlanId'),
                    new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                    new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('functionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('vlanState'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateDetails'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listEnvironments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('environmentSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vcfVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentState'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('VCF-5.2.1'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
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