<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MarketplaceReportingClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MarketplaceReporting\MarketplaceReportingClient>
     */
    public function getClass(): string
    {
        return \Aws\MarketplaceReporting\MarketplaceReportingClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'getBuyerDashboard',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'getBuyerDashboard' => $this->getBuyerDashboard(),
        };
    }
    private function getBuyerDashboard(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('embedUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('dashboardIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('embeddingDomains'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
}