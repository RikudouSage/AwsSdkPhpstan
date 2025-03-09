<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class QLDBSessionClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\QLDBSession\QLDBSessionClient>
     */
    public function getClass(): string
    {
        return \Aws\QLDBSession\QLDBSessionClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'sendCommand',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'sendCommand' => $this->sendCommand(),
        };
    }
    private function sendCommand(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StartSession'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTransaction'),
                new \PHPStan\Type\Constant\ConstantStringType('EndSession'),
                new \PHPStan\Type\Constant\ConstantStringType('CommitTransaction'),
                new \PHPStan\Type\Constant\ConstantStringType('AbortTransaction'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecuteStatement'),
                new \PHPStan\Type\Constant\ConstantStringType('FetchPage'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SessionToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimingInformation'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProcessingTimeMilliseconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TransactionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimingInformation'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProcessingTimeMilliseconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TimingInformation'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProcessingTimeMilliseconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TransactionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CommitDigest'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimingInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumedIOs'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProcessingTimeMilliseconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadIOs'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteIOs'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TimingInformation'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProcessingTimeMilliseconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FirstPage'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimingInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumedIOs'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IonBinary'),
                            new \PHPStan\Type\Constant\ConstantStringType('IonText'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProcessingTimeMilliseconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadIOs'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteIOs'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Page'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimingInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumedIOs'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IonBinary'),
                            new \PHPStan\Type\Constant\ConstantStringType('IonText'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProcessingTimeMilliseconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReadIOs'),
                        new \PHPStan\Type\Constant\ConstantStringType('WriteIOs'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
}