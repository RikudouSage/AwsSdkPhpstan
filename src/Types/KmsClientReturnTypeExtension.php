<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class KmsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Kms\KmsClient>
     */
    public function getClass(): string
    {
        return \Aws\Kms\KmsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelKeyDeletion',
            'connectCustomKeyStore',
            'createAlias',
            'createCustomKeyStore',
            'createGrant',
            'createKey',
            'decrypt',
            'deleteAlias',
            'deleteCustomKeyStore',
            'deleteImportedKeyMaterial',
            'deriveSharedSecret',
            'describeCustomKeyStores',
            'describeKey',
            'disableKey',
            'disableKeyRotation',
            'disconnectCustomKeyStore',
            'enableKey',
            'enableKeyRotation',
            'encrypt',
            'generateDataKey',
            'generateDataKeyPair',
            'generateDataKeyPairWithoutPlaintext',
            'generateDataKeyWithoutPlaintext',
            'generateMac',
            'generateRandom',
            'getKeyPolicy',
            'getKeyRotationStatus',
            'getParametersForImport',
            'getPublicKey',
            'importKeyMaterial',
            'listAliases',
            'listGrants',
            'listKeyPolicies',
            'listKeyRotations',
            'listKeys',
            'listResourceTags',
            'listRetirableGrants',
            'putKeyPolicy',
            'reEncrypt',
            'replicateKey',
            'retireGrant',
            'revokeGrant',
            'rotateKeyOnDemand',
            'scheduleKeyDeletion',
            'sign',
            'tagResource',
            'untagResource',
            'updateAlias',
            'updateCustomKeyStore',
            'updateKeyDescription',
            'updatePrimaryRegion',
            'verify',
            'verifyMac',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelKeyDeletion' => $this->cancelKeyDeletion(),
            'connectCustomKeyStore' => $this->connectCustomKeyStore(),
            'createAlias' => $this->createAlias(),
            'createCustomKeyStore' => $this->createCustomKeyStore(),
            'createGrant' => $this->createGrant(),
            'createKey' => $this->createKey(),
            'decrypt' => $this->decrypt(),
            'deleteAlias' => $this->deleteAlias(),
            'deleteCustomKeyStore' => $this->deleteCustomKeyStore(),
            'deleteImportedKeyMaterial' => $this->deleteImportedKeyMaterial(),
            'deriveSharedSecret' => $this->deriveSharedSecret(),
            'describeCustomKeyStores' => $this->describeCustomKeyStores(),
            'describeKey' => $this->describeKey(),
            'disableKey' => $this->disableKey(),
            'disableKeyRotation' => $this->disableKeyRotation(),
            'disconnectCustomKeyStore' => $this->disconnectCustomKeyStore(),
            'enableKey' => $this->enableKey(),
            'enableKeyRotation' => $this->enableKeyRotation(),
            'encrypt' => $this->encrypt(),
            'generateDataKey' => $this->generateDataKey(),
            'generateDataKeyPair' => $this->generateDataKeyPair(),
            'generateDataKeyPairWithoutPlaintext' => $this->generateDataKeyPairWithoutPlaintext(),
            'generateDataKeyWithoutPlaintext' => $this->generateDataKeyWithoutPlaintext(),
            'generateMac' => $this->generateMac(),
            'generateRandom' => $this->generateRandom(),
            'getKeyPolicy' => $this->getKeyPolicy(),
            'getKeyRotationStatus' => $this->getKeyRotationStatus(),
            'getParametersForImport' => $this->getParametersForImport(),
            'getPublicKey' => $this->getPublicKey(),
            'importKeyMaterial' => $this->importKeyMaterial(),
            'listAliases' => $this->listAliases(),
            'listGrants' => $this->listGrants(),
            'listKeyPolicies' => $this->listKeyPolicies(),
            'listKeyRotations' => $this->listKeyRotations(),
            'listKeys' => $this->listKeys(),
            'listResourceTags' => $this->listResourceTags(),
            'listRetirableGrants' => $this->listRetirableGrants(),
            'putKeyPolicy' => $this->putKeyPolicy(),
            'reEncrypt' => $this->reEncrypt(),
            'replicateKey' => $this->replicateKey(),
            'retireGrant' => $this->retireGrant(),
            'revokeGrant' => $this->revokeGrant(),
            'rotateKeyOnDemand' => $this->rotateKeyOnDemand(),
            'scheduleKeyDeletion' => $this->scheduleKeyDeletion(),
            'sign' => $this->sign(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAlias' => $this->updateAlias(),
            'updateCustomKeyStore' => $this->updateCustomKeyStore(),
            'updateKeyDescription' => $this->updateKeyDescription(),
            'updatePrimaryRegion' => $this->updatePrimaryRegion(),
            'verify' => $this->verify(),
            'verifyMac' => $this->verifyMac(),
        };
    }
    private function cancelKeyDeletion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function connectCustomKeyStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createCustomKeyStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CustomKeyStoreId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GrantToken'),
                new \PHPStan\Type\Constant\ConstantStringType('GrantId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyMetadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWSAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyState'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValidTo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Origin'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomKeyStoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudHsmClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyManager'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerMasterKeySpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeySpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionAlgorithms'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigningAlgorithms'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyAgreementAlgorithms'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiRegionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingDeletionWindowInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('MacAlgorithms'),
                    new \PHPStan\Type\Constant\ConstantStringType('XksKeyConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SIGN_VERIFY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENCRYPT_DECRYPT'),
                        new \PHPStan\Type\Constant\ConstantStringType('GENERATE_VERIFY_MAC'),
                        new \PHPStan\Type\Constant\ConstantStringType('KEY_AGREEMENT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingImport'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingReplicaDeletion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unavailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_KMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_CLOUDHSM'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_KEY_STORE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('KEY_MATERIAL_EXPIRES'),
                        new \PHPStan\Type\Constant\ConstantStringType('KEY_MATERIAL_DOES_NOT_EXPIRE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P521'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_SECG_P256K1'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_224'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_384'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_512'),
                        new \PHPStan\Type\Constant\ConstantStringType('SM2'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P521'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_SECG_P256K1'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_224'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_384'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_512'),
                        new \PHPStan\Type\Constant\ConstantStringType('SM2'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSAES_OAEP_SHA_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSAES_OAEP_SHA_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('SM2PKE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PSS_SHA_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PSS_SHA_384'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PSS_SHA_512'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PKCS1_V1_5_SHA_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PKCS1_V1_5_SHA_384'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PKCS1_V1_5_SHA_512'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECDSA_SHA_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECDSA_SHA_384'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECDSA_SHA_512'),
                        new \PHPStan\Type\Constant\ConstantStringType('SM2DSA'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('ECDH'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MultiRegionKeyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicaKeys'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PRIMARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('REPLICA'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_224'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_384'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_512'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function decrypt(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('Plaintext'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionAlgorithm'),
                new \PHPStan\Type\Constant\ConstantStringType('CiphertextForRecipient'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSAES_OAEP_SHA_1'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSAES_OAEP_SHA_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('SM2PKE'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function deleteAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCustomKeyStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteImportedKeyMaterial(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deriveSharedSecret(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('SharedSecret'),
                new \PHPStan\Type\Constant\ConstantStringType('CiphertextForRecipient'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyAgreementAlgorithm'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyOrigin'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('ECDH'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_KMS'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_CLOUDHSM'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_KEY_STORE'),
                ]),
            ]),
        ]);
    }
    private function describeCustomKeyStores(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CustomKeyStores'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('Truncated'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CustomKeyStoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomKeyStoreName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudHsmClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrustAnchorCertificate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomKeyStoreType'),
                    new \PHPStan\Type\Constant\ConstantStringType('XksProxyConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_CREDENTIALS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLUSTER_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('NETWORK_ERRORS'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_CLOUDHSM_HSMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('USER_LOCKED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('USER_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('USER_LOGGED_IN'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_FREE_ADDRESSES_IN_SUBNET'),
                        new \PHPStan\Type\Constant\ConstantStringType('XKS_PROXY_ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('XKS_PROXY_NOT_REACHABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('XKS_VPC_ENDPOINT_SERVICE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('XKS_PROXY_INVALID_RESPONSE'),
                        new \PHPStan\Type\Constant\ConstantStringType('XKS_PROXY_INVALID_CONFIGURATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('XKS_VPC_ENDPOINT_SERVICE_INVALID_CONFIGURATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('XKS_PROXY_TIMED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('XKS_PROXY_INVALID_TLS_CONFIGURATION'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_CLOUDHSM'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_KEY_STORE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Connectivity'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('UriEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('UriPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointServiceName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLIC_ENDPOINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_SERVICE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function describeKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyMetadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWSAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyState'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValidTo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Origin'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomKeyStoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudHsmClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyManager'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerMasterKeySpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeySpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionAlgorithms'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigningAlgorithms'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyAgreementAlgorithms'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiRegionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingDeletionWindowInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('MacAlgorithms'),
                    new \PHPStan\Type\Constant\ConstantStringType('XksKeyConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SIGN_VERIFY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENCRYPT_DECRYPT'),
                        new \PHPStan\Type\Constant\ConstantStringType('GENERATE_VERIFY_MAC'),
                        new \PHPStan\Type\Constant\ConstantStringType('KEY_AGREEMENT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingImport'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingReplicaDeletion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unavailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_KMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_CLOUDHSM'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_KEY_STORE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('KEY_MATERIAL_EXPIRES'),
                        new \PHPStan\Type\Constant\ConstantStringType('KEY_MATERIAL_DOES_NOT_EXPIRE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P521'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_SECG_P256K1'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_224'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_384'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_512'),
                        new \PHPStan\Type\Constant\ConstantStringType('SM2'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P521'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_SECG_P256K1'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_224'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_384'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_512'),
                        new \PHPStan\Type\Constant\ConstantStringType('SM2'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSAES_OAEP_SHA_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSAES_OAEP_SHA_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('SM2PKE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PSS_SHA_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PSS_SHA_384'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PSS_SHA_512'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PKCS1_V1_5_SHA_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PKCS1_V1_5_SHA_384'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PKCS1_V1_5_SHA_512'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECDSA_SHA_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECDSA_SHA_384'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECDSA_SHA_512'),
                        new \PHPStan\Type\Constant\ConstantStringType('SM2DSA'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('ECDH'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MultiRegionKeyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicaKeys'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PRIMARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('REPLICA'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_224'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_384'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_512'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function disableKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disableKeyRotation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disconnectCustomKeyStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function enableKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function enableKeyRotation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function encrypt(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CiphertextBlob'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionAlgorithm'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSAES_OAEP_SHA_1'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSAES_OAEP_SHA_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('SM2PKE'),
                ]),
            ]),
        ]);
    }
    private function generateDataKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CiphertextBlob'),
                new \PHPStan\Type\Constant\ConstantStringType('Plaintext'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('CiphertextForRecipient'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function generateDataKeyPair(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PrivateKeyCiphertextBlob'),
                new \PHPStan\Type\Constant\ConstantStringType('PrivateKeyPlaintext'),
                new \PHPStan\Type\Constant\ConstantStringType('PublicKey'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyPairSpec'),
                new \PHPStan\Type\Constant\ConstantStringType('CiphertextForRecipient'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P521'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_SECG_P256K1'),
                    new \PHPStan\Type\Constant\ConstantStringType('SM2'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function generateDataKeyPairWithoutPlaintext(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PrivateKeyCiphertextBlob'),
                new \PHPStan\Type\Constant\ConstantStringType('PublicKey'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyPairSpec'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P521'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_SECG_P256K1'),
                    new \PHPStan\Type\Constant\ConstantStringType('SM2'),
                ]),
            ]),
        ]);
    }
    private function generateDataKeyWithoutPlaintext(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CiphertextBlob'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function generateMac(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Mac'),
                new \PHPStan\Type\Constant\ConstantStringType('MacAlgorithm'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_224'),
                    new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_384'),
                    new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_512'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function generateRandom(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Plaintext'),
                new \PHPStan\Type\Constant\ConstantStringType('CiphertextForRecipient'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function getKeyPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getKeyRotationStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyRotationEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('RotationPeriodInDays'),
                new \PHPStan\Type\Constant\ConstantStringType('NextRotationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('OnDemandRotationStartDate'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getParametersForImport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportToken'),
                new \PHPStan\Type\Constant\ConstantStringType('PublicKey'),
                new \PHPStan\Type\Constant\ConstantStringType('ParametersValidTo'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getPublicKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('PublicKey'),
                new \PHPStan\Type\Constant\ConstantStringType('CustomerMasterKeySpec'),
                new \PHPStan\Type\Constant\ConstantStringType('KeySpec'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionAlgorithms'),
                new \PHPStan\Type\Constant\ConstantStringType('SigningAlgorithms'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyAgreementAlgorithms'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P521'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_SECG_P256K1'),
                    new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('HMAC_224'),
                    new \PHPStan\Type\Constant\ConstantStringType('HMAC_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('HMAC_384'),
                    new \PHPStan\Type\Constant\ConstantStringType('HMAC_512'),
                    new \PHPStan\Type\Constant\ConstantStringType('SM2'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P521'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECC_SECG_P256K1'),
                    new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('HMAC_224'),
                    new \PHPStan\Type\Constant\ConstantStringType('HMAC_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('HMAC_384'),
                    new \PHPStan\Type\Constant\ConstantStringType('HMAC_512'),
                    new \PHPStan\Type\Constant\ConstantStringType('SM2'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SIGN_VERIFY'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENCRYPT_DECRYPT'),
                    new \PHPStan\Type\Constant\ConstantStringType('GENERATE_VERIFY_MAC'),
                    new \PHPStan\Type\Constant\ConstantStringType('KEY_AGREEMENT'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSAES_OAEP_SHA_1'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSAES_OAEP_SHA_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('SM2PKE'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PSS_SHA_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PSS_SHA_384'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PSS_SHA_512'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PKCS1_V1_5_SHA_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PKCS1_V1_5_SHA_384'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PKCS1_V1_5_SHA_512'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECDSA_SHA_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECDSA_SHA_384'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECDSA_SHA_512'),
                    new \PHPStan\Type\Constant\ConstantStringType('SM2DSA'),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('ECDH'),
            ]),
        ]);
    }
    private function importKeyMaterial(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function listAliases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('Truncated'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AliasName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AliasArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function listGrants(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Grants'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('Truncated'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GrantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('GranteePrincipal'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetiringPrincipal'),
                    new \PHPStan\Type\Constant\ConstantStringType('IssuingAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('Operations'),
                    new \PHPStan\Type\Constant\ConstantStringType('Constraints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Decrypt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Encrypt'),
                        new \PHPStan\Type\Constant\ConstantStringType('GenerateDataKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('GenerateDataKeyWithoutPlaintext'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReEncryptFrom'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReEncryptTo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sign'),
                        new \PHPStan\Type\Constant\ConstantStringType('Verify'),
                        new \PHPStan\Type\Constant\ConstantStringType('GetPublicKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateGrant'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetireGrant'),
                        new \PHPStan\Type\Constant\ConstantStringType('DescribeKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('GenerateDataKeyPair'),
                        new \PHPStan\Type\Constant\ConstantStringType('GenerateDataKeyPairWithoutPlaintext'),
                        new \PHPStan\Type\Constant\ConstantStringType('GenerateMac'),
                        new \PHPStan\Type\Constant\ConstantStringType('VerifyMac'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeriveSharedSecret'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionContextSubset'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionContextEquals'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function listKeyPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyNames'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('Truncated'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function listKeyRotations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Rotations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('Truncated'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RotationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('RotationType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function listKeys(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Keys'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('Truncated'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function listResourceTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('Truncated'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function listRetirableGrants(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Grants'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('Truncated'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GrantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('GranteePrincipal'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetiringPrincipal'),
                    new \PHPStan\Type\Constant\ConstantStringType('IssuingAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('Operations'),
                    new \PHPStan\Type\Constant\ConstantStringType('Constraints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Decrypt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Encrypt'),
                        new \PHPStan\Type\Constant\ConstantStringType('GenerateDataKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('GenerateDataKeyWithoutPlaintext'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReEncryptFrom'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReEncryptTo'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sign'),
                        new \PHPStan\Type\Constant\ConstantStringType('Verify'),
                        new \PHPStan\Type\Constant\ConstantStringType('GetPublicKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateGrant'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetireGrant'),
                        new \PHPStan\Type\Constant\ConstantStringType('DescribeKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('GenerateDataKeyPair'),
                        new \PHPStan\Type\Constant\ConstantStringType('GenerateDataKeyPairWithoutPlaintext'),
                        new \PHPStan\Type\Constant\ConstantStringType('GenerateMac'),
                        new \PHPStan\Type\Constant\ConstantStringType('VerifyMac'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeriveSharedSecret'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionContextSubset'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionContextEquals'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function putKeyPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function reEncrypt(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CiphertextBlob'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceEncryptionAlgorithm'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationEncryptionAlgorithm'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSAES_OAEP_SHA_1'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSAES_OAEP_SHA_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('SM2PKE'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSAES_OAEP_SHA_1'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSAES_OAEP_SHA_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('SM2PKE'),
                ]),
            ]),
        ]);
    }
    private function replicateKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReplicaKeyMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicaPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicaTags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWSAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyUsage'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyState'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ValidTo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Origin'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomKeyStoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudHsmClusterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyManager'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerMasterKeySpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeySpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionAlgorithms'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigningAlgorithms'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyAgreementAlgorithms'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('MultiRegionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingDeletionWindowInDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('MacAlgorithms'),
                    new \PHPStan\Type\Constant\ConstantStringType('XksKeyConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SIGN_VERIFY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENCRYPT_DECRYPT'),
                        new \PHPStan\Type\Constant\ConstantStringType('GENERATE_VERIFY_MAC'),
                        new \PHPStan\Type\Constant\ConstantStringType('KEY_AGREEMENT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingImport'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingReplicaDeletion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unavailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_KMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_CLOUDHSM'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_KEY_STORE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('KEY_MATERIAL_EXPIRES'),
                        new \PHPStan\Type\Constant\ConstantStringType('KEY_MATERIAL_DOES_NOT_EXPIRE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P521'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_SECG_P256K1'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_224'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_384'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_512'),
                        new \PHPStan\Type\Constant\ConstantStringType('SM2'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_2048'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_3072'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSA_4096'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P256'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P384'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_NIST_P521'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECC_SECG_P256K1'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_224'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_384'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_512'),
                        new \PHPStan\Type\Constant\ConstantStringType('SM2'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SYMMETRIC_DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSAES_OAEP_SHA_1'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSAES_OAEP_SHA_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('SM2PKE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PSS_SHA_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PSS_SHA_384'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PSS_SHA_512'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PKCS1_V1_5_SHA_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PKCS1_V1_5_SHA_384'),
                        new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PKCS1_V1_5_SHA_512'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECDSA_SHA_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECDSA_SHA_384'),
                        new \PHPStan\Type\Constant\ConstantStringType('ECDSA_SHA_512'),
                        new \PHPStan\Type\Constant\ConstantStringType('SM2DSA'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('ECDH'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MultiRegionKeyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrimaryKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicaKeys'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PRIMARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('REPLICA'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_224'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_256'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_384'),
                        new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_512'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function retireGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function revokeGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function rotateKeyOnDemand(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function scheduleKeyDeletion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('DeletionDate'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyState'),
                new \PHPStan\Type\Constant\ConstantStringType('PendingWindowInDays'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingImport'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingReplicaDeletion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unavailable'),
                    new \PHPStan\Type\Constant\ConstantStringType('Updating'),
                ]),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function sign(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('Signature'),
                new \PHPStan\Type\Constant\ConstantStringType('SigningAlgorithm'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PSS_SHA_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PSS_SHA_384'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PSS_SHA_512'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PKCS1_V1_5_SHA_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PKCS1_V1_5_SHA_384'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PKCS1_V1_5_SHA_512'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECDSA_SHA_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECDSA_SHA_384'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECDSA_SHA_512'),
                    new \PHPStan\Type\Constant\ConstantStringType('SM2DSA'),
                ]),
            ]),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateCustomKeyStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateKeyDescription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updatePrimaryRegion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function verify(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('SignatureValid'),
                new \PHPStan\Type\Constant\ConstantStringType('SigningAlgorithm'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PSS_SHA_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PSS_SHA_384'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PSS_SHA_512'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PKCS1_V1_5_SHA_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PKCS1_V1_5_SHA_384'),
                    new \PHPStan\Type\Constant\ConstantStringType('RSASSA_PKCS1_V1_5_SHA_512'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECDSA_SHA_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECDSA_SHA_384'),
                    new \PHPStan\Type\Constant\ConstantStringType('ECDSA_SHA_512'),
                    new \PHPStan\Type\Constant\ConstantStringType('SM2DSA'),
                ]),
            ]),
        ]);
    }
    private function verifyMac(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('MacValid'),
                new \PHPStan\Type\Constant\ConstantStringType('MacAlgorithm'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_224'),
                    new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_256'),
                    new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_384'),
                    new \PHPStan\Type\Constant\ConstantStringType('HMAC_SHA_512'),
                ]),
            ]),
        ]);
    }
}