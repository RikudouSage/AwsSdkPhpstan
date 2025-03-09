<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class KinesisVideoSignalingChannelsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\KinesisVideoSignalingChannels\KinesisVideoSignalingChannelsClient>
     */
    public function getClass(): string
    {
        return \Aws\KinesisVideoSignalingChannels\KinesisVideoSignalingChannelsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'getIceServerConfig',
            'sendAlexaOfferToMaster',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'getIceServerConfig' => $this->getIceServerConfig(),
            'sendAlexaOfferToMaster' => $this->sendAlexaOfferToMaster(),
        };
    }
    private function getIceServerConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IceServerList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Uris'),
                        new \PHPStan\Type\Constant\ConstantStringType('Username'),
                        new \PHPStan\Type\Constant\ConstantStringType('Password'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ttl'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function sendAlexaOfferToMaster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Answer'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}