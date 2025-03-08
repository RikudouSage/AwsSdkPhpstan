<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class EC2InstanceConnectClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\EC2InstanceConnect\EC2InstanceConnectClient>
     */
    public function getClass(): string
    {
        return \Aws\EC2InstanceConnect\EC2InstanceConnectClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'sendSSHPublicKey',
            'sendSerialConsoleSSHPublicKey',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'sendSSHPublicKey' => $this->sendSSHPublicKey(),
            'sendSerialConsoleSSHPublicKey' => $this->sendSerialConsoleSSHPublicKey(),
        };
    }
    private function sendSSHPublicKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                new \PHPStan\Type\Constant\ConstantStringType('Success'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function sendSerialConsoleSSHPublicKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                new \PHPStan\Type\Constant\ConstantStringType('Success'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
}