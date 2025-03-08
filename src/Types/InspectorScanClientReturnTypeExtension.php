<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class InspectorScanClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\InspectorScan\InspectorScanClient>
     */
    public function getClass(): string
    {
        return \Aws\InspectorScan\InspectorScanClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'scanSbom',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'scanSbom' => $this->scanSbom(),
        };
    }
    private function scanSbom(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sbom'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([], []),
            ]),
        ]);
    }
}