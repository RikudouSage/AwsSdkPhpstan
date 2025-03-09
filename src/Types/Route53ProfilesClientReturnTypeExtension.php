<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class Route53ProfilesClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Route53Profiles\Route53ProfilesClient>
     */
    public function getClass(): string
    {
        return \Aws\Route53Profiles\Route53ProfilesClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateProfile',
            'associateResourceToProfile',
            'createProfile',
            'deleteProfile',
            'disassociateProfile',
            'disassociateResourceFromProfile',
            'getProfile',
            'getProfileAssociation',
            'getProfileResourceAssociation',
            'listProfileAssociations',
            'listProfileResourceAssociations',
            'listProfiles',
            'listTagsForResource',
            'tagResource',
            'untagResource',
            'updateProfileResourceAssociation',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateProfile' => $this->associateProfile(),
            'associateResourceToProfile' => $this->associateResourceToProfile(),
            'createProfile' => $this->createProfile(),
            'deleteProfile' => $this->deleteProfile(),
            'disassociateProfile' => $this->disassociateProfile(),
            'disassociateResourceFromProfile' => $this->disassociateResourceFromProfile(),
            'getProfile' => $this->getProfile(),
            'getProfileAssociation' => $this->getProfileAssociation(),
            'getProfileResourceAssociation' => $this->getProfileResourceAssociation(),
            'listProfileAssociations' => $this->listProfileAssociations(),
            'listProfileResourceAssociations' => $this->listProfileResourceAssociations(),
            'listProfiles' => $this->listProfiles(),
            'listTagsForResource' => $this->listTagsForResource(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateProfileResourceAssociation' => $this->updateProfileResourceAssociation(),
        };
    }
    private function associateProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProfileAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function associateResourceToProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProfileResourceAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Profile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_SHARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHARED_WITH_ME'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHARED_BY_ME'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Profile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_SHARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHARED_WITH_ME'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHARED_BY_ME'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function disassociateProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProfileAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function disassociateResourceFromProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProfileResourceAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Profile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_SHARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHARED_WITH_ME'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHARED_BY_ME'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getProfileAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProfileAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getProfileResourceAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProfileResourceAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listProfileAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ProfileAssociations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModificationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listProfileResourceAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ProfileResourceAssociations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModificationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ProfileSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShareStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_SHARED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHARED_WITH_ME'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHARED_BY_ME'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
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
    private function updateProfileResourceAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProfileResourceAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModificationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}