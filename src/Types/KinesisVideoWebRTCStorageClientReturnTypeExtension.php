<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class KinesisVideoWebRTCStorageClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\KinesisVideoWebRTCStorage\KinesisVideoWebRTCStorageClient>
     */
    public function getClass(): string
    {
        return \Aws\KinesisVideoWebRTCStorage\KinesisVideoWebRTCStorageClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'joinStorageSession',
            'joinStorageSessionAsViewer',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'joinStorageSession' => $this->joinStorageSession(),
            'joinStorageSessionAsViewer' => $this->joinStorageSessionAsViewer(),
        };
    }
    private function joinStorageSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function joinStorageSessionAsViewer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}