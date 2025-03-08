<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class StsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Sts\StsClient>
     */
    public function getClass(): string
    {
        return \Aws\Sts\StsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'assumeRole',
            'assumeRoleWithSAML',
            'assumeRoleWithWebIdentity',
            'assumeRoot',
            'decodeAuthorizationMessage',
            'getAccessKeyInfo',
            'getCallerIdentity',
            'getFederationToken',
            'getSessionToken',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'assumeRole' => $this->assumeRole(),
            'assumeRoleWithSAML' => $this->assumeRoleWithSAML(),
            'assumeRoleWithWebIdentity' => $this->assumeRoleWithWebIdentity(),
            'assumeRoot' => $this->assumeRoot(),
            'decodeAuthorizationMessage' => $this->decodeAuthorizationMessage(),
            'getAccessKeyInfo' => $this->getAccessKeyInfo(),
            'getCallerIdentity' => $this->getCallerIdentity(),
            'getFederationToken' => $this->getFederationToken(),
            'getSessionToken' => $this->getSessionToken(),
        };
    }
    private function assumeRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
                new \PHPStan\Type\Constant\ConstantStringType('AssumedRoleUser'),
                new \PHPStan\Type\Constant\ConstantStringType('PackedPolicySize'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceIdentity'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretAccessKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('SessionToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssumedRoleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function assumeRoleWithSAML(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
                new \PHPStan\Type\Constant\ConstantStringType('AssumedRoleUser'),
                new \PHPStan\Type\Constant\ConstantStringType('PackedPolicySize'),
                new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                new \PHPStan\Type\Constant\ConstantStringType('SubjectType'),
                new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                new \PHPStan\Type\Constant\ConstantStringType('Audience'),
                new \PHPStan\Type\Constant\ConstantStringType('NameQualifier'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceIdentity'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretAccessKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('SessionToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssumedRoleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function assumeRoleWithWebIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
                new \PHPStan\Type\Constant\ConstantStringType('SubjectFromWebIdentityToken'),
                new \PHPStan\Type\Constant\ConstantStringType('AssumedRoleUser'),
                new \PHPStan\Type\Constant\ConstantStringType('PackedPolicySize'),
                new \PHPStan\Type\Constant\ConstantStringType('Provider'),
                new \PHPStan\Type\Constant\ConstantStringType('Audience'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceIdentity'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretAccessKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('SessionToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssumedRoleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function assumeRoot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceIdentity'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretAccessKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('SessionToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function decodeAuthorizationMessage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DecodedMessage'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAccessKeyInfo(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Account'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCallerIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                new \PHPStan\Type\Constant\ConstantStringType('Account'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getFederationToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
                new \PHPStan\Type\Constant\ConstantStringType('FederatedUser'),
                new \PHPStan\Type\Constant\ConstantStringType('PackedPolicySize'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretAccessKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('SessionToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FederatedUserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getSessionToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretAccessKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('SessionToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
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