<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class signerClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\signer\signerClient>
     */
    public function getClass(): string
    {
        return \Aws\signer\signerClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addProfilePermission',
            'cancelSigningProfile',
            'describeSigningJob',
            'getRevocationStatus',
            'getSigningPlatform',
            'getSigningProfile',
            'listProfilePermissions',
            'listSigningJobs',
            'listSigningPlatforms',
            'listSigningProfiles',
            'listTagsForResource',
            'putSigningProfile',
            'removeProfilePermission',
            'revokeSignature',
            'revokeSigningProfile',
            'signPayload',
            'startSigningJob',
            'tagResource',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addProfilePermission' => $this->addProfilePermission(),
            'cancelSigningProfile' => $this->cancelSigningProfile(),
            'describeSigningJob' => $this->describeSigningJob(),
            'getRevocationStatus' => $this->getRevocationStatus(),
            'getSigningPlatform' => $this->getSigningPlatform(),
            'getSigningProfile' => $this->getSigningProfile(),
            'listProfilePermissions' => $this->listProfilePermissions(),
            'listSigningJobs' => $this->listSigningJobs(),
            'listSigningPlatforms' => $this->listSigningPlatforms(),
            'listSigningProfiles' => $this->listSigningProfiles(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putSigningProfile' => $this->putSigningProfile(),
            'removeProfilePermission' => $this->removeProfilePermission(),
            'revokeSignature' => $this->revokeSignature(),
            'revokeSigningProfile' => $this->revokeSigningProfile(),
            'signPayload' => $this->signPayload(),
            'startSigningJob' => $this->startSigningJob(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function addProfilePermission(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function cancelSigningProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeSigningJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('source'),
                new \PHPStan\Type\Constant\ConstantStringType('signingMaterial'),
                new \PHPStan\Type\Constant\ConstantStringType('platformId'),
                new \PHPStan\Type\Constant\ConstantStringType('platformDisplayName'),
                new \PHPStan\Type\Constant\ConstantStringType('profileName'),
                new \PHPStan\Type\Constant\ConstantStringType('profileVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('overrides'),
                new \PHPStan\Type\Constant\ConstantStringType('signingParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('completedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('signatureExpiresAt'),
                new \PHPStan\Type\Constant\ConstantStringType('requestedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('revocationRecord'),
                new \PHPStan\Type\Constant\ConstantStringType('signedObject'),
                new \PHPStan\Type\Constant\ConstantStringType('jobOwner'),
                new \PHPStan\Type\Constant\ConstantStringType('jobInvoker'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('signingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('signingImageFormat'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionAlgorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('hashAlgorithm'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECDSA'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SHA1'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSONEmbedded'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSONDetached'),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    new \PHPStan\Type\Constant\ConstantStringType('revokedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('revokedBy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('s3'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRevocationStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('revokedEntities'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSigningPlatform(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('platformId'),
                new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                new \PHPStan\Type\Constant\ConstantStringType('partner'),
                new \PHPStan\Type\Constant\ConstantStringType('target'),
                new \PHPStan\Type\Constant\ConstantStringType('category'),
                new \PHPStan\Type\Constant\ConstantStringType('signingConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('signingImageFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('maxSizeInMB'),
                new \PHPStan\Type\Constant\ConstantStringType('revocationSupported'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('AWSIoT'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionAlgorithmOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('hashAlgorithmOptions'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowedValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECDSA'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECDSA'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowedValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SHA1'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SHA1'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('supportedFormats'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultFormat'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSONEmbedded'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSONDetached'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSONEmbedded'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSONDetached'),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function getSigningProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('profileName'),
                new \PHPStan\Type\Constant\ConstantStringType('profileVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('profileVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('revocationRecord'),
                new \PHPStan\Type\Constant\ConstantStringType('signingMaterial'),
                new \PHPStan\Type\Constant\ConstantStringType('platformId'),
                new \PHPStan\Type\Constant\ConstantStringType('platformDisplayName'),
                new \PHPStan\Type\Constant\ConstantStringType('signatureValidityPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('overrides'),
                new \PHPStan\Type\Constant\ConstantStringType('signingParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('revocationEffectiveFrom'),
                    new \PHPStan\Type\Constant\ConstantStringType('revokedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('revokedBy'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                        new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('signingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('signingImageFormat'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionAlgorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('hashAlgorithm'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('ECDSA'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SHA1'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSONEmbedded'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSONDetached'),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Revoked'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listProfilePermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('policySizeBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('permissions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                    new \PHPStan\Type\Constant\ConstantStringType('principal'),
                    new \PHPStan\Type\Constant\ConstantStringType('statementId'),
                    new \PHPStan\Type\Constant\ConstantStringType('profileVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSigningJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobs'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('signedObject'),
                    new \PHPStan\Type\Constant\ConstantStringType('signingMaterial'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('isRevoked'),
                    new \PHPStan\Type\Constant\ConstantStringType('profileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('profileVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformId'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformDisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('signatureExpiresAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobInvoker'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSigningPlatforms(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('platforms'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('platformId'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('partner'),
                    new \PHPStan\Type\Constant\ConstantStringType('target'),
                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                    new \PHPStan\Type\Constant\ConstantStringType('signingConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('signingImageFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxSizeInMB'),
                    new \PHPStan\Type\Constant\ConstantStringType('revocationSupported'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('AWSIoT'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionAlgorithmOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('hashAlgorithmOptions'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('allowedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RSA'),
                                new \PHPStan\Type\Constant\ConstantStringType('ECDSA'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RSA'),
                                new \PHPStan\Type\Constant\ConstantStringType('ECDSA'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('allowedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SHA1'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SHA1'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('supportedFormats'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultFormat'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                            new \PHPStan\Type\Constant\ConstantStringType('JSONEmbedded'),
                            new \PHPStan\Type\Constant\ConstantStringType('JSONDetached'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                            new \PHPStan\Type\Constant\ConstantStringType('JSONEmbedded'),
                            new \PHPStan\Type\Constant\ConstantStringType('JSONDetached'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSigningProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('profiles'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('profileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('profileVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('profileVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('signingMaterial'),
                    new \PHPStan\Type\Constant\ConstantStringType('signatureValidityPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformId'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformDisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('signingParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                            new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Canceled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Revoked'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function putSigningProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('profileVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('profileVersionArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function removeProfilePermission(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function revokeSignature(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function revokeSigningProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function signPayload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('jobOwner'),
                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('signature'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function startSigningJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('jobOwner'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
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
}