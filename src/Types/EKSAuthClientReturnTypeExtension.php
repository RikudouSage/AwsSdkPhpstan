<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class EKSAuthClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\EKSAuth\EKSAuthClient>
     */
    public function getClass(): string
    {
        return \Aws\EKSAuth\EKSAuthClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'assumeRoleForPodIdentity',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'assumeRoleForPodIdentity' => $this->assumeRoleForPodIdentity(),
        };
    }
    private function assumeRoleForPodIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('subject'),
                new \PHPStan\Type\Constant\ConstantStringType('audience'),
                new \PHPStan\Type\Constant\ConstantStringType('podIdentityAssociation'),
                new \PHPStan\Type\Constant\ConstantStringType('assumedRoleUser'),
                new \PHPStan\Type\Constant\ConstantStringType('credentials'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceAccount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('associationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('assumeRoleId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('sessionToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('secretAccessKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('accessKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('expiration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
}