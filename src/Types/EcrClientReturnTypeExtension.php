<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class EcrClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Ecr\EcrClient>
     */
    public function getClass(): string
    {
        return \Aws\Ecr\EcrClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchCheckLayerAvailability',
            'batchDeleteImage',
            'batchGetImage',
            'batchGetRepositoryScanningConfiguration',
            'completeLayerUpload',
            'createPullThroughCacheRule',
            'createRepository',
            'createRepositoryCreationTemplate',
            'deleteLifecyclePolicy',
            'deletePullThroughCacheRule',
            'deleteRegistryPolicy',
            'deleteRepository',
            'deleteRepositoryCreationTemplate',
            'deleteRepositoryPolicy',
            'describeImageReplicationStatus',
            'describeImageScanFindings',
            'describeImages',
            'describePullThroughCacheRules',
            'describeRegistry',
            'describeRepositories',
            'describeRepositoryCreationTemplates',
            'getAccountSetting',
            'getAuthorizationToken',
            'getDownloadUrlForLayer',
            'getLifecyclePolicy',
            'getLifecyclePolicyPreview',
            'getRegistryPolicy',
            'getRegistryScanningConfiguration',
            'getRepositoryPolicy',
            'initiateLayerUpload',
            'listImages',
            'listTagsForResource',
            'putAccountSetting',
            'putImage',
            'putImageScanningConfiguration',
            'putImageTagMutability',
            'putLifecyclePolicy',
            'putRegistryPolicy',
            'putRegistryScanningConfiguration',
            'putReplicationConfiguration',
            'setRepositoryPolicy',
            'startImageScan',
            'startLifecyclePolicyPreview',
            'tagResource',
            'untagResource',
            'updatePullThroughCacheRule',
            'updateRepositoryCreationTemplate',
            'uploadLayerPart',
            'validatePullThroughCacheRule',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchCheckLayerAvailability' => $this->batchCheckLayerAvailability(),
            'batchDeleteImage' => $this->batchDeleteImage(),
            'batchGetImage' => $this->batchGetImage(),
            'batchGetRepositoryScanningConfiguration' => $this->batchGetRepositoryScanningConfiguration(),
            'completeLayerUpload' => $this->completeLayerUpload(),
            'createPullThroughCacheRule' => $this->createPullThroughCacheRule(),
            'createRepository' => $this->createRepository(),
            'createRepositoryCreationTemplate' => $this->createRepositoryCreationTemplate(),
            'deleteLifecyclePolicy' => $this->deleteLifecyclePolicy(),
            'deletePullThroughCacheRule' => $this->deletePullThroughCacheRule(),
            'deleteRegistryPolicy' => $this->deleteRegistryPolicy(),
            'deleteRepository' => $this->deleteRepository(),
            'deleteRepositoryCreationTemplate' => $this->deleteRepositoryCreationTemplate(),
            'deleteRepositoryPolicy' => $this->deleteRepositoryPolicy(),
            'describeImageReplicationStatus' => $this->describeImageReplicationStatus(),
            'describeImageScanFindings' => $this->describeImageScanFindings(),
            'describeImages' => $this->describeImages(),
            'describePullThroughCacheRules' => $this->describePullThroughCacheRules(),
            'describeRegistry' => $this->describeRegistry(),
            'describeRepositories' => $this->describeRepositories(),
            'describeRepositoryCreationTemplates' => $this->describeRepositoryCreationTemplates(),
            'getAccountSetting' => $this->getAccountSetting(),
            'getAuthorizationToken' => $this->getAuthorizationToken(),
            'getDownloadUrlForLayer' => $this->getDownloadUrlForLayer(),
            'getLifecyclePolicy' => $this->getLifecyclePolicy(),
            'getLifecyclePolicyPreview' => $this->getLifecyclePolicyPreview(),
            'getRegistryPolicy' => $this->getRegistryPolicy(),
            'getRegistryScanningConfiguration' => $this->getRegistryScanningConfiguration(),
            'getRepositoryPolicy' => $this->getRepositoryPolicy(),
            'initiateLayerUpload' => $this->initiateLayerUpload(),
            'listImages' => $this->listImages(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putAccountSetting' => $this->putAccountSetting(),
            'putImage' => $this->putImage(),
            'putImageScanningConfiguration' => $this->putImageScanningConfiguration(),
            'putImageTagMutability' => $this->putImageTagMutability(),
            'putLifecyclePolicy' => $this->putLifecyclePolicy(),
            'putRegistryPolicy' => $this->putRegistryPolicy(),
            'putRegistryScanningConfiguration' => $this->putRegistryScanningConfiguration(),
            'putReplicationConfiguration' => $this->putReplicationConfiguration(),
            'setRepositoryPolicy' => $this->setRepositoryPolicy(),
            'startImageScan' => $this->startImageScan(),
            'startLifecyclePolicyPreview' => $this->startLifecyclePolicyPreview(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updatePullThroughCacheRule' => $this->updatePullThroughCacheRule(),
            'updateRepositoryCreationTemplate' => $this->updateRepositoryCreationTemplate(),
            'uploadLayerPart' => $this->uploadLayerPart(),
            'validatePullThroughCacheRule' => $this->validatePullThroughCacheRule(),
        };
    }
    private function batchCheckLayerAvailability(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('layers'),
                new \PHPStan\Type\Constant\ConstantStringType('failures'),
            ], [
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
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('imageDigest'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageTag'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
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
                        new \PHPStan\Type\Constant\ConstantStringType('UpstreamAccessDenied'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpstreamTooManyRequests'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpstreamUnavailable'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchGetImage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('images'),
                new \PHPStan\Type\Constant\ConstantStringType('failures'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('UpstreamAccessDenied'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpstreamTooManyRequests'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpstreamUnavailable'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchGetRepositoryScanningConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('scanningConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('failures'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('scanOnPush'),
                    new \PHPStan\Type\Constant\ConstantStringType('scanFrequency'),
                    new \PHPStan\Type\Constant\ConstantStringType('appliedScanFilters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SCAN_ON_PUSH'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTINUOUS_SCAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('filter'),
                        new \PHPStan\Type\Constant\ConstantStringType('filterType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('WILDCARD'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('REPOSITORY_NOT_FOUND'),
                    new \PHPStan\Type\StringType(),
                ]),
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
    private function createPullThroughCacheRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ecrRepositoryPrefix'),
                new \PHPStan\Type\Constant\ConstantStringType('upstreamRegistryUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('upstreamRegistry'),
                new \PHPStan\Type\Constant\ConstantStringType('credentialArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ecr-public'),
                    new \PHPStan\Type\Constant\ConstantStringType('quay'),
                    new \PHPStan\Type\Constant\ConstantStringType('k8s'),
                    new \PHPStan\Type\Constant\ConstantStringType('docker-hub'),
                    new \PHPStan\Type\Constant\ConstantStringType('github-container-registry'),
                    new \PHPStan\Type\Constant\ConstantStringType('azure-container-registry'),
                    new \PHPStan\Type\Constant\ConstantStringType('gitlab-container-registry'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRepository(): ?\PHPStan\Type\Type
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
                    new \PHPStan\Type\Constant\ConstantStringType('imageTagMutability'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageScanningConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MUTABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMMUTABLE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('scanOnPush'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKey'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS_DSSE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createRepositoryCreationTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('repositoryCreationTemplate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageTagMutability'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lifecyclePolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('appliedFor'),
                    new \PHPStan\Type\Constant\ConstantStringType('customRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKey'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS_DSSE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MUTABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMMUTABLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('PULL_THROUGH_CACHE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deleteLifecyclePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                new \PHPStan\Type\Constant\ConstantStringType('lifecyclePolicyText'),
                new \PHPStan\Type\Constant\ConstantStringType('lastEvaluatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deletePullThroughCacheRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ecrRepositoryPrefix'),
                new \PHPStan\Type\Constant\ConstantStringType('upstreamRegistryUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('credentialArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteRegistryPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('policyText'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
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
                    new \PHPStan\Type\Constant\ConstantStringType('imageTagMutability'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageScanningConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MUTABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMMUTABLE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('scanOnPush'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKey'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS_DSSE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteRepositoryCreationTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('repositoryCreationTemplate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageTagMutability'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lifecyclePolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('appliedFor'),
                    new \PHPStan\Type\Constant\ConstantStringType('customRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKey'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS_DSSE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MUTABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMMUTABLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('PULL_THROUGH_CACHE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function describeImageReplicationStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                new \PHPStan\Type\Constant\ConstantStringType('imageId'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationStatuses'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('imageDigest'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageTag'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeImageScanFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                new \PHPStan\Type\Constant\ConstantStringType('imageId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageScanStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('imageScanFindings'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
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
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_IMAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCAN_ELIGIBILITY_EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FINDINGS_UNAVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('imageScanCompletedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('vulnerabilitySourceUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('findingSeverityCounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('findings'),
                    new \PHPStan\Type\Constant\ConstantStringType('enhancedFindings'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                        new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNDEFINED'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNDEFINED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('findingArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('firstObservedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastObservedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('packageVulnerabilityDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('remediation'),
                        new \PHPStan\Type\Constant\ConstantStringType('resources'),
                        new \PHPStan\Type\Constant\ConstantStringType('score'),
                        new \PHPStan\Type\Constant\ConstantStringType('scoreDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('severity'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('fixAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('exploitAvailable'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cvss'),
                            new \PHPStan\Type\Constant\ConstantStringType('referenceUrls'),
                            new \PHPStan\Type\Constant\ConstantStringType('relatedVulnerabilities'),
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('vendorCreatedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('vendorSeverity'),
                            new \PHPStan\Type\Constant\ConstantStringType('vendorUpdatedAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('vulnerabilityId'),
                            new \PHPStan\Type\Constant\ConstantStringType('vulnerablePackages'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('baseScore'),
                                new \PHPStan\Type\Constant\ConstantStringType('scoringVector'),
                                new \PHPStan\Type\Constant\ConstantStringType('source'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arch'),
                                new \PHPStan\Type\Constant\ConstantStringType('epoch'),
                                new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('packageManager'),
                                new \PHPStan\Type\Constant\ConstantStringType('release'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceLayerHash'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                                new \PHPStan\Type\Constant\ConstantStringType('fixedInVersion'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('recommendation'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('url'),
                                new \PHPStan\Type\Constant\ConstantStringType('text'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('awsEcrContainerImage'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                                    new \PHPStan\Type\Constant\ConstantStringType('author'),
                                    new \PHPStan\Type\Constant\ConstantStringType('imageHash'),
                                    new \PHPStan\Type\Constant\ConstantStringType('imageTags'),
                                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                                    new \PHPStan\Type\Constant\ConstantStringType('pushedAt'),
                                    new \PHPStan\Type\Constant\ConstantStringType('registry'),
                                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cvss'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('adjustments'),
                                new \PHPStan\Type\Constant\ConstantStringType('score'),
                                new \PHPStan\Type\Constant\ConstantStringType('scoreSource'),
                                new \PHPStan\Type\Constant\ConstantStringType('scoringVector'),
                                new \PHPStan\Type\Constant\ConstantStringType('version'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('metric'),
                                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
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
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageDigest'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('imagePushedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageScanStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageScanFindingsSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageManifestMediaType'),
                    new \PHPStan\Type\Constant\ConstantStringType('artifactMediaType'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRecordedPullTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_IMAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCAN_ELIGIBILITY_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FINDINGS_UNAVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('imageScanCompletedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('vulnerabilitySourceUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('findingSeverityCounts'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INFORMATIONAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('CRITICAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNDEFINED'),
                        ]), new \PHPStan\Type\IntegerType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describePullThroughCacheRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pullThroughCacheRules'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ecrRepositoryPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('upstreamRegistryUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentialArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('upstreamRegistry'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ecr-public'),
                        new \PHPStan\Type\Constant\ConstantStringType('quay'),
                        new \PHPStan\Type\Constant\ConstantStringType('k8s'),
                        new \PHPStan\Type\Constant\ConstantStringType('docker-hub'),
                        new \PHPStan\Type\Constant\ConstantStringType('github-container-registry'),
                        new \PHPStan\Type\Constant\ConstantStringType('azure-container-registry'),
                        new \PHPStan\Type\Constant\ConstantStringType('gitlab-container-registry'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRegistry(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('replicationConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('rules'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('destinations'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryFilters'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('region'),
                            new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('filter'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX_MATCH'),
                        ]),
                    ]),
                ]),
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
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryUri'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageTagMutability'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageScanningConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MUTABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMMUTABLE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('scanOnPush'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKey'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS_DSSE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRepositoryCreationTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('repositoryCreationTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageTagMutability'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lifecyclePolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('appliedFor'),
                    new \PHPStan\Type\Constant\ConstantStringType('customRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKey'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS_DSSE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MUTABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMMUTABLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('PULL_THROUGH_CACHE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAccountSetting(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('value'),
            ], [
                new \PHPStan\Type\StringType(),
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
                    new \PHPStan\Type\Constant\ConstantStringType('proxyEndpoint'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getDownloadUrlForLayer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('downloadUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('layerDigest'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getLifecyclePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                new \PHPStan\Type\Constant\ConstantStringType('lifecyclePolicyText'),
                new \PHPStan\Type\Constant\ConstantStringType('lastEvaluatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getLifecyclePolicyPreview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                new \PHPStan\Type\Constant\ConstantStringType('lifecyclePolicyText'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('previewResults'),
                new \PHPStan\Type\Constant\ConstantStringType('summary'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('imageTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageDigest'),
                    new \PHPStan\Type\Constant\ConstantStringType('imagePushedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                    new \PHPStan\Type\Constant\ConstantStringType('appliedRulePriority'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('expiringImageTotalCount'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getRegistryPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('policyText'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRegistryScanningConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('scanningConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('scanType'),
                    new \PHPStan\Type\Constant\ConstantStringType('rules'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENHANCED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('scanFrequency'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryFilters'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SCAN_ON_PUSH'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTINUOUS_SCAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('filter'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('WILDCARD'),
                        ]),
                    ]),
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
    private function listImages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('imageIds'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('imageDigest'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageTag'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function putAccountSetting(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('value'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
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
    private function putImageScanningConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                new \PHPStan\Type\Constant\ConstantStringType('imageScanningConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('scanOnPush'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function putImageTagMutability(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                new \PHPStan\Type\Constant\ConstantStringType('imageTagMutability'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('MUTABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMMUTABLE'),
                ]),
            ]),
        ]);
    }
    private function putLifecyclePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                new \PHPStan\Type\Constant\ConstantStringType('lifecyclePolicyText'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putRegistryPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('policyText'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putRegistryScanningConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryScanningConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('scanType'),
                    new \PHPStan\Type\Constant\ConstantStringType('rules'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BASIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENHANCED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('scanFrequency'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryFilters'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SCAN_ON_PUSH'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTINUOUS_SCAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('filter'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('WILDCARD'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function putReplicationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('replicationConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('rules'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('destinations'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryFilters'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('region'),
                            new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('filter'),
                            new \PHPStan\Type\Constant\ConstantStringType('filterType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFIX_MATCH'),
                        ]),
                    ]),
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
    private function startImageScan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                new \PHPStan\Type\Constant\ConstantStringType('imageId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageScanStatus'),
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
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_IMAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCAN_ELIGIBILITY_EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FINDINGS_UNAVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function startLifecyclePolicyPreview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                new \PHPStan\Type\Constant\ConstantStringType('lifecyclePolicyText'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
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
    private function updatePullThroughCacheRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ecrRepositoryPrefix'),
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('credentialArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateRepositoryCreationTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('repositoryCreationTemplate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageTagMutability'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('lifecyclePolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('appliedFor'),
                    new \PHPStan\Type\Constant\ConstantStringType('customRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKey'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS_DSSE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MUTABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMMUTABLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REPLICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('PULL_THROUGH_CACHE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
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
    private function validatePullThroughCacheRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ecrRepositoryPrefix'),
                new \PHPStan\Type\Constant\ConstantStringType('registryId'),
                new \PHPStan\Type\Constant\ConstantStringType('upstreamRegistryUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('credentialArn'),
                new \PHPStan\Type\Constant\ConstantStringType('isValid'),
                new \PHPStan\Type\Constant\ConstantStringType('failure'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}