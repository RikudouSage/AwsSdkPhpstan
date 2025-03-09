<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class Route53RecoveryClusterClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Route53RecoveryCluster\Route53RecoveryClusterClient>
     */
    public function getClass(): string
    {
        return \Aws\Route53RecoveryCluster\Route53RecoveryClusterClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'getRoutingControlState',
            'listRoutingControls',
            'updateRoutingControlState',
            'updateRoutingControlStates',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'getRoutingControlState' => $this->getRoutingControlState(),
            'listRoutingControls' => $this->listRoutingControls(),
            'updateRoutingControlState' => $this->updateRoutingControlState(),
            'updateRoutingControlStates' => $this->updateRoutingControlStates(),
        };
    }
    private function getRoutingControlState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RoutingControlArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RoutingControlState'),
                new \PHPStan\Type\Constant\ConstantStringType('RoutingControlName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('On'),
                    new \PHPStan\Type\Constant\ConstantStringType('Off'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRoutingControls(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RoutingControls'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ControlPanelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ControlPanelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoutingControlArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoutingControlName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoutingControlState'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('On'),
                        new \PHPStan\Type\Constant\ConstantStringType('Off'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateRoutingControlState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateRoutingControlStates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}