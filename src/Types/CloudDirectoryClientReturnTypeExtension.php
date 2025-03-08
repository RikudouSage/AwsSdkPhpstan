<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CloudDirectoryClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CloudDirectory\CloudDirectoryClient>
     */
    public function getClass(): string
    {
        return \Aws\CloudDirectory\CloudDirectoryClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addFacetToObject',
            'applySchema',
            'attachObject',
            'attachPolicy',
            'attachToIndex',
            'attachTypedLink',
            'batchRead',
            'batchWrite',
            'createDirectory',
            'createFacet',
            'createIndex',
            'createObject',
            'createSchema',
            'createTypedLinkFacet',
            'deleteDirectory',
            'deleteFacet',
            'deleteObject',
            'deleteSchema',
            'deleteTypedLinkFacet',
            'detachFromIndex',
            'detachObject',
            'detachPolicy',
            'detachTypedLink',
            'disableDirectory',
            'enableDirectory',
            'getAppliedSchemaVersion',
            'getDirectory',
            'getFacet',
            'getLinkAttributes',
            'getObjectAttributes',
            'getObjectInformation',
            'getSchemaAsJson',
            'getTypedLinkFacetInformation',
            'listAppliedSchemaArns',
            'listAttachedIndices',
            'listDevelopmentSchemaArns',
            'listDirectories',
            'listFacetAttributes',
            'listFacetNames',
            'listIncomingTypedLinks',
            'listIndex',
            'listManagedSchemaArns',
            'listObjectAttributes',
            'listObjectChildren',
            'listObjectParentPaths',
            'listObjectParents',
            'listObjectPolicies',
            'listOutgoingTypedLinks',
            'listPolicyAttachments',
            'listPublishedSchemaArns',
            'listTagsForResource',
            'listTypedLinkFacetAttributes',
            'listTypedLinkFacetNames',
            'lookupPolicy',
            'publishSchema',
            'putSchemaFromJson',
            'removeFacetFromObject',
            'tagResource',
            'untagResource',
            'updateFacet',
            'updateLinkAttributes',
            'updateObjectAttributes',
            'updateSchema',
            'updateTypedLinkFacet',
            'upgradeAppliedSchema',
            'upgradePublishedSchema',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addFacetToObject' => $this->addFacetToObject(),
            'applySchema' => $this->applySchema(),
            'attachObject' => $this->attachObject(),
            'attachPolicy' => $this->attachPolicy(),
            'attachToIndex' => $this->attachToIndex(),
            'attachTypedLink' => $this->attachTypedLink(),
            'batchRead' => $this->batchRead(),
            'batchWrite' => $this->batchWrite(),
            'createDirectory' => $this->createDirectory(),
            'createFacet' => $this->createFacet(),
            'createIndex' => $this->createIndex(),
            'createObject' => $this->createObject(),
            'createSchema' => $this->createSchema(),
            'createTypedLinkFacet' => $this->createTypedLinkFacet(),
            'deleteDirectory' => $this->deleteDirectory(),
            'deleteFacet' => $this->deleteFacet(),
            'deleteObject' => $this->deleteObject(),
            'deleteSchema' => $this->deleteSchema(),
            'deleteTypedLinkFacet' => $this->deleteTypedLinkFacet(),
            'detachFromIndex' => $this->detachFromIndex(),
            'detachObject' => $this->detachObject(),
            'detachPolicy' => $this->detachPolicy(),
            'detachTypedLink' => $this->detachTypedLink(),
            'disableDirectory' => $this->disableDirectory(),
            'enableDirectory' => $this->enableDirectory(),
            'getAppliedSchemaVersion' => $this->getAppliedSchemaVersion(),
            'getDirectory' => $this->getDirectory(),
            'getFacet' => $this->getFacet(),
            'getLinkAttributes' => $this->getLinkAttributes(),
            'getObjectAttributes' => $this->getObjectAttributes(),
            'getObjectInformation' => $this->getObjectInformation(),
            'getSchemaAsJson' => $this->getSchemaAsJson(),
            'getTypedLinkFacetInformation' => $this->getTypedLinkFacetInformation(),
            'listAppliedSchemaArns' => $this->listAppliedSchemaArns(),
            'listAttachedIndices' => $this->listAttachedIndices(),
            'listDevelopmentSchemaArns' => $this->listDevelopmentSchemaArns(),
            'listDirectories' => $this->listDirectories(),
            'listFacetAttributes' => $this->listFacetAttributes(),
            'listFacetNames' => $this->listFacetNames(),
            'listIncomingTypedLinks' => $this->listIncomingTypedLinks(),
            'listIndex' => $this->listIndex(),
            'listManagedSchemaArns' => $this->listManagedSchemaArns(),
            'listObjectAttributes' => $this->listObjectAttributes(),
            'listObjectChildren' => $this->listObjectChildren(),
            'listObjectParentPaths' => $this->listObjectParentPaths(),
            'listObjectParents' => $this->listObjectParents(),
            'listObjectPolicies' => $this->listObjectPolicies(),
            'listOutgoingTypedLinks' => $this->listOutgoingTypedLinks(),
            'listPolicyAttachments' => $this->listPolicyAttachments(),
            'listPublishedSchemaArns' => $this->listPublishedSchemaArns(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTypedLinkFacetAttributes' => $this->listTypedLinkFacetAttributes(),
            'listTypedLinkFacetNames' => $this->listTypedLinkFacetNames(),
            'lookupPolicy' => $this->lookupPolicy(),
            'publishSchema' => $this->publishSchema(),
            'putSchemaFromJson' => $this->putSchemaFromJson(),
            'removeFacetFromObject' => $this->removeFacetFromObject(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateFacet' => $this->updateFacet(),
            'updateLinkAttributes' => $this->updateLinkAttributes(),
            'updateObjectAttributes' => $this->updateObjectAttributes(),
            'updateSchema' => $this->updateSchema(),
            'updateTypedLinkFacet' => $this->updateTypedLinkFacet(),
            'upgradeAppliedSchema' => $this->upgradeAppliedSchema(),
            'upgradePublishedSchema' => $this->upgradePublishedSchema(),
        };
    }
    private function addFacetToObject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function applySchema(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppliedSchemaArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function attachObject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AttachedObjectIdentifier'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function attachPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function attachToIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AttachedObjectIdentifier'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function attachTypedLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TypedLinkSpecifier'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TypedLinkFacet'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceObjectReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetObjectReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityAttributeValues'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TypedLinkName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Selector'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Selector'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('BinaryValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('NumberValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatetimeValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function batchRead(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Responses'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SuccessfulResponse'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExceptionResponse'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ListObjectAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListObjectChildren'),
                        new \PHPStan\Type\Constant\ConstantStringType('GetObjectInformation'),
                        new \PHPStan\Type\Constant\ConstantStringType('GetObjectAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListAttachedIndices'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListObjectParentPaths'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListObjectPolicies'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListPolicyAttachments'),
                        new \PHPStan\Type\Constant\ConstantStringType('LookupPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListIndex'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListOutgoingTypedLinks'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListIncomingTypedLinks'),
                        new \PHPStan\Type\Constant\ConstantStringType('GetLinkAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListObjectParents'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FacetName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BinaryValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NumberValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DatetimeValue'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ResourceType(),
                                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Children'),
                            new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SchemaFacets'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('FacetName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FacetName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BinaryValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NumberValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DatetimeValue'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ResourceType(),
                                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IndexAttachments'),
                            new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IndexedAttributes'),
                                new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FacetName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BinaryValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NumberValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DatetimeValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ResourceType(),
                                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PathToObjectIdentifiersList'),
                            new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifiers'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AttachedPolicyIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifiers'),
                            new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PolicyToPathList'),
                            new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IndexAttachments'),
                            new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IndexedAttributes'),
                                new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FacetName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BinaryValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NumberValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DatetimeValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ResourceType(),
                                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TypedLinkSpecifiers'),
                            new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TypedLinkFacet'),
                                new \PHPStan\Type\Constant\ConstantStringType('SourceObjectReference'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetObjectReference'),
                                new \PHPStan\Type\Constant\ConstantStringType('IdentityAttributeValues'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TypedLinkName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Selector'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Selector'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BinaryValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NumberValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DatetimeValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ResourceType(),
                                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LinkSpecifiers'),
                            new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TypedLinkFacet'),
                                new \PHPStan\Type\Constant\ConstantStringType('SourceObjectReference'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetObjectReference'),
                                new \PHPStan\Type\Constant\ConstantStringType('IdentityAttributeValues'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TypedLinkName'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Selector'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Selector'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BinaryValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NumberValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DatetimeValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ResourceType(),
                                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FacetName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BinaryValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NumberValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DatetimeValue'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ResourceType(),
                                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ParentLinks'),
                            new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('LinkName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationException'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidArnException'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundException'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvalidNextTokenException'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDeniedException'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotNodeException'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetValidationException'),
                            new \PHPStan\Type\Constant\ConstantStringType('CannotListParentOfRootException'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotIndexException'),
                            new \PHPStan\Type\Constant\ConstantStringType('NotPolicyException'),
                            new \PHPStan\Type\Constant\ConstantStringType('DirectoryNotEnabledException'),
                            new \PHPStan\Type\Constant\ConstantStringType('LimitExceededException'),
                            new \PHPStan\Type\Constant\ConstantStringType('InternalServiceException'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function batchWrite(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Responses'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreateObject'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachObject'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetachObject'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateObjectAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteObject'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddFacetToObject'),
                    new \PHPStan\Type\Constant\ConstantStringType('RemoveFacetFromObject'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetachPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachToIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetachFromIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachTypedLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetachTypedLink'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateLinkAttributes'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attachedObjectIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('detachedObjectIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AttachedObjectIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DetachedObjectIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TypedLinkSpecifier'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TypedLinkFacet'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceObjectReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetObjectReference'),
                            new \PHPStan\Type\Constant\ConstantStringType('IdentityAttributeValues'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('TypedLinkName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Selector'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Selector'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BinaryValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NumberValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DatetimeValue'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ResourceType(),
                                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                ]),
            ]),
        ]);
    }
    private function createDirectory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('AppliedSchemaArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createFacet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createObject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSchema(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTypedLinkFacet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDirectory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteFacet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteObject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSchema(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteTypedLinkFacet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function detachFromIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DetachedObjectIdentifier'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function detachObject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DetachedObjectIdentifier'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function detachPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function detachTypedLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disableDirectory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function enableDirectory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAppliedSchemaVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppliedSchemaArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDirectory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Directory'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getFacet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Facet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectType'),
                    new \PHPStan\Type\Constant\ConstantStringType('FacetStyle'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LEAF_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('POLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('INDEX'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STATIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getLinkAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('FacetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('BinaryValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatetimeValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getObjectAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('FacetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('BinaryValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatetimeValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getObjectInformation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SchemaFacets'),
                new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FacetName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSchemaAsJson(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Document'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTypedLinkFacetInformation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityAttributeOrder'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAppliedSchemaArns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SchemaArns'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAttachedIndices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IndexAttachments'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IndexedAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('BinaryValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('NumberValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatetimeValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDevelopmentSchemaArns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SchemaArns'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDirectories(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Directories'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFacetAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeDefinition'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequiredBehavior'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsImmutable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('BINARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATETIME'),
                            new \PHPStan\Type\Constant\ConstantStringType('VARIANT'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('BinaryValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('NumberValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatetimeValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BINARY_LENGTH'),
                                new \PHPStan\Type\Constant\ConstantStringType('NUMBER_COMPARISON'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING_FROM_SET'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRING_LENGTH'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TargetFacetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetAttributeName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUIRED_ALWAYS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_REQUIRED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFacetNames(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FacetNames'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIncomingTypedLinks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LinkSpecifiers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TypedLinkFacet'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceObjectReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetObjectReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityAttributeValues'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TypedLinkName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Selector'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Selector'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('BinaryValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('NumberValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatetimeValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IndexAttachments'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IndexedAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('BinaryValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('NumberValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatetimeValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listManagedSchemaArns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SchemaArns'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listObjectAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('FacetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('BinaryValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatetimeValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listObjectChildren(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Children'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listObjectParentPaths(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PathToObjectIdentifiersList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifiers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listObjectParents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Parents'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ParentLinks'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listObjectPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AttachedPolicyIds'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOutgoingTypedLinks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TypedLinkSpecifiers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TypedLinkFacet'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceObjectReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetObjectReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityAttributeValues'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TypedLinkName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Selector'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Selector'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('BinaryValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('NumberValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatetimeValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPolicyAttachments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifiers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPublishedSchemaArns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SchemaArns'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTypedLinkFacetAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsImmutable'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequiredBehavior'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                        new \PHPStan\Type\Constant\ConstantStringType('BINARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                        new \PHPStan\Type\Constant\ConstantStringType('NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATETIME'),
                        new \PHPStan\Type\Constant\ConstantStringType('VARIANT'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('BinaryValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('BooleanValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatetimeValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BINARY_LENGTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('NUMBER_COMPARISON'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRING_FROM_SET'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRING_LENGTH'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUIRED_ALWAYS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_REQUIRED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTypedLinkFacetNames(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FacetNames'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function lookupPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyToPathList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('Policies'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function publishSchema(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PublishedSchemaArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putSchemaFromJson(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function removeFacetFromObject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
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
    private function updateFacet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLinkAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateObjectAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ObjectIdentifier'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateSchema(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SchemaArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateTypedLinkFacet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function upgradeAppliedSchema(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpgradedSchemaArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function upgradePublishedSchema(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpgradedSchemaArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}