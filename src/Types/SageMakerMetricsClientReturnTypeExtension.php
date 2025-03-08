<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SageMakerMetricsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\SageMakerMetrics\SageMakerMetricsClient>
     */
    public function getClass(): string
    {
        return \Aws\SageMakerMetrics\SageMakerMetricsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchGetMetrics',
            'batchPutMetrics',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchGetMetrics' => $this->batchGetMetrics(),
            'batchPutMetrics' => $this->batchPutMetrics(),
        };
    }
    private function batchGetMetrics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MetricQueryResults'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('XAxisValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricValues'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                        new \PHPStan\Type\Constant\ConstantStringType('Truncated'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalError'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValidationError'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
    private function batchPutMetrics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricIndex'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('METRIC_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFLICT_ERROR'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
}