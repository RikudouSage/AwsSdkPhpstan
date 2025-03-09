<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MarketplaceEntitlementServiceClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MarketplaceEntitlementService\MarketplaceEntitlementServiceClient>
     */
    public function getClass(): string
    {
        return \Aws\MarketplaceEntitlementService\MarketplaceEntitlementServiceClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'getEntitlements',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'getEntitlements' => $this->getEntitlements(),
        };
    }
    private function getEntitlements(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entitlements'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProductCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dimension'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpirationDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IntegerValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('DoubleValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}