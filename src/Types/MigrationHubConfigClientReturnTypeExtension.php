<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MigrationHubConfigClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MigrationHubConfig\MigrationHubConfigClient>
     */
    public function getClass(): string
    {
        return \Aws\MigrationHubConfig\MigrationHubConfigClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createHomeRegionControl',
            'deleteHomeRegionControl',
            'describeHomeRegionControls',
            'getHomeRegion',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createHomeRegionControl' => $this->createHomeRegionControl(),
            'deleteHomeRegionControl' => $this->deleteHomeRegionControl(),
            'describeHomeRegionControls' => $this->describeHomeRegionControls(),
            'getHomeRegion' => $this->getHomeRegion(),
        };
    }
    private function createHomeRegionControl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HomeRegionControl'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ControlId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Target'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deleteHomeRegionControl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeHomeRegionControls(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HomeRegionControls'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ControlId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Target'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getHomeRegion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HomeRegion'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}