<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SSMGuiConnectClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\SSMGuiConnect\SSMGuiConnectClient>
     */
    public function getClass(): string
    {
        return \Aws\SSMGuiConnect\SSMGuiConnectClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'deleteConnectionRecordingPreferences',
            'getConnectionRecordingPreferences',
            'updateConnectionRecordingPreferences',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'deleteConnectionRecordingPreferences' => $this->deleteConnectionRecordingPreferences(),
            'getConnectionRecordingPreferences' => $this->getConnectionRecordingPreferences(),
            'updateConnectionRecordingPreferences' => $this->updateConnectionRecordingPreferences(),
        };
    }
    private function deleteConnectionRecordingPreferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClientToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getConnectionRecordingPreferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionRecordingPreferences'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordingDestinations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Buckets'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateConnectionRecordingPreferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionRecordingPreferences'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordingDestinations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Buckets'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
}