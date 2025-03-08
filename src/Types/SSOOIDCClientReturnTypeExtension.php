<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SSOOIDCClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\SSOOIDC\SSOOIDCClient>
     */
    public function getClass(): string
    {
        return \Aws\SSOOIDC\SSOOIDCClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createToken',
            'createTokenWithIAM',
            'registerClient',
            'startDeviceAuthorization',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createToken' => $this->createToken(),
            'createTokenWithIAM' => $this->createTokenWithIAM(),
            'registerClient' => $this->registerClient(),
            'startDeviceAuthorization' => $this->startDeviceAuthorization(),
        };
    }
    private function createToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accessToken'),
                new \PHPStan\Type\Constant\ConstantStringType('tokenType'),
                new \PHPStan\Type\Constant\ConstantStringType('expiresIn'),
                new \PHPStan\Type\Constant\ConstantStringType('refreshToken'),
                new \PHPStan\Type\Constant\ConstantStringType('idToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTokenWithIAM(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accessToken'),
                new \PHPStan\Type\Constant\ConstantStringType('tokenType'),
                new \PHPStan\Type\Constant\ConstantStringType('expiresIn'),
                new \PHPStan\Type\Constant\ConstantStringType('refreshToken'),
                new \PHPStan\Type\Constant\ConstantStringType('idToken'),
                new \PHPStan\Type\Constant\ConstantStringType('issuedTokenType'),
                new \PHPStan\Type\Constant\ConstantStringType('scope'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerClient(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                new \PHPStan\Type\Constant\ConstantStringType('clientSecret'),
                new \PHPStan\Type\Constant\ConstantStringType('clientIdIssuedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('clientSecretExpiresAt'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizationEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('tokenEndpoint'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startDeviceAuthorization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deviceCode'),
                new \PHPStan\Type\Constant\ConstantStringType('userCode'),
                new \PHPStan\Type\Constant\ConstantStringType('verificationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('verificationUriComplete'),
                new \PHPStan\Type\Constant\ConstantStringType('expiresIn'),
                new \PHPStan\Type\Constant\ConstantStringType('interval'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
}