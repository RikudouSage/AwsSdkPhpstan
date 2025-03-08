<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class PaymentCryptographyDataClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\PaymentCryptographyData\PaymentCryptographyDataClient>
     */
    public function getClass(): string
    {
        return \Aws\PaymentCryptographyData\PaymentCryptographyDataClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'decryptData',
            'encryptData',
            'generateCardValidationData',
            'generateMac',
            'generateMacEmvPinChange',
            'generatePinData',
            'reEncryptData',
            'translatePinData',
            'verifyAuthRequestCryptogram',
            'verifyCardValidationData',
            'verifyMac',
            'verifyPinData',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'decryptData' => $this->decryptData(),
            'encryptData' => $this->encryptData(),
            'generateCardValidationData' => $this->generateCardValidationData(),
            'generateMac' => $this->generateMac(),
            'generateMacEmvPinChange' => $this->generateMacEmvPinChange(),
            'generatePinData' => $this->generatePinData(),
            'reEncryptData' => $this->reEncryptData(),
            'translatePinData' => $this->translatePinData(),
            'verifyAuthRequestCryptogram' => $this->verifyAuthRequestCryptogram(),
            'verifyCardValidationData' => $this->verifyCardValidationData(),
            'verifyMac' => $this->verifyMac(),
            'verifyPinData' => $this->verifyPinData(),
        };
    }
    private function decryptData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValue'),
                new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function encryptData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValue'),
                new \PHPStan\Type\Constant\ConstantStringType('CipherText'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function generateCardValidationData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValue'),
                new \PHPStan\Type\Constant\ConstantStringType('ValidationData'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function generateMac(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValue'),
                new \PHPStan\Type\Constant\ConstantStringType('Mac'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function generateMacEmvPinChange(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NewPinPekArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SecureMessagingIntegrityKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SecureMessagingConfidentialityKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Mac'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptedPinBlock'),
                new \PHPStan\Type\Constant\ConstantStringType('NewPinPekKeyCheckValue'),
                new \PHPStan\Type\Constant\ConstantStringType('SecureMessagingIntegrityKeyCheckValue'),
                new \PHPStan\Type\Constant\ConstantStringType('SecureMessagingConfidentialityKeyCheckValue'),
                new \PHPStan\Type\Constant\ConstantStringType('VisaAmexDerivationOutputs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AuthorizationRequestKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthorizationRequestKeyCheckValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentPinPekArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentPinPekKeyCheckValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function generatePinData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GenerationKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('GenerationKeyCheckValue'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyCheckValue'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptedPinBlock'),
                new \PHPStan\Type\Constant\ConstantStringType('PinData'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PinOffset'),
                    new \PHPStan\Type\Constant\ConstantStringType('VerificationValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function reEncryptData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValue'),
                new \PHPStan\Type\Constant\ConstantStringType('CipherText'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function translatePinData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PinBlock'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValue'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function verifyAuthRequestCryptogram(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValue'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthResponseValue'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function verifyCardValidationData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValue'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function verifyMac(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValue'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function verifyPinData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VerificationKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('VerificationKeyCheckValue'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyCheckValue'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}