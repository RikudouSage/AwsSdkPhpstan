<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ECRPublicClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ECRPublic\ECRPublicClient>
     */
    public function getClass(): string
    {
        return \Aws\ECRPublic\ECRPublicClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchCheckLayerAvailability',
            'batchDeleteImage',
            'completeLayerUpload',
            'createRepository',
            'deleteRepository',
            'deleteRepositoryPolicy',
            'describeImageTags',
            'describeImages',
            'describeRegistries',
            'describeRepositories',
            'getAuthorizationToken',
            'getRegistryCatalogData',
            'getRepositoryCatalogData',
            'getRepositoryPolicy',
            'initiateLayerUpload',
            'listTagsForResource',
            'putImage',
            'putRegistryCatalogData',
            'putRepositoryCatalogData',
            'setRepositoryPolicy',
            'tagResource',
            'untagResource',
            'uploadLayerPart',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchCheckLayerAvailability' => $this->batchCheckLayerAvailability(),
            'batchDeleteImage' => $this->batchDeleteImage(),
            'completeLayerUpload' => $this->completeLayerUpload(),
            'createRepository' => $this->createRepository(),
            'deleteRepository' => $this->deleteRepository(),
            'deleteRepositoryPolicy' => $this->deleteRepositoryPolicy(),
            'describeImageTags' => $this->describeImageTags(),
            'describeImages' => $this->describeImages(),
            'describeRegistries' => $this->describeRegistries(),
            'describeRepositories' => $this->describeRepositories(),
            'getAuthorizationToken' => $this->getAuthorizationToken(),
            'getRegistryCatalogData' => $this->getRegistryCatalogData(),
            'getRepositoryCatalogData' => $this->getRepositoryCatalogData(),
            'getRepositoryPolicy' => $this->getRepositoryPolicy(),
            'initiateLayerUpload' => $this->initiateLayerUpload(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putImage' => $this->putImage(),
            'putRegistryCatalogData' => $this->putRegistryCatalogData(),
            'putRepositoryCatalogData' => $this->putRepositoryCatalogData(),
            'setRepositoryPolicy' => $this->setRepositoryPolicy(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'uploadLayerPart' => $this->uploadLayerPart(),
        };
    }
    private function batchCheckLayerAvailability(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('layers'),
                new \PHPStan\Type\Constant\ConstantStringType('failures'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('layerDigest'),
                        new \PHPStan\Type\Constant\ConstantStringType('layerAvailability'),
                        new \PHPStan\Type\Constant\ConstantStringType('layerSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('mediaType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNAVAILABLE'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('layerDigest'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidLayerDigest'),
                            new \PHPStan\Type\Constant\ConstantStringType('MissingLayerDigest'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchDeleteImage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('imageIds'),
                new \PHPStan\Type\Constant\ConstantStringType('failures'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('imageDigest'),
                        new \PHPStan\Type\Constant\ConstantStringType('imageTag'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('imageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('imageDigest'),
                            new \PHPStan\Type\Constant\ConstantStringType('imageTag'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidImageDigest'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidImageTag'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageTagDoesNotMatchDigest'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('MissingDigestAndTag'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImageReferencedByManifestList'),
                            new \PHPStan\Type\Constant\ConstantStringType('KmsError'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function completeLayerUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                new \PHPStan\Type\Constant\ConstantStringType('uploadId'),
                new \PHPStan\Type\Constant\ConstantStringType('layerDigest'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRepository(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repository'),
                new \PHPStan\Type\Constant\ConstantStringType('catalogData'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryUri'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('architectures'),
                    new \PHPStan\Type\Constant\ConstantStringType('operatingSystems'),
                    new \PHPStan\Type\Constant\ConstantStringType('logoUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('aboutText'),
                    new \PHPStan\Type\Constant\ConstantStringType('usageText'),
                    new \PHPStan\Type\Constant\ConstantStringType('marketplaceCertified'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function deleteRepository(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repository'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryUri'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deleteRepositoryPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                new \PHPStan\Type\Constant\ConstantStringType('policyText'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeImageTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('imageTagDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('imageTag'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('imageDetail'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('imageDigest'),
                            new \PHPStan\Type\Constant\ConstantStringType('imageSizeInBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('imagePushedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('imageManifestMediaType'),
                            new \PHPStan\Type\Constant\ConstantStringType('artifactMediaType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeImages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('imageDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('imageDigest'),
                        new \PHPStan\Type\Constant\ConstantStringType('imageTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('imageSizeInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('imagePushedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('imageManifestMediaType'),
                        new \PHPStan\Type\Constant\ConstantStringType('artifactMediaType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRegistries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                        new \PHPStan\Type\Constant\ConstantStringType('registryArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('registryUri'),
                        new \PHPStan\Type\Constant\ConstantStringType('verified'),
                        new \PHPStan\Type\Constant\ConstantStringType('aliases'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('primaryRegistryAlias'),
                                new \PHPStan\Type\Constant\ConstantStringType('defaultRegistryAlias'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRepositories(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repositories'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryUri'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAuthorizationToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('authorizationData'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('authorizationToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('expiresAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getRegistryCatalogData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryCatalogData'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getRepositoryCatalogData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('catalogData'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('architectures'),
                    new \PHPStan\Type\Constant\ConstantStringType('operatingSystems'),
                    new \PHPStan\Type\Constant\ConstantStringType('logoUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('aboutText'),
                    new \PHPStan\Type\Constant\ConstantStringType('usageText'),
                    new \PHPStan\Type\Constant\ConstantStringType('marketplaceCertified'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getRepositoryPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                new \PHPStan\Type\Constant\ConstantStringType('policyText'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function initiateLayerUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('uploadId'),
                new \PHPStan\Type\Constant\ConstantStringType('partSize'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
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
            ]),
        ]);
    }
    private function putImage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('image'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageId'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageManifest'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageManifestMediaType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('imageDigest'),
                        new \PHPStan\Type\Constant\ConstantStringType('imageTag'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function putRegistryCatalogData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryCatalogData'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function putRepositoryCatalogData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('catalogData'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('architectures'),
                    new \PHPStan\Type\Constant\ConstantStringType('operatingSystems'),
                    new \PHPStan\Type\Constant\ConstantStringType('logoUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('aboutText'),
                    new \PHPStan\Type\Constant\ConstantStringType('usageText'),
                    new \PHPStan\Type\Constant\ConstantStringType('marketplaceCertified'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function setRepositoryPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                new \PHPStan\Type\Constant\ConstantStringType('policyText'),
            ], [
                new \PHPStan\Type\StringType(),
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
    private function uploadLayerPart(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                new \PHPStan\Type\Constant\ConstantStringType('uploadId'),
                new \PHPStan\Type\Constant\ConstantStringType('lastByteReceived'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
}