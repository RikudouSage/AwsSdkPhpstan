<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class PaymentCryptographyClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\PaymentCryptography\PaymentCryptographyClient>
     */
    public function getClass(): string
    {
        return \Aws\PaymentCryptography\PaymentCryptographyClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createAlias',
            'createKey',
            'deleteAlias',
            'deleteKey',
            'exportKey',
            'getAlias',
            'getKey',
            'getParametersForExport',
            'getParametersForImport',
            'getPublicKeyCertificate',
            'importKey',
            'listAliases',
            'listKeys',
            'listTagsForResource',
            'restoreKey',
            'startKeyUsage',
            'stopKeyUsage',
            'tagResource',
            'untagResource',
            'updateAlias',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createAlias' => $this->createAlias(),
            'createKey' => $this->createKey(),
            'deleteAlias' => $this->deleteAlias(),
            'deleteKey' => $this->deleteKey(),
            'exportKey' => $this->exportKey(),
            'getAlias' => $this->getAlias(),
            'getKey' => $this->getKey(),
            'getParametersForExport' => $this->getParametersForExport(),
            'getParametersForImport' => $this->getParametersForImport(),
            'getPublicKeyCertificate' => $this->getPublicKeyCertificate(),
            'importKey' => $this->importKey(),
            'listAliases' => $this->listAliases(),
            'listKeys' => $this->listKeys(),
            'listTagsForResource' => $this->listTagsForResource(),
            'restoreKey' => $this->restoreKey(),
            'startKeyUsage' => $this->startKeyUsage(),
            'stopKeyUsage' => $this->stopKeyUsage(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAlias' => $this->updateAlias(),
        };
    }
    private function createAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Alias'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AliasName'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Key'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValueAlgorithm'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Exportable'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyState'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyOrigin'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageStartTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageStopTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletePendingTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyAlgorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyModesOfUse'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_B0_BASE_DERIVATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_C0_CARD_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_D0_SYMMETRIC_DATA_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_D1_ASYMMETRIC_KEY_FOR_DATA_ENCRYPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E0_EMV_MKEY_APP_CRYPTOGRAMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E1_EMV_MKEY_CONFIDENTIALITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E2_EMV_MKEY_INTEGRITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E4_EMV_MKEY_DYNAMIC_NUMBERS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E5_EMV_MKEY_CARD_PERSONALIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E6_EMV_MKEY_OTHER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K0_KEY_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K1_KEY_BLOCK_PROTECTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K3_ASYMMETRIC_KEY_FOR_KEY_AGREEMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M3_ISO_9797_3_MAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M1_ISO_9797_1_MAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M6_ISO_9797_5_CMAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M7_HMAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_P0_PIN_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_P1_PIN_GENERATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_S0_ASYMMETRIC_KEY_FOR_DIGITAL_SIGNATURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_V1_IBM3624_PIN_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_V2_VISA_PIN_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K2_TR34_ASYMMETRIC_KEY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASYMMETRIC_KEY_PAIR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_KEY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TDES_2KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TDES_3KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_192'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_256'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Encrypt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Decrypt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Wrap'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unwrap'),
                            new \PHPStan\Type\Constant\ConstantStringType('Generate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sign'),
                            new \PHPStan\Type\Constant\ConstantStringType('Verify'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeriveKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('NoRestrictions'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CMAC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSI_X9_24'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_PAYMENT_CRYPTOGRAPHY'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deleteAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Key'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValueAlgorithm'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Exportable'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyState'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyOrigin'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageStartTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageStopTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletePendingTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyAlgorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyModesOfUse'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_B0_BASE_DERIVATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_C0_CARD_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_D0_SYMMETRIC_DATA_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_D1_ASYMMETRIC_KEY_FOR_DATA_ENCRYPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E0_EMV_MKEY_APP_CRYPTOGRAMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E1_EMV_MKEY_CONFIDENTIALITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E2_EMV_MKEY_INTEGRITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E4_EMV_MKEY_DYNAMIC_NUMBERS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E5_EMV_MKEY_CARD_PERSONALIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E6_EMV_MKEY_OTHER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K0_KEY_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K1_KEY_BLOCK_PROTECTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K3_ASYMMETRIC_KEY_FOR_KEY_AGREEMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M3_ISO_9797_3_MAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M1_ISO_9797_1_MAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M6_ISO_9797_5_CMAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M7_HMAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_P0_PIN_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_P1_PIN_GENERATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_S0_ASYMMETRIC_KEY_FOR_DIGITAL_SIGNATURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_V1_IBM3624_PIN_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_V2_VISA_PIN_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K2_TR34_ASYMMETRIC_KEY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASYMMETRIC_KEY_PAIR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_KEY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TDES_2KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TDES_3KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_192'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_256'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Encrypt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Decrypt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Wrap'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unwrap'),
                            new \PHPStan\Type\Constant\ConstantStringType('Generate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sign'),
                            new \PHPStan\Type\Constant\ConstantStringType('Verify'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeriveKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('NoRestrictions'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CMAC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSI_X9_24'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_PAYMENT_CRYPTOGRAPHY'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function exportKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WrappedKey'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WrappingKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('WrappedKeyMaterialFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyMaterial'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValueAlgorithm'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('KEY_CRYPTOGRAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('TR31_KEY_BLOCK'),
                        new \PHPStan\Type\Constant\ConstantStringType('TR34_KEY_BLOCK'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CMAC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSI_X9_24'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Alias'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AliasName'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Key'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValueAlgorithm'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Exportable'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyState'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyOrigin'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageStartTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageStopTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletePendingTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyAlgorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyModesOfUse'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_B0_BASE_DERIVATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_C0_CARD_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_D0_SYMMETRIC_DATA_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_D1_ASYMMETRIC_KEY_FOR_DATA_ENCRYPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E0_EMV_MKEY_APP_CRYPTOGRAMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E1_EMV_MKEY_CONFIDENTIALITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E2_EMV_MKEY_INTEGRITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E4_EMV_MKEY_DYNAMIC_NUMBERS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E5_EMV_MKEY_CARD_PERSONALIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E6_EMV_MKEY_OTHER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K0_KEY_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K1_KEY_BLOCK_PROTECTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K3_ASYMMETRIC_KEY_FOR_KEY_AGREEMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M3_ISO_9797_3_MAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M1_ISO_9797_1_MAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M6_ISO_9797_5_CMAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M7_HMAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_P0_PIN_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_P1_PIN_GENERATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_S0_ASYMMETRIC_KEY_FOR_DIGITAL_SIGNATURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_V1_IBM3624_PIN_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_V2_VISA_PIN_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K2_TR34_ASYMMETRIC_KEY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASYMMETRIC_KEY_PAIR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_KEY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TDES_2KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TDES_3KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_192'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_256'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Encrypt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Decrypt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Wrap'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unwrap'),
                            new \PHPStan\Type\Constant\ConstantStringType('Generate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sign'),
                            new \PHPStan\Type\Constant\ConstantStringType('Verify'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeriveKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('NoRestrictions'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CMAC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSI_X9_24'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_PAYMENT_CRYPTOGRAPHY'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getParametersForExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SigningKeyCertificate'),
                new \PHPStan\Type\Constant\ConstantStringType('SigningKeyCertificateChain'),
                new \PHPStan\Type\Constant\ConstantStringType('SigningKeyAlgorithm'),
                new \PHPStan\Type\Constant\ConstantStringType('ExportToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ParametersValidUntilTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TDES_2KEY'),
                    new \PHPStan\Type\Constant\ConstantStringType('TDES_3KEY'),
                    new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                    new \PHPStan\Type\Constant\ConstantStringType('AES_192'),
                    new \PHPStan\Type\Constant\ConstantStringType('AES_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getParametersForImport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WrappingKeyCertificate'),
                new \PHPStan\Type\Constant\ConstantStringType('WrappingKeyCertificateChain'),
                new \PHPStan\Type\Constant\ConstantStringType('WrappingKeyAlgorithm'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ParametersValidUntilTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TDES_2KEY'),
                    new \PHPStan\Type\Constant\ConstantStringType('TDES_3KEY'),
                    new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                    new \PHPStan\Type\Constant\ConstantStringType('AES_192'),
                    new \PHPStan\Type\Constant\ConstantStringType('AES_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getPublicKeyCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyCertificate'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyCertificateChain'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function importKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Key'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValueAlgorithm'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Exportable'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyState'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyOrigin'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageStartTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageStopTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletePendingTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyAlgorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyModesOfUse'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_B0_BASE_DERIVATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_C0_CARD_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_D0_SYMMETRIC_DATA_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_D1_ASYMMETRIC_KEY_FOR_DATA_ENCRYPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E0_EMV_MKEY_APP_CRYPTOGRAMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E1_EMV_MKEY_CONFIDENTIALITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E2_EMV_MKEY_INTEGRITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E4_EMV_MKEY_DYNAMIC_NUMBERS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E5_EMV_MKEY_CARD_PERSONALIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E6_EMV_MKEY_OTHER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K0_KEY_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K1_KEY_BLOCK_PROTECTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K3_ASYMMETRIC_KEY_FOR_KEY_AGREEMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M3_ISO_9797_3_MAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M1_ISO_9797_1_MAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M6_ISO_9797_5_CMAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M7_HMAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_P0_PIN_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_P1_PIN_GENERATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_S0_ASYMMETRIC_KEY_FOR_DIGITAL_SIGNATURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_V1_IBM3624_PIN_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_V2_VISA_PIN_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K2_TR34_ASYMMETRIC_KEY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASYMMETRIC_KEY_PAIR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_KEY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TDES_2KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TDES_3KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_192'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_256'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Encrypt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Decrypt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Wrap'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unwrap'),
                            new \PHPStan\Type\Constant\ConstantStringType('Generate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sign'),
                            new \PHPStan\Type\Constant\ConstantStringType('Verify'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeriveKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('NoRestrictions'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CMAC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSI_X9_24'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_PAYMENT_CRYPTOGRAPHY'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function listAliases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AliasName'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listKeys(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Keys'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyState'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Exportable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyClass'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyAlgorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyModesOfUse'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_B0_BASE_DERIVATION_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_C0_CARD_VERIFICATION_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_D0_SYMMETRIC_DATA_ENCRYPTION_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_D1_ASYMMETRIC_KEY_FOR_DATA_ENCRYPTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_E0_EMV_MKEY_APP_CRYPTOGRAMS'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_E1_EMV_MKEY_CONFIDENTIALITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_E2_EMV_MKEY_INTEGRITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_E4_EMV_MKEY_DYNAMIC_NUMBERS'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_E5_EMV_MKEY_CARD_PERSONALIZATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_E6_EMV_MKEY_OTHER'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_K0_KEY_ENCRYPTION_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_K1_KEY_BLOCK_PROTECTION_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_K3_ASYMMETRIC_KEY_FOR_KEY_AGREEMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_M3_ISO_9797_3_MAC_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_M1_ISO_9797_1_MAC_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_M6_ISO_9797_5_CMAC_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_M7_HMAC_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_P0_PIN_ENCRYPTION_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_P1_PIN_GENERATION_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_S0_ASYMMETRIC_KEY_FOR_DIGITAL_SIGNATURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_V1_IBM3624_PIN_VERIFICATION_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_V2_VISA_PIN_VERIFICATION_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TR31_K2_TR34_ASYMMETRIC_KEY'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('ASYMMETRIC_KEY_PAIR'),
                                new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_KEY'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TDES_2KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TDES_3KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                                new \PHPStan\Type\Constant\ConstantStringType('AES_192'),
                                new \PHPStan\Type\Constant\ConstantStringType('AES_256'),
                                new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                                new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                                new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                                new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                                new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Encrypt'),
                                new \PHPStan\Type\Constant\ConstantStringType('Decrypt'),
                                new \PHPStan\Type\Constant\ConstantStringType('Wrap'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unwrap'),
                                new \PHPStan\Type\Constant\ConstantStringType('Generate'),
                                new \PHPStan\Type\Constant\ConstantStringType('Sign'),
                                new \PHPStan\Type\Constant\ConstantStringType('Verify'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeriveKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('NoRestrictions'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function restoreKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Key'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValueAlgorithm'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Exportable'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyState'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyOrigin'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageStartTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageStopTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletePendingTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyAlgorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyModesOfUse'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_B0_BASE_DERIVATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_C0_CARD_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_D0_SYMMETRIC_DATA_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_D1_ASYMMETRIC_KEY_FOR_DATA_ENCRYPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E0_EMV_MKEY_APP_CRYPTOGRAMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E1_EMV_MKEY_CONFIDENTIALITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E2_EMV_MKEY_INTEGRITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E4_EMV_MKEY_DYNAMIC_NUMBERS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E5_EMV_MKEY_CARD_PERSONALIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E6_EMV_MKEY_OTHER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K0_KEY_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K1_KEY_BLOCK_PROTECTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K3_ASYMMETRIC_KEY_FOR_KEY_AGREEMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M3_ISO_9797_3_MAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M1_ISO_9797_1_MAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M6_ISO_9797_5_CMAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M7_HMAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_P0_PIN_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_P1_PIN_GENERATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_S0_ASYMMETRIC_KEY_FOR_DIGITAL_SIGNATURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_V1_IBM3624_PIN_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_V2_VISA_PIN_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K2_TR34_ASYMMETRIC_KEY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASYMMETRIC_KEY_PAIR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_KEY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TDES_2KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TDES_3KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_192'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_256'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Encrypt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Decrypt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Wrap'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unwrap'),
                            new \PHPStan\Type\Constant\ConstantStringType('Generate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sign'),
                            new \PHPStan\Type\Constant\ConstantStringType('Verify'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeriveKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('NoRestrictions'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CMAC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSI_X9_24'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_PAYMENT_CRYPTOGRAPHY'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function startKeyUsage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Key'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValueAlgorithm'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Exportable'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyState'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyOrigin'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageStartTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageStopTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletePendingTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyAlgorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyModesOfUse'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_B0_BASE_DERIVATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_C0_CARD_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_D0_SYMMETRIC_DATA_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_D1_ASYMMETRIC_KEY_FOR_DATA_ENCRYPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E0_EMV_MKEY_APP_CRYPTOGRAMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E1_EMV_MKEY_CONFIDENTIALITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E2_EMV_MKEY_INTEGRITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E4_EMV_MKEY_DYNAMIC_NUMBERS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E5_EMV_MKEY_CARD_PERSONALIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E6_EMV_MKEY_OTHER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K0_KEY_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K1_KEY_BLOCK_PROTECTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K3_ASYMMETRIC_KEY_FOR_KEY_AGREEMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M3_ISO_9797_3_MAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M1_ISO_9797_1_MAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M6_ISO_9797_5_CMAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M7_HMAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_P0_PIN_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_P1_PIN_GENERATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_S0_ASYMMETRIC_KEY_FOR_DIGITAL_SIGNATURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_V1_IBM3624_PIN_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_V2_VISA_PIN_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K2_TR34_ASYMMETRIC_KEY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASYMMETRIC_KEY_PAIR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_KEY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TDES_2KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TDES_3KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_192'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_256'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Encrypt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Decrypt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Wrap'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unwrap'),
                            new \PHPStan\Type\Constant\ConstantStringType('Generate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sign'),
                            new \PHPStan\Type\Constant\ConstantStringType('Verify'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeriveKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('NoRestrictions'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CMAC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSI_X9_24'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_PAYMENT_CRYPTOGRAPHY'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function stopKeyUsage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Key'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyCheckValueAlgorithm'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Exportable'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyState'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyOrigin'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageStartTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageStopTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletePendingTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyAlgorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyModesOfUse'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_B0_BASE_DERIVATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_C0_CARD_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_D0_SYMMETRIC_DATA_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_D1_ASYMMETRIC_KEY_FOR_DATA_ENCRYPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E0_EMV_MKEY_APP_CRYPTOGRAMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E1_EMV_MKEY_CONFIDENTIALITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E2_EMV_MKEY_INTEGRITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E4_EMV_MKEY_DYNAMIC_NUMBERS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E5_EMV_MKEY_CARD_PERSONALIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_E6_EMV_MKEY_OTHER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K0_KEY_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K1_KEY_BLOCK_PROTECTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K3_ASYMMETRIC_KEY_FOR_KEY_AGREEMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M3_ISO_9797_3_MAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M1_ISO_9797_1_MAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M6_ISO_9797_5_CMAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_M7_HMAC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_P0_PIN_ENCRYPTION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_P1_PIN_GENERATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_S0_ASYMMETRIC_KEY_FOR_DIGITAL_SIGNATURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_V1_IBM3624_PIN_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_V2_VISA_PIN_VERIFICATION_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR31_K2_TR34_ASYMMETRIC_KEY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASYMMETRIC_KEY_PAIR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_KEY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TDES_2KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TDES_3KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_128'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_192'),
                            new \PHPStan\Type\Constant\ConstantStringType('AES_256'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                            new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Encrypt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Decrypt'),
                            new \PHPStan\Type\Constant\ConstantStringType('Wrap'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unwrap'),
                            new \PHPStan\Type\Constant\ConstantStringType('Generate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sign'),
                            new \PHPStan\Type\Constant\ConstantStringType('Verify'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeriveKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('NoRestrictions'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CMAC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANSI_X9_24'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_PAYMENT_CRYPTOGRAPHY'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Alias'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AliasName'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}