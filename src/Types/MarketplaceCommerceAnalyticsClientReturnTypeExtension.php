<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MarketplaceCommerceAnalyticsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MarketplaceCommerceAnalytics\MarketplaceCommerceAnalyticsClient>
     */
    public function getClass(): string
    {
        return \Aws\MarketplaceCommerceAnalytics\MarketplaceCommerceAnalyticsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'generateDataSet',
            'startSupportDataExport',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'generateDataSet' => $this->generateDataSet(),
            'startSupportDataExport' => $this->startSupportDataExport(),
        };
    }
    private function generateDataSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataSetRequestId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startSupportDataExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataSetRequestId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}