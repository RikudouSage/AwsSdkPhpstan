<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class WorkspacesInstancesClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\WorkspacesInstances\WorkspacesInstancesClient>
     */
    public function getClass(): string
    {
        return \Aws\WorkspacesInstances\WorkspacesInstancesClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateVolume',
            'createVolume',
            'createWorkspaceInstance',
            'deleteVolume',
            'deleteWorkspaceInstance',
            'disassociateVolume',
            'getWorkspaceInstance',
            'listInstanceTypes',
            'listRegions',
            'listTagsForResource',
            'listWorkspaceInstances',
            'tagResource',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateVolume' => $this->associateVolume(),
            'createVolume' => $this->createVolume(),
            'createWorkspaceInstance' => $this->createWorkspaceInstance(),
            'deleteVolume' => $this->deleteVolume(),
            'deleteWorkspaceInstance' => $this->deleteWorkspaceInstance(),
            'disassociateVolume' => $this->disassociateVolume(),
            'getWorkspaceInstance' => $this->getWorkspaceInstance(),
            'listInstanceTypes' => $this->listInstanceTypes(),
            'listRegions' => $this->listRegions(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listWorkspaceInstances' => $this->listWorkspaceInstances(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function associateVolume(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createVolume(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VolumeId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWorkspaceInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkspaceInstanceId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteVolume(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteWorkspaceInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateVolume(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getWorkspaceInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkspaceInstanceErrors'),
                new \PHPStan\Type\Constant\ConstantStringType('EC2InstanceErrors'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisionState'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkspaceInstanceId'),
                new \PHPStan\Type\Constant\ConstantStringType('EC2ManagedInstance'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EC2ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2ExceptionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ALLOCATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ALLOCATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEALLOCATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEALLOCATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR_ALLOCATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR_DEALLOCATING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listInstanceTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRegions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RegionName'),
                ], [
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
    private function listWorkspaceInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkspaceInstances'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionState'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkspaceInstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2ManagedInstance'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOCATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOCATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEALLOCATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEALLOCATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR_ALLOCATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR_DEALLOCATING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
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