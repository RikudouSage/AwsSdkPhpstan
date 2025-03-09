<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CodeArtifactClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CodeArtifact\CodeArtifactClient>
     */
    public function getClass(): string
    {
        return \Aws\CodeArtifact\CodeArtifactClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateExternalConnection',
            'copyPackageVersions',
            'createDomain',
            'createPackageGroup',
            'createRepository',
            'deleteDomain',
            'deleteDomainPermissionsPolicy',
            'deletePackage',
            'deletePackageGroup',
            'deletePackageVersions',
            'deleteRepository',
            'deleteRepositoryPermissionsPolicy',
            'describeDomain',
            'describePackage',
            'describePackageGroup',
            'describePackageVersion',
            'describeRepository',
            'disassociateExternalConnection',
            'disposePackageVersions',
            'getAssociatedPackageGroup',
            'getAuthorizationToken',
            'getDomainPermissionsPolicy',
            'getPackageVersionAsset',
            'getPackageVersionReadme',
            'getRepositoryEndpoint',
            'getRepositoryPermissionsPolicy',
            'listAllowedRepositoriesForGroup',
            'listAssociatedPackages',
            'listDomains',
            'listPackageGroups',
            'listPackageVersionAssets',
            'listPackageVersionDependencies',
            'listPackageVersions',
            'listPackages',
            'listRepositories',
            'listRepositoriesInDomain',
            'listSubPackageGroups',
            'listTagsForResource',
            'publishPackageVersion',
            'putDomainPermissionsPolicy',
            'putPackageOriginConfiguration',
            'putRepositoryPermissionsPolicy',
            'tagResource',
            'untagResource',
            'updatePackageGroup',
            'updatePackageGroupOriginConfiguration',
            'updatePackageVersionsStatus',
            'updateRepository',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateExternalConnection' => $this->associateExternalConnection(),
            'copyPackageVersions' => $this->copyPackageVersions(),
            'createDomain' => $this->createDomain(),
            'createPackageGroup' => $this->createPackageGroup(),
            'createRepository' => $this->createRepository(),
            'deleteDomain' => $this->deleteDomain(),
            'deleteDomainPermissionsPolicy' => $this->deleteDomainPermissionsPolicy(),
            'deletePackage' => $this->deletePackage(),
            'deletePackageGroup' => $this->deletePackageGroup(),
            'deletePackageVersions' => $this->deletePackageVersions(),
            'deleteRepository' => $this->deleteRepository(),
            'deleteRepositoryPermissionsPolicy' => $this->deleteRepositoryPermissionsPolicy(),
            'describeDomain' => $this->describeDomain(),
            'describePackage' => $this->describePackage(),
            'describePackageGroup' => $this->describePackageGroup(),
            'describePackageVersion' => $this->describePackageVersion(),
            'describeRepository' => $this->describeRepository(),
            'disassociateExternalConnection' => $this->disassociateExternalConnection(),
            'disposePackageVersions' => $this->disposePackageVersions(),
            'getAssociatedPackageGroup' => $this->getAssociatedPackageGroup(),
            'getAuthorizationToken' => $this->getAuthorizationToken(),
            'getDomainPermissionsPolicy' => $this->getDomainPermissionsPolicy(),
            'getPackageVersionAsset' => $this->getPackageVersionAsset(),
            'getPackageVersionReadme' => $this->getPackageVersionReadme(),
            'getRepositoryEndpoint' => $this->getRepositoryEndpoint(),
            'getRepositoryPermissionsPolicy' => $this->getRepositoryPermissionsPolicy(),
            'listAllowedRepositoriesForGroup' => $this->listAllowedRepositoriesForGroup(),
            'listAssociatedPackages' => $this->listAssociatedPackages(),
            'listDomains' => $this->listDomains(),
            'listPackageGroups' => $this->listPackageGroups(),
            'listPackageVersionAssets' => $this->listPackageVersionAssets(),
            'listPackageVersionDependencies' => $this->listPackageVersionDependencies(),
            'listPackageVersions' => $this->listPackageVersions(),
            'listPackages' => $this->listPackages(),
            'listRepositories' => $this->listRepositories(),
            'listRepositoriesInDomain' => $this->listRepositoriesInDomain(),
            'listSubPackageGroups' => $this->listSubPackageGroups(),
            'listTagsForResource' => $this->listTagsForResource(),
            'publishPackageVersion' => $this->publishPackageVersion(),
            'putDomainPermissionsPolicy' => $this->putDomainPermissionsPolicy(),
            'putPackageOriginConfiguration' => $this->putPackageOriginConfiguration(),
            'putRepositoryPermissionsPolicy' => $this->putRepositoryPermissionsPolicy(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updatePackageGroup' => $this->updatePackageGroup(),
            'updatePackageGroupOriginConfiguration' => $this->updatePackageGroupOriginConfiguration(),
            'updatePackageVersionsStatus' => $this->updatePackageVersionsStatus(),
            'updateRepository' => $this->updateRepository(),
        };
    }
    private function associateExternalConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repository'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('administratorAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('upstreams'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalConnections'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('externalConnectionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('packageFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('npm'),
                            new \PHPStan\Type\Constant\ConstantStringType('pypi'),
                            new \PHPStan\Type\Constant\ConstantStringType('maven'),
                            new \PHPStan\Type\Constant\ConstantStringType('nuget'),
                            new \PHPStan\Type\Constant\ConstantStringType('generic'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruby'),
                            new \PHPStan\Type\Constant\ConstantStringType('swift'),
                            new \PHPStan\Type\Constant\ConstantStringType('cargo'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('Available'),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function copyPackageVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('successfulVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('failedVersions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Published'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unfinished'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unlisted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Archived'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disposed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALREADY_EXISTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISMATCHED_REVISION'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISMATCHED_STATUS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_ALLOWED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function createDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domain'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetSizeBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3BucketArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createPackageGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('packageGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('contactInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('originConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('parent'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('restrictions'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_UPSTREAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_UPSTREAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISH'),
                        ]), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('mode'),
                            new \PHPStan\Type\Constant\ConstantStringType('effectiveMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('inheritedFrom'),
                            new \PHPStan\Type\Constant\ConstantStringType('repositoriesCount'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_SPECIFIC_REPOSITORIES'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('INHERIT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_SPECIFIC_REPOSITORIES'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('INHERIT'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
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
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('administratorAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('upstreams'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalConnections'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('externalConnectionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('packageFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('npm'),
                            new \PHPStan\Type\Constant\ConstantStringType('pypi'),
                            new \PHPStan\Type\Constant\ConstantStringType('maven'),
                            new \PHPStan\Type\Constant\ConstantStringType('nuget'),
                            new \PHPStan\Type\Constant\ConstantStringType('generic'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruby'),
                            new \PHPStan\Type\Constant\ConstantStringType('swift'),
                            new \PHPStan\Type\Constant\ConstantStringType('cargo'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('Available'),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deleteDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domain'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetSizeBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3BucketArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteDomainPermissionsPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('document'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deletePackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deletedPackage'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('package'),
                    new \PHPStan\Type\Constant\ConstantStringType('originConfiguration'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('npm'),
                        new \PHPStan\Type\Constant\ConstantStringType('pypi'),
                        new \PHPStan\Type\Constant\ConstantStringType('maven'),
                        new \PHPStan\Type\Constant\ConstantStringType('nuget'),
                        new \PHPStan\Type\Constant\ConstantStringType('generic'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby'),
                        new \PHPStan\Type\Constant\ConstantStringType('swift'),
                        new \PHPStan\Type\Constant\ConstantStringType('cargo'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('restrictions'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('publish'),
                            new \PHPStan\Type\Constant\ConstantStringType('upstream'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deletePackageGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('packageGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('contactInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('originConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('parent'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('restrictions'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_UPSTREAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_UPSTREAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISH'),
                        ]), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('mode'),
                            new \PHPStan\Type\Constant\ConstantStringType('effectiveMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('inheritedFrom'),
                            new \PHPStan\Type\Constant\ConstantStringType('repositoriesCount'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_SPECIFIC_REPOSITORIES'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('INHERIT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_SPECIFIC_REPOSITORIES'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('INHERIT'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deletePackageVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('successfulVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('failedVersions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Published'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unfinished'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unlisted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Archived'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disposed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALREADY_EXISTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISMATCHED_REVISION'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISMATCHED_STATUS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_ALLOWED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
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
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('administratorAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('upstreams'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalConnections'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('externalConnectionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('packageFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('npm'),
                            new \PHPStan\Type\Constant\ConstantStringType('pypi'),
                            new \PHPStan\Type\Constant\ConstantStringType('maven'),
                            new \PHPStan\Type\Constant\ConstantStringType('nuget'),
                            new \PHPStan\Type\Constant\ConstantStringType('generic'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruby'),
                            new \PHPStan\Type\Constant\ConstantStringType('swift'),
                            new \PHPStan\Type\Constant\ConstantStringType('cargo'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('Available'),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deleteRepositoryPermissionsPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('document'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domain'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('assetSizeBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3BucketArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describePackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('package'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('originConfiguration'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('npm'),
                        new \PHPStan\Type\Constant\ConstantStringType('pypi'),
                        new \PHPStan\Type\Constant\ConstantStringType('maven'),
                        new \PHPStan\Type\Constant\ConstantStringType('nuget'),
                        new \PHPStan\Type\Constant\ConstantStringType('generic'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby'),
                        new \PHPStan\Type\Constant\ConstantStringType('swift'),
                        new \PHPStan\Type\Constant\ConstantStringType('cargo'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('restrictions'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('publish'),
                            new \PHPStan\Type\Constant\ConstantStringType('upstream'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describePackageGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('packageGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('contactInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('originConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('parent'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('restrictions'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_UPSTREAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_UPSTREAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISH'),
                        ]), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('mode'),
                            new \PHPStan\Type\Constant\ConstantStringType('effectiveMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('inheritedFrom'),
                            new \PHPStan\Type\Constant\ConstantStringType('repositoriesCount'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_SPECIFIC_REPOSITORIES'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('INHERIT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_SPECIFIC_REPOSITORIES'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('INHERIT'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describePackageVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('packageVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('summary'),
                    new \PHPStan\Type\Constant\ConstantStringType('homePage'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceCodeRepository'),
                    new \PHPStan\Type\Constant\ConstantStringType('publishedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenses'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('origin'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('npm'),
                        new \PHPStan\Type\Constant\ConstantStringType('pypi'),
                        new \PHPStan\Type\Constant\ConstantStringType('maven'),
                        new \PHPStan\Type\Constant\ConstantStringType('nuget'),
                        new \PHPStan\Type\Constant\ConstantStringType('generic'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby'),
                        new \PHPStan\Type\Constant\ConstantStringType('swift'),
                        new \PHPStan\Type\Constant\ConstantStringType('cargo'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('url'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Published'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unfinished'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unlisted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Archived'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disposed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('domainEntryPoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('originType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('externalConnectionName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeRepository(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repository'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('administratorAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('upstreams'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalConnections'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('externalConnectionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('packageFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('npm'),
                            new \PHPStan\Type\Constant\ConstantStringType('pypi'),
                            new \PHPStan\Type\Constant\ConstantStringType('maven'),
                            new \PHPStan\Type\Constant\ConstantStringType('nuget'),
                            new \PHPStan\Type\Constant\ConstantStringType('generic'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruby'),
                            new \PHPStan\Type\Constant\ConstantStringType('swift'),
                            new \PHPStan\Type\Constant\ConstantStringType('cargo'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('Available'),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function disassociateExternalConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repository'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('administratorAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('upstreams'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalConnections'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('externalConnectionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('packageFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('npm'),
                            new \PHPStan\Type\Constant\ConstantStringType('pypi'),
                            new \PHPStan\Type\Constant\ConstantStringType('maven'),
                            new \PHPStan\Type\Constant\ConstantStringType('nuget'),
                            new \PHPStan\Type\Constant\ConstantStringType('generic'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruby'),
                            new \PHPStan\Type\Constant\ConstantStringType('swift'),
                            new \PHPStan\Type\Constant\ConstantStringType('cargo'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('Available'),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function disposePackageVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('successfulVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('failedVersions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Published'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unfinished'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unlisted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Archived'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disposed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALREADY_EXISTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISMATCHED_REVISION'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISMATCHED_STATUS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_ALLOWED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getAssociatedPackageGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('packageGroup'),
                new \PHPStan\Type\Constant\ConstantStringType('associationType'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('contactInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('originConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('parent'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('restrictions'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_UPSTREAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_UPSTREAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISH'),
                        ]), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('mode'),
                            new \PHPStan\Type\Constant\ConstantStringType('effectiveMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('inheritedFrom'),
                            new \PHPStan\Type\Constant\ConstantStringType('repositoriesCount'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_SPECIFIC_REPOSITORIES'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('INHERIT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_SPECIFIC_REPOSITORIES'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('INHERIT'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STRONG'),
                    new \PHPStan\Type\Constant\ConstantStringType('WEAK'),
                ]),
            ]),
        ]);
    }
    private function getAuthorizationToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('authorizationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('expiration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getDomainPermissionsPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('document'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getPackageVersionAsset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('asset'),
                new \PHPStan\Type\Constant\ConstantStringType('assetName'),
                new \PHPStan\Type\Constant\ConstantStringType('packageVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('packageVersionRevision'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPackageVersionReadme(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('format'),
                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                new \PHPStan\Type\Constant\ConstantStringType('package'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('versionRevision'),
                new \PHPStan\Type\Constant\ConstantStringType('readme'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('npm'),
                    new \PHPStan\Type\Constant\ConstantStringType('pypi'),
                    new \PHPStan\Type\Constant\ConstantStringType('maven'),
                    new \PHPStan\Type\Constant\ConstantStringType('nuget'),
                    new \PHPStan\Type\Constant\ConstantStringType('generic'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby'),
                    new \PHPStan\Type\Constant\ConstantStringType('swift'),
                    new \PHPStan\Type\Constant\ConstantStringType('cargo'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRepositoryEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repositoryEndpoint'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRepositoryPermissionsPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('document'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listAllowedRepositoriesForGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('allowedRepositories'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssociatedPackages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('packages'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('package'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationType'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('npm'),
                        new \PHPStan\Type\Constant\ConstantStringType('pypi'),
                        new \PHPStan\Type\Constant\ConstantStringType('maven'),
                        new \PHPStan\Type\Constant\ConstantStringType('nuget'),
                        new \PHPStan\Type\Constant\ConstantStringType('generic'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby'),
                        new \PHPStan\Type\Constant\ConstantStringType('swift'),
                        new \PHPStan\Type\Constant\ConstantStringType('cargo'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STRONG'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEAK'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDomains(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domains'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPackageGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('packageGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('contactInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('originConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('parent'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('restrictions'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_UPSTREAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_UPSTREAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISH'),
                        ]), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('mode'),
                            new \PHPStan\Type\Constant\ConstantStringType('effectiveMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('inheritedFrom'),
                            new \PHPStan\Type\Constant\ConstantStringType('repositoriesCount'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_SPECIFIC_REPOSITORIES'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('INHERIT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_SPECIFIC_REPOSITORIES'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('INHERIT'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPackageVersionAssets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('format'),
                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                new \PHPStan\Type\Constant\ConstantStringType('package'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('versionRevision'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('assets'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('npm'),
                    new \PHPStan\Type\Constant\ConstantStringType('pypi'),
                    new \PHPStan\Type\Constant\ConstantStringType('maven'),
                    new \PHPStan\Type\Constant\ConstantStringType('nuget'),
                    new \PHPStan\Type\Constant\ConstantStringType('generic'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby'),
                    new \PHPStan\Type\Constant\ConstantStringType('swift'),
                    new \PHPStan\Type\Constant\ConstantStringType('cargo'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('size'),
                    new \PHPStan\Type\Constant\ConstantStringType('hashes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MD5'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHA-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHA-256'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHA-512'),
                    ]), new \PHPStan\Type\StringType()),
                ])),
            ]),
        ]);
    }
    private function listPackageVersionDependencies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('format'),
                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                new \PHPStan\Type\Constant\ConstantStringType('package'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('versionRevision'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('dependencies'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('npm'),
                    new \PHPStan\Type\Constant\ConstantStringType('pypi'),
                    new \PHPStan\Type\Constant\ConstantStringType('maven'),
                    new \PHPStan\Type\Constant\ConstantStringType('nuget'),
                    new \PHPStan\Type\Constant\ConstantStringType('generic'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby'),
                    new \PHPStan\Type\Constant\ConstantStringType('swift'),
                    new \PHPStan\Type\Constant\ConstantStringType('cargo'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('package'),
                    new \PHPStan\Type\Constant\ConstantStringType('dependencyType'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionRequirement'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listPackageVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('defaultDisplayVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('format'),
                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                new \PHPStan\Type\Constant\ConstantStringType('package'),
                new \PHPStan\Type\Constant\ConstantStringType('versions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('npm'),
                    new \PHPStan\Type\Constant\ConstantStringType('pypi'),
                    new \PHPStan\Type\Constant\ConstantStringType('maven'),
                    new \PHPStan\Type\Constant\ConstantStringType('nuget'),
                    new \PHPStan\Type\Constant\ConstantStringType('generic'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby'),
                    new \PHPStan\Type\Constant\ConstantStringType('swift'),
                    new \PHPStan\Type\Constant\ConstantStringType('cargo'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('origin'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Published'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unfinished'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unlisted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Archived'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disposed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('domainEntryPoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('originType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('externalConnectionName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPackages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('packages'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('package'),
                    new \PHPStan\Type\Constant\ConstantStringType('originConfiguration'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('npm'),
                        new \PHPStan\Type\Constant\ConstantStringType('pypi'),
                        new \PHPStan\Type\Constant\ConstantStringType('maven'),
                        new \PHPStan\Type\Constant\ConstantStringType('nuget'),
                        new \PHPStan\Type\Constant\ConstantStringType('generic'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruby'),
                        new \PHPStan\Type\Constant\ConstantStringType('swift'),
                        new \PHPStan\Type\Constant\ConstantStringType('cargo'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('restrictions'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('publish'),
                            new \PHPStan\Type\Constant\ConstantStringType('upstream'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRepositories(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repositories'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('administratorAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRepositoriesInDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repositories'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('administratorAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSubPackageGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('packageGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('contactInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('originConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('parent'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('restrictions'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_UPSTREAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_UPSTREAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISH'),
                        ]), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('mode'),
                            new \PHPStan\Type\Constant\ConstantStringType('effectiveMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('inheritedFrom'),
                            new \PHPStan\Type\Constant\ConstantStringType('repositoriesCount'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_SPECIFIC_REPOSITORIES'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('INHERIT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_SPECIFIC_REPOSITORIES'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('INHERIT'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function publishPackageVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('format'),
                new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                new \PHPStan\Type\Constant\ConstantStringType('package'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('versionRevision'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('asset'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('npm'),
                    new \PHPStan\Type\Constant\ConstantStringType('pypi'),
                    new \PHPStan\Type\Constant\ConstantStringType('maven'),
                    new \PHPStan\Type\Constant\ConstantStringType('nuget'),
                    new \PHPStan\Type\Constant\ConstantStringType('generic'),
                    new \PHPStan\Type\Constant\ConstantStringType('ruby'),
                    new \PHPStan\Type\Constant\ConstantStringType('swift'),
                    new \PHPStan\Type\Constant\ConstantStringType('cargo'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Published'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unfinished'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unlisted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Archived'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disposed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('size'),
                    new \PHPStan\Type\Constant\ConstantStringType('hashes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MD5'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHA-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHA-256'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHA-512'),
                    ]), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function putDomainPermissionsPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('document'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function putPackageOriginConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('originConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('restrictions'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('publish'),
                        new \PHPStan\Type\Constant\ConstantStringType('upstream'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function putRepositoryPermissionsPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('document'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
    private function updatePackageGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('packageGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('contactInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('originConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('parent'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('restrictions'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_UPSTREAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_UPSTREAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISH'),
                        ]), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('mode'),
                            new \PHPStan\Type\Constant\ConstantStringType('effectiveMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('inheritedFrom'),
                            new \PHPStan\Type\Constant\ConstantStringType('repositoriesCount'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_SPECIFIC_REPOSITORIES'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('INHERIT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_SPECIFIC_REPOSITORIES'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('INHERIT'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updatePackageGroupOriginConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('packageGroup'),
                new \PHPStan\Type\Constant\ConstantStringType('allowedRepositoryUpdates'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('contactInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('originConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('parent'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('restrictions'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_UPSTREAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_UPSTREAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISH'),
                        ]), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('mode'),
                            new \PHPStan\Type\Constant\ConstantStringType('effectiveMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('inheritedFrom'),
                            new \PHPStan\Type\Constant\ConstantStringType('repositoriesCount'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_SPECIFIC_REPOSITORIES'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('INHERIT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_SPECIFIC_REPOSITORIES'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('INHERIT'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                                new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL_UPSTREAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_UPSTREAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISH'),
                ]), new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ADDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                ]), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()))),
            ]),
        ]);
    }
    private function updatePackageVersionsStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('successfulVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('failedVersions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('revision'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Published'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unfinished'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unlisted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Archived'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disposed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALREADY_EXISTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISMATCHED_REVISION'),
                        new \PHPStan\Type\Constant\ConstantStringType('MISMATCHED_STATUS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_ALLOWED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function updateRepository(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repository'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('administratorAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('upstreams'),
                    new \PHPStan\Type\Constant\ConstantStringType('externalConnections'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('externalConnectionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('packageFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('npm'),
                            new \PHPStan\Type\Constant\ConstantStringType('pypi'),
                            new \PHPStan\Type\Constant\ConstantStringType('maven'),
                            new \PHPStan\Type\Constant\ConstantStringType('nuget'),
                            new \PHPStan\Type\Constant\ConstantStringType('generic'),
                            new \PHPStan\Type\Constant\ConstantStringType('ruby'),
                            new \PHPStan\Type\Constant\ConstantStringType('swift'),
                            new \PHPStan\Type\Constant\ConstantStringType('cargo'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('Available'),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
}