<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MarketplaceMeteringClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MarketplaceMetering\MarketplaceMeteringClient>
     */
    public function getClass(): string
    {
        return \Aws\MarketplaceMetering\MarketplaceMeteringClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchMeterUsage',
            'meterUsage',
            'registerUsage',
            'resolveCustomer',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchMeterUsage' => $this->batchMeterUsage(),
            'meterUsage' => $this->meterUsage(),
            'registerUsage' => $this->registerUsage(),
            'resolveCustomer' => $this->resolveCustomer(),
        };
    }
    private function batchMeterUsage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Results'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedRecords'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UsageRecord'),
                    new \PHPStan\Type\Constant\ConstantStringType('MeteringRecordId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dimension'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('UsageAllocations'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AllocatedUsageQuantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Success'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerNotSubscribed'),
                        new \PHPStan\Type\Constant\ConstantStringType('DuplicateRecord'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('Dimension'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageAllocations'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AllocatedUsageQuantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function meterUsage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MeteringRecordId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerUsage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PublicKeyRotationTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('Signature'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function resolveCustomer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CustomerIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('ProductCode'),
                new \PHPStan\Type\Constant\ConstantStringType('CustomerAWSAccountId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}